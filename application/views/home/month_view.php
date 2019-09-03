<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/5/2018
 * Time: 12:55 PM
 */?>
<?php $this->load->view('shared/header')?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="icofont icofont-users-alt-5 bg-c-yellow"></i>
                                    <div class="d-inline">
                                        <h4>Expire next month</h4>
                                        <span>Insurance expire next month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo base_url()?>">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Expire Next Month</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card">

                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>Client Name</th>
                                                    <th>Insurance Company</th>
                                                    <th>Expiry Date</th>
                                                    <th>Contact no</th>
                                                    <th>Email</th>
                                                    <th>Issued by</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (!isset($client['error'])){
                                                    foreach($client as $cd){ ?>
                                                        <tr>
                                                            <td><a href="<?php echo base_url('home/detail/'.$cd->client_id)?>"><?php echo $cd->client_name ?></a></td>
                                                            <td><?php echo $cd->company_name; ?></td>
                                                            <td><?php echo date_format(date_create($cd->date_expiry), 'jS F Y')?></td>
                                                            <td><?php echo $cd->contact_no ?></td>
                                                            <td><?php echo $cd->email ?></td>
                                                            <td><?php echo $cd->firstname." ".$cd->lastname ?></td>
                                                        </tr>
                                                    <?php } } ?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Client Name</th>
                                                    <th>Insurance Company</th>
                                                    <th>Expiry Date</th>
                                                    <th>Contact no</th>
                                                    <th>Email</th>
                                                    <th>Issued by</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $this->load->view('shared/footer') ?>
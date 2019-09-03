<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 01/09/2018
 * Time: 1:22 PM
 */
?>
<?php $this->load->view('shared/header')?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body user-profile">
                <div class="page-wrapper">

                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="icofont icofont-justify-all bg-c-green"></i>
                                    <div class="d-inline">
                                        <h4>Client Details</h4>
                                        <span>Full client details</span>
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
                                        <li class="breadcrumb-item"><a href="#">Client details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Client Data</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-danger waves-effect waves-light f-right" onclick="delConfirm()">
                                           Delete <i class="icofont icofont-trash"></i>
                                        </button>
                                    </div>
                                    <script>
                                        function delConfirm() {
                                            swal({
                                                title:"Are you sure?",
                                                text:"You will not be able to recover this information!",
                                                type:"warning",
                                                showCancelButton:true,
                                                confirmButtonClass:"btn-danger",
                                                confirmButtonText:"Yes, delete it!",
                                                cancelButtonText:"No, cancel please!",
                                                closeOnConfirm:false,
                                                closeOnCancel:false
                                            },function(isConfirm) {
                                                if(isConfirm){
                                                    swal("Deleted!","Your client details has been deleted.","success");
                                                }else{
                                                    swal("Cancelled","Your information is safe","error");
                                                }
                                            });
                                        }
                                    </script>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <?php if (!isset($detail['error'])){
                                                                foreach($detail as $cd){ ?>
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row">Client Name</th>
                                                                            <td><?php echo $cd->client_name?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Insurance Company</th>
                                                                            <td><?php echo $cd->company_name?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Insurance Type</th>
                                                                            <td><?php echo $cd->type_name?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Value</th>
                                                                            <td><?php echo $english_format_number = number_format($cd->value, 0, '.', ',')." TZS"; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Amount Paid</th>
                                                                            <td><?php echo $english_format_number = number_format($cd->amount, 0, '.', ',')." TZS"; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Date Insured</th>
                                                                            <td><?php echo date_format(date_create($cd->date_insured), 'jS F Y') ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Expiry Date</th>
                                                                            <td>
                                                                                <?php
                                                                                echo date_format(date_create($cd->date_expiry), 'jS F Y');
                                                                                if (date('Y-m-d') > date_create($cd->date_expiry)){ ?>
                                                                                    <a href="<?php echo base_url('home/renew/'.$cd->client_id)?>" class="btn btn-success">Renew</a>
                                                                                <?php }?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><?php echo $cd->email?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Mobile Number</th>
                                                                            <td><?php echo $cd->contact_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Issued By</th>
                                                                            <td><?php echo $cd->firstname." ".$cd->lastname ?></td>
                                                                        </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row">Cover Note Number</th>
                                                                            <td><?php echo $cd->covernote_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Sticker Number</th>
                                                                            <td><?php echo $cd->sticker_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Receipt Number</th>
                                                                            <td><?php echo $cd->receipt_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Registration Number</th>
                                                                            <td><?php echo $cd->registration_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Type of vehicle</th>
                                                                            <td><?php echo $cd->vehicle_type?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Vehicle color</th>
                                                                            <td><?php echo $cd->vehicle_color?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Chassis Number</th>
                                                                            <td><?php echo $cd->chassis_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Engine Number</th>
                                                                            <td><?php echo $cd->engine_no?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Year of Manufacture</th>
                                                                            <td><?php echo $cd->manufacture_year?></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <?php } } ?>
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
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('shared/footer') ?>
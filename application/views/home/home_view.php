<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/2/2018
 * Time: 3:17 PM
 */?>
<?php $this->load->view('shared/header')?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                            <div class="col-md-6 col-xl-4">
                                <div class="card widget-statstic-card">
                                    <div class="card-header">
                                        <div class="card-header-left">
                                            <h5>Expire Next Month</h5>
                                            <p class="p-t-10 m-b-0 text-c-yellow">Insurance expire within a month</p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <a href="<?php echo base_url('home/month')?>">
                                            <i class="icofont icofont-users-alt-5 st-icon bg-c-yellow"></i>
                                        </a>
                                        <div class="text-left">
                                            <h3 class="d-inline-block"><?php echo $month_count ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card widget-statstic-card">
                                    <div class="card-header">
                                        <div class="card-header-left">
                                            <h5>Expired</h5>
                                            <p class="p-t-10 m-b-0 text-c-pink">Expired insurance</p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <a href="<?php echo base_url('home/expired')?>">
                                            <i class="icofont icofont-ui-user-group st-icon bg-c-pink txt-lite-color"></i>
                                        </a>
                                        <div class="text-left">
                                            <h3 class="d-inline-block"><?php echo $expired_count ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card widget-statstic-card">
                                    <div class="card-header">
                                        <div class="card-header-left">
                                            <h5>Active</h5>
                                            <p class="p-t-10 m-b-0 text-c-blue">Active insurance</p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <a href="<?php echo base_url('home/active')?>">
                                            <i class="icofont icofont-users-social st-icon bg-c-blue"></i>
                                        </a>
                                        <div class="text-left">
                                            <h3 class="d-inline-block"><?php echo $active_count ?></h3>
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
<?php $this->load->view('shared/footer')?>
<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 01/18/2018
 * Time: 12:25 PM
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
                                <i class="icofont icofont-user bg-c-yellow"></i>
                                <div class="d-inline">
                                    <h4>Renew Client</h4>
                                    <span>Fill the form below to renew client insurance</span>
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
                                    <li class="breadcrumb-item"><a href="#">Renew Client</a>
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
                                    <div class="j-wrapper j-wrapper-640">
                                        <?php
                                        $attributes = array('class' => 'j-pro', 'id' => 'j-pro');
                                        echo form_open('home/renew', $attributes);
                                        if (!isset($detail['error'])){
                                        foreach($detail as $cd){
                                        ?>
                                        <div class="j-content">

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="cname">
                                                        <i class="icofont icofont-user"></i>
                                                    </label>
                                                    <input type="text" placeholder="Client name" value="<?php echo $cd->client_name ?>" id="cname" name="cname">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <label class="j-input j-select">
                                                    <select name="company">
                                                        <option value="" selected>Choose Insurance company</option>
                                                        <?php if (!isset($company['error'])){
                                                            foreach($company as $co){ ?>
                                                                <option value="<?php echo $co->company_id; ?>" <?php if($co->company_id == $cd->company_id){ echo set_select('company', $co->company_id, true); } ?> id="company"><?php echo $co->company_name; ?></option>
                                                            <?php } }?>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>

                                            <div class="j-unit">
                                                <label class="j-input j-select">
                                                    <select name="type">
                                                        <option value="" selected>Choose Insurance type</option>
                                                        <?php if (!isset($type['error'])){
                                                            foreach($type as $ty){ ?>
                                                                <option value="<?php echo $ty->type_id; ?>" <?php if($ty->type_id == $cd->type_id){ echo set_select('type', $ty->type_id, true); } ?> id="type"><?php echo $ty->type_name; ?></option>
                                                            <?php } }?>
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="amount">
                                                        <i class="icofont icofont-money"></i>
                                                    </label>
                                                    <input type="text" placeholder="Amount" value="<?php echo $cd->amount?>" id="amount" name="amount">
                                                </div>
                                            </div>

                                            <div class="j-row">
                                                <div class="j-span6 j-unit">
                                                    <div class="j-input">
                                                        <label class="j-icon-left" for="date_insured">
                                                            <i class="icofont icofont-calendar"></i>
                                                        </label>
                                                        <input type="date" id="date_insured" name="date_insured" onfocusout="setExpiry()" class="date-group">
                                                        <span class="j-tooltip j-tooltip-right-top">Date Insured</span>
                                                    </div>
                                                </div>
                                                <div class="j-span6 j-unit">
                                                    <div class="j-input">
                                                        <label class="j-icon-left" for="date_expiry">
                                                            <i class="icofont icofont-calendar"></i>
                                                        </label>
                                                        <input type="date" id="date_expiry" name="date_expiry" class="date-group">
                                                        <span class="j-tooltip j-tooltip-right-top">Expiry date</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                function setExpiry() {
                                                    var id = new Date(document.getElementById("date_insured").value);
                                                    var ed = new Date(id.setDate(id.getDate() + 364));
                                                    var m, d, gm = "";
                                                    if(ed.getMonth()+1 < 10 ){
                                                        gm = ed.getMonth()+1
                                                        m = "0"+gm;
                                                    }else{
                                                        m = ed.getMonth()+1;
                                                    }
                                                    if(ed.getDate() < 10 ){
                                                        d = "0"+ed.getDate();
                                                    } else {
                                                        d = ed.getDate();
                                                    }
                                                    var dd = ed.getFullYear()+'-'+m+'-'+d;

                                                    document.getElementById("date_expiry").value = dd;
                                                }
                                            </script>

                                            <div class="j-divider j-gap-bottom-25"></div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="email">
                                                        <i class="icofont icofont-envelope"></i>
                                                    </label>
                                                    <input type="email" placeholder="Email" value="<?php echo $cd->email?>" id="email" name="email">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="phone_no">
                                                        <i class="icofont icofont-phone"></i>
                                                    </label>
                                                    <input type="text" id="phone_no" name="phone_no" value="<?php echo $cd->contact_no?>" placeholder="Phone number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="covernote_no">
                                                        <i class="icofont icofont-ui-note"></i>
                                                    </label>
                                                    <input type="text" id="covernote_no" value="<?php echo $cd->covernote_no?>" name="covernote_no" placeholder="Cover note number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="sticker_no">
                                                        <i class="icofont icofont-safety"></i>
                                                    </label>
                                                    <input type="text" id="sticker_no" value="<?php echo $cd->sticker_no?>" name="sticker_no" placeholder="Sticker number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="receipt_no">
                                                        <i class="icofont icofont-notepad"></i>
                                                    </label>
                                                    <input type="text" id="receipt_no" value="<?php echo $cd->receipt_no?>" name="receipt_no" placeholder="Receipt number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="registration_no">
                                                        <i class="icofont icofont-phone"></i>
                                                    </label>
                                                    <input type="text" id="registration_no" value="<?php echo $cd->registration_no?>" name="registration_no" placeholder="Registration number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="vehicle_type">
                                                        <i class="icofont icofont-envelope"></i>
                                                    </label>
                                                    <input type="text" placeholder="Type of vehicle" value="<?php echo $cd->vehicle_type?>" id="vehicle_type" name="vehicle_type">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="vehicle_color">
                                                        <i class="icofont icofont-ui-note"></i>
                                                    </label>
                                                    <input type="text" id="vehicle_color" value="<?php echo $cd->vehicle_color?>" name="vehicle_color" placeholder="Vehicle color">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="chassis_no">
                                                        <i class="icofont icofont-safety"></i>
                                                    </label>
                                                    <input type="text" id="chassis_no" value="<?php echo $cd->chassis_no?>" name="chassis_no" placeholder="Chassis number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="engine_no">
                                                        <i class="icofont icofont-notepad"></i>
                                                    </label>
                                                    <input type="text" id="engine_no" value="<?php echo $cd->engine_no?>" name="engine_no" placeholder="Engine number">
                                                </div>
                                            </div>

                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-left" for="manufacture_year">
                                                        <i class="icofont icofont-notepad"></i>
                                                    </label>
                                                    <input type="text" id="manufacture_year" value="<?php echo $cd->manufacture_year?>" name="manufacture_year" placeholder="Year of manufacture">
                                                </div>
                                            </div>

                                            <div class="j-response"></div>
                                        </div>

                                        <div class="j-footer">
                                            <button type="submit" class="btn btn-primary">Renew</button>
                                        </div>
                                        <?php } } ?>
                                        </form>
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
<script type="text/javascript" src="<?php echo base_url('assets/js/client-form.js')?>"></script>
<?php $this->load->view('shared/footer')?>
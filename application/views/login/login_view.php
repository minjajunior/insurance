<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/2/2018
 * Time: 1:28 PM
 */?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demi Insurance</title>

    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="">
    <meta name="author" content="#">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themify-icons.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/icofont.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body class="fix-menu">

<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>

<section class="login p-fixed d-flex text-center bg-primary common-img-bg">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="login-card card-block auth-body mr-auto ml-auto">
                    <?php $attributes = array('class' => 'md-float-material', 'id' => 'login_form');
                    echo form_open('login', $attributes); ?>
                        <div class="text-center">
                            <h3></h3>
                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-left txt-primary">Demi Insurance - Sign In</h3>
                                </div>
                            </div>
                            <hr />
                            <div id="login-response"></div>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" required="" placeholder="Your Email Address">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" required="" placeholder="Password">
                                <span class="md-line"></span>
                            </div>
                            <!--div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right f-right">
                                        <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Password?</a>
                                    </div>
                                </div>
                            </div-->
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you and enjoy our system.</p>
                                    <p class="text-inverse text-left"><b>Demi Corporation Team</b></p>
                                </div>
                                <!--div class="col-md-2">
                                    <img src="../files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                </div-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?php echo base_url('assets/images/browser/chrome.png')?>" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php echo base_url('assets/images/browser/firefox.png')?>" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php echo base_url('assets/images/browser/opera.png')?>" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php echo base_url('assets/images/browser/safari.png')?>" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php echo base_url('assets/images/browser/ie.png')?>" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<script>
    $(document).ready(function() {

        $('#login_form').submit(function(e) {
            e.preventDefault();

            var me = $(this);

            $.ajax({
                url: me.attr('action'),
                type: 'post',
                data: me.serialize(),
                dataType: 'json',
                success: function (response) {
                    if(response.status == 'email') {
                        $('#login-response').append('<div class="alert alert-danger background-danger">Sorry! The email you have entered is not recognised in our system </div>');
                        $('.alert-danger').delay(500).show(10, function() {
                            $(this).delay(3000).hide(10, function() {
                                $(this).remove();
                            });
                        });
                    } else if(response.status == 'password'){
                        $('#login-response').append('<div class="alert alert-danger background-danger">Sorry! Your have entered the wrong password</div>');
                        $('.alert-danger').delay(500).show(10, function() {
                            $(this).delay(3000).hide(10, function() {
                                $(this).remove();
                            });
                        });
                    } else if (response.status == true){
                        window.location.reload();
                    }
                }
            });

        });

    });
</script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/css-scrollbars.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/i18next.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/i18nextXHRBackend.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/i18nextBrowserLanguageDetector.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-i18next.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/common-pages.js')?>"></script>
</body>
</html>
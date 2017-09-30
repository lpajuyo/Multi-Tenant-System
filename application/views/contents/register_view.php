<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Google-Style-Login.css'); ?>">
</head>

<body>
    <div class="container-fluid bgsignin">
        <nav class="navbar navbar-inverse" id="nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-link" href="#"><img src="<?php echo base_url('assets/img/logo.png'); ?>" id="logo"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="<?php echo base_url('mts/login'); ?>">SIGN IN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="login-card">
            <p class="profile-name-card">CREATE AN ACCOUNT</p>
            <?php echo validation_errors(); ?>
            <?php echo form_open('registration','class="form-signin"'); ?>
            <!--<form class="form-signin" action="<?php //echo base_url('registration'); ?>" method="post">--><span class="reauth-email"> </span>
                <input class="form-control" type="text" name="name" placeholder="Name" id="inputName" name="name">
                <input class="form-control" type="email" name="email" required="" placeholder="Email address" id="inputEmail" >
                <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword" name="password">
                <div class="checkbox"></div>
                <input class="btn btn-default btn-block btn-lg btn-signin" type="submit" value="Register"> <!--Register </button>-->
            </form>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>
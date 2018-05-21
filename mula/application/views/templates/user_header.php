<!DOCTYPE html>
<html lang="en" ng-app="mulaApp" ng-controller="mulaUserCtrl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title><?= isset($title) ? APPNAME.TSAPRAT.$title : APPNAME; ?></title>
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/images/favicon/apple-icon-76x76.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/images/favicon/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon/favicon-16x16.png'); ?>">
    <link href="<?= base_url('assets/css/bootstrap-dashboard.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/material-dashboard.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/demo.css'); ?>" rel="stylesheet">
    <link href='<?= base_url('assets/css/font.css'); ?>' rel='stylesheet' type='text/css'>
    <link href='<?= base_url('assets/css/toastr.css'); ?>' rel='stylesheet' type='text/css'>
    <link href='<?= base_url('assets/css/jquery-confirm.css'); ?>' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style type="text/css">
        label.error {
            color: #F44336;
            font-size: 12px;
        }

        #signature {
            width: auto;
            border: dashed 1px #53777A;
            margin: 0;
            margin-bottom: 2em;
            text-align: center;
            border-radius: 3px;
            background: #fdfdfd;
            box-shadow: 0 0 5px 1px #ddd inset;
        }
    </style>
    <script type="text/javascript">
        var baseUrl = "<?= base_url(); ?>";
        var INIT = "user";
    </script>
    <script src="<?= base_url('/assets/js/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?= base_url('/assets/images/logo.png'); ?>">
            <div class="logo">
                <a href="<?= base_url(); ?>" class="simple-text">
                   <img src="<?= base_url('/assets/images/logo.png'); ?>">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li <?= url_active('wallet'); ?>>
                        <a href="<?= base_url('/user/wallet'); ?>">
                            <i class="material-icons">account_balance_wallet</i>
                            <p>Wallet</p>
                        </a>
                    </li>
                    <li <?= url_active('assets'); ?>>
                        <a href="<?= base_url('/user/assets'); ?>">
                        <i class="fa fa-paper-plane"></i> 
                          <p> Assets</p>
                        </a>
                    </li>
                    <li <?= url_active('history'); ?>>
                        <a href="<?= base_url('/user/history'); ?>">
                             <i class="fa fa-clock"></i> 
                            <p>History</p>
                        </a>
                    </li>
                    <li <?= url_active('profile'); ?>>
                        <a href="<?= base_url('/user/profile'); ?>">
                            <i class="material-icons">person</i>
                            <p>Account</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="javascript:;"><?= isset($title) ? $title : APPNAME; ?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:;">No notifications there</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?= base_url('/user/profile') ?>">Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/user/settings') ?>">Settings</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/user/logout') ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>IT Design - <?php echo $title; ?></title>

    <script type="text/javascript" src="<?php echo base_url('assets/js/lumino.glyphs.js'); ?>"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/theme-admin.css'); ?>" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Selamat Datang, <b>Admin</b>
                </div>
            </div>
        </div>
    </header>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="<?php echo ($active == 'index' ? 'menu-top-active' : ''); ?>" href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
                            <li><a class="<?php echo ($active == 'design' ? 'menu-top-active' : ''); ?>" href="<?php echo base_url('admin/design'); ?>">Daftar Design</a></li>
                            <li><a class="<?php echo ($active == 'order' ? 'menu-top-active' : ''); ?>" href="<?php echo base_url('admin/order'); ?>">Permintaan Order</a></li>
                            <li><a class="<?php echo ($active == 'logout' ? 'menu-top-active' : ''); ?>" href="<?php echo base_url('signout'); ?>">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
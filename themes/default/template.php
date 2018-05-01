<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Default Public Template
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=<?php echo $this->settings->site_version; ?>">
	<link rel="icon" type="image/x-icon" href="/favicon.ico?v=<?php echo $this->settings->site_version; ?>">
    <title><?php echo $page_title; ?> - <?php echo $this->settings->site_name; ?></title>
    <meta name="keywords" content="<?php echo $this->settings->meta_keywords; ?>">
    <meta name="description" content="<?php echo $this->settings->meta_description; ?>">
	
	<link rel="stylesheet" href="<?php echo base_url();?>themes/default/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>themes/default/css/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>themes/default/css/login.css">
	<link rel="stylesheet" href="<?php echo base_url();?>themes/default/css/color-theame.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <?php // Fixed navbar ?>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"><?php echo lang('core button toggle_nav'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
									<img class="img-responsive" src="<?php echo base_url();?>themes/default/img/logo-white.png" alt="<?php echo $this->settings->site_name; ?>">
							</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php // Nav bar left ?>
                <ul class="nav navbar-nav">
                    <li class="<?php echo (uri_string() == '') ? 'active' : ''; ?>"><a href="<?php echo base_url('/'); ?>"><?php echo lang('core button home'); ?></a></li>
                                        <li class="<?php echo (uri_string() == 'about') ? 'active' : ''; ?>"><a href="<?php echo base_url('/about'); ?>"><?php echo lang('core button about'); ?></a></li>                    
                                        <li class="<?php echo (uri_string() == 'services') ? 'active' : ''; ?>"><a href="<?php echo base_url('/services'); ?>"><?php echo lang('core button features'); ?></a></li>
										<li class="<?php echo (uri_string() == 'news') ? 'active' : ''; ?>"><a href="<?php echo base_url('/news'); ?>"><?php echo lang('core button news'); ?></a></li>
										<!-- <li class="<?php echo (uri_string() == 'features') ? 'active' : ''; ?>"><a href="<?php echo base_url('/features'); ?>"><?php echo lang('core button features'); ?></a></li>
										<li class="<?php echo (uri_string() == 'features') ? 'active' : ''; ?>"><a href="<?php echo base_url('/features'); ?>"><?php echo lang('core button features'); ?></a></li>
                                        <li class="<?php echo (uri_string() == 'merchant') ? 'active' : ''; ?>"><a href="<?php echo base_url('/merchant'); ?>"><?php echo lang('core button mecrhant'); ?></a></li>
										<li class="<?php echo (uri_string() == 'protect') ? 'active' : ''; ?>"><a href="<?php echo base_url('/protect'); ?>"><?php echo lang('core button protect'); ?></a></li>
										<li class="<?php echo (uri_string() == 'help') ? 'active' : ''; ?>"><a href="<?php echo base_url('/help'); ?>"><?php echo lang('core button help'); ?></a></li> -->
										<li class="<?php echo (uri_string() == 'contact') ? 'active' : ''; ?>"><a href="<?php echo base_url('/contact'); ?>"><?php echo lang('core button contact_us'); ?></a></li>
										
                </ul>
                <?php // Nav bar right ?>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <?php if ($this->user['is_admin']) : ?>
                            <li>
                                <a href="<?php echo base_url('admin'); ?>"><?php echo lang('core button admin'); ?></a>
                            </li>
                        <?php endif; ?>
                     				<a href="<?php echo base_url('/account/dashboard'); ?>" class="btn btn-primary navbar-btn"><i class="icon-home icons"></i> <?php echo lang('core button dashboard'); ?></a>
                            <a href="<?php echo base_url('logout'); ?>" class="btn btn-danger navbar-btn"><i class="icon-logout icons"></i> <?php echo lang('core button logout'); ?></a>
                    
                    <?php else : ?>
                        
                            <a href="<?php echo base_url('login'); ?>" class="btn btn-primary navbar-btn"><i class="icon-user icons"></i> <?php echo lang('core button login'); ?></a>
                        
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
	

    <?php // Main body ?>
		

        <?php // System messages ?>
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php elseif (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo validation_errors(); ?>
            </div>
        <?php elseif ($this->error) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->error; ?>
            </div>
        <?php endif; ?>

        <?php // Main content ?>
        <?php echo $content; ?>


    <?php // Footer ?>
    <footer>
		<div class="footer hidden-print">
            <div class="container high">
                        <div class="row">
                            <div class="col-md-3">
                                
                                <ul class="list-group">
                                    <li class="list-group-item text-white"> <?php echo lang('core menu aus'); ?></li>
                                    <li class="list-group-item text-white"><i class="icon-phone icons"></i> +<?php echo $this->settings->site_phone; ?></a></li>
                                    <li class="list-group-item text-white"><i class="icon-envelope-letter icons"></i> <?php echo $this->settings->site_email; ?></li>
                                    <li class="list-group-item text-white"><i class="icon-social-skype icons"></i> <?php echo $this->settings->site_skype; ?></li>
                                </ul>
                            </div>
                        </div>
            </div>
            <hr>
            <div class="container">
                <div class="footer_image">
                    <img  src="<?php echo base_url();?>themes/default/img/logo-white.png" alt="<?php echo $this->settings->site_name; ?>">
                </div>
            
                <p class="text-left">
                <?php echo lang('core menu terms_des'); ?> | <?php echo lang('core menu terms_des1'); ?>
                </p>
            </div>
		</div>
    </footer>

    <?php // Javascript files ?>
    <?php if (isset($js_files) && is_array($js_files)) : ?>
        <?php foreach ($js_files as $js) : ?>
            <?php if ( ! is_null($js)) : ?>
                <?php echo "\n"; ?><script type="text/javascript" src="<?php echo $js; ?>?v=<?php echo $this->settings->site_version; ?>"></script><?php echo "\n"; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (isset($js_files_i18n) && is_array($js_files_i18n)) : ?>
        <?php foreach ($js_files_i18n as $js) : ?>
            <?php if ( ! is_null($js)) : ?>
                <?php echo "\n"; ?><script type="text/javascript"><?php echo "\n" . $js . "\n"; ?></script><?php echo "\n"; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>

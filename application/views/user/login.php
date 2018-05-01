<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="landing">
        <div class="container">
        <div class="row">
				</div>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                
                </br>
                </br>
                </br>
                </br>
                </br>
				<!-- <div class="row">
					<div class="col-md-12">
						<h1 class="text-center"><?php echo lang('core main welcome'); ?></h1>
						<h4 class="text-center"><?php echo lang('core main get_money'); ?></h4>
					</div>
				</div>
				<div class="row hidden-xs hidden-sm">
					<div class="col-md-4 padding-20">
						<h2 class="text-center"><strong>10000+</strong></h2>
						<h3 class="text-center"><?php echo lang('core main transactions'); ?></h3>
					</div>
					<div class="col-md-4 padding-20">
						<h2 class="text-center"><strong>4000+</strong></h2>
						<h3 class="text-center"><?php echo lang('core main create'); ?></h3>
					</div>
					<div class="col-md-4 padding-20">
						<h2 class="text-center"><strong>140+</strong></h2>
						<h3 class="text-center"><?php echo lang('core main contry'); ?></h3>
					</div>
				</div> -->
			</div>
		</div>
</div>
<div class="header-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-6 col-xs-7">
						<h3><?php echo lang('core button login'); ?></h3>
					</div>
				</div>
			</div>
</div>

<div class="container theme-showcase" role="main">
  
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <?php echo form_open('', array('class'=>'form-signin')); ?>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('users input username_email'); ?></label>
            <?php echo form_input(array('name'=>'username', 'id'=>'username', 'class'=>'form-control', 'maxlength'=>256)); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('users input password'); ?></label>
             <?php echo form_password(array('name'=>'password', 'id'=>'password', 'class'=>'form-control', 'maxlength'=>72, 'autocomplete'=>'off')); ?>
          </div>
          <?php echo form_submit(array('name'=>'submit', 'class'=>'btn btn-primary pull-right'), lang('core button login')); ?>
          <p><br /><a href="<?php echo base_url('user/forgot'); ?>"><?php echo lang('users link forgot_password'); ?></a></p>
          <p><a href="<?php echo base_url('user/register'); ?>"><?php echo lang('users link register_account'); ?></a></p>
        <?php echo form_close(); ?>
      </div>
    </div>
    </div>
  </div>
  
</div>

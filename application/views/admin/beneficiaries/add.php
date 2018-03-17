<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
      <div class="card-header bordered">
        <div class="header-block">
           <h3 class="title"><?php echo lang('admin input beneficiary_detail'); ?></h3> 
        </div>
       <ul class="nav nav-tabs pull-right" role="tablist">
          <li class="nav-item"> <a class="nav-link active" href="#overview" role="tab" data-toggle="tab"><?php echo lang('admin input overview'); ?></a> </li>
       </ul>
     </div>
     <div class="card-block">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active fade in" id="overview">
            <?php echo form_open('', array('role'=>'form')); ?>

              <?php // hidden id ?>
              <?php if (isset($user_id)) : ?>
                  <?php echo form_hidden('id', $user_id); ?>
              <?php endif; ?>
              <div class="row">
                  <?php // username ?>
                  <div class="form-group col-sm-4<?php echo form_error('username') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input username'), 'username', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'username', 'value'=>set_value('username', (isset($user['username']) ? $user['username'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>

                  <?php // first name ?>
                  <div class="form-group col-sm-4<?php echo form_error('first_name') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input first_name'), 'first_name', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>

                  <?php // last name ?>
                  <div class="form-group col-sm-4<?php echo form_error('last_name') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input last_name'), 'last_name', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
              </div>

              <div class="row">

                  <?php // email ?>
                  <div class="form-group col-sm-4<?php echo form_error('email') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input email'), 'email', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                
                  <?php // phone ?>
                  <div class="form-group col-sm-4<?php echo form_error('phone') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input phone'), 'phone', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'phone', 'value'=>set_value('phone', (isset($user['phone']) ? $user['phone'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
              </div>
              <div class="row">

                  <?php // address ?>
                  <div class="form-group col-sm-4<?php echo form_error('address1') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input address1'), 'address1', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'address1', 'value'=>set_value('address1', (isset($user['address1']) ? $user['address1'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                
                  <?php // address2 ?>
                  <div class="form-group col-sm-4<?php echo form_error('address2') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input address2'), 'address1', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'address2', 'value'=>set_value('address2', (isset($user['address2']) ? $user['address2'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                
                  <?php // city ?>
                  <div class="form-group col-sm-4<?php echo form_error('city') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input city'), 'city', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'city', 'value'=>set_value('city', (isset($user['city']) ? $user['city'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                  <?php // state ?>
                  <div class="form-group col-sm-4<?php echo form_error('state') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input state'), 'state', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'state', 'value'=>set_value('state', (isset($user['state']) ? $user['state'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
              </div>
              <div class="row">

                  <?php // account details ?>
                  <div class="form-group col-sm-4<?php echo form_error('account_number') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input account'), 'account_number', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'account_number', 'value'=>set_value('account_number', (isset($user['account_number']) ? $user['account_number'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                  <?php // bank  code details ?>
                  <div class="form-group col-sm-4<?php echo form_error('bank_code') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('admin input bank_code'), 'bank_code', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'bank_code', 'value'=>set_value('bank_code', (isset($user['bank_code']) ? $user['bank_code'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                
              </div>
              
              <div class="row">
                <?php // buttons ?>
              <div class="pull-right">
                <div class="col-md-12">
                  <a class="btn btn-secondary btn-sm" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
                  <button type="submit" name="submit" class="btn btn-primary btn-sm"><?php echo lang('core button save'); ?></button>
                </div>
              </div>
              </div>

          
          </div>
          <?php echo form_close(); ?>

        </div>
     </div>
    </div>
  </div>
</div>
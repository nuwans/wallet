<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    <div class="row">
      <div class="col-md-6">
         <h4 class="title"><?php echo lang('users benificiaries create'); ?></h4>
      </div>
      <div class="col-md-6 hidden-xs">
        <a href="../account/beneficiaries" class="btn btn-primary margin-left-10 pull-right"><i class="icon-action-undo icons"></i> <?php echo lang('users disputes back'); ?></a>
      </div>
    </div>
    <?php echo form_open(site_url("account/start_beneficiary/"), array("" => "")) ?>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries fname'); ?></label>
                    <input type="text" class="form-control"  value="<?php echo set_value('first_name'); ?>" name="first_name">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries lname'); ?></label>
                    <input type="text" class="form-control" name="last_name">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries email'); ?></label>
                    <input type="text" class="form-control" name="email">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries address1'); ?></label>
                    <input type="text" class="form-control" name="address1">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries address2'); ?></label>
                    <input type="text" class="form-control" name="address2">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries city'); ?></label>
                    <input type="text" class="form-control" name="city">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries state'); ?></label>
                    <input type="text" class="form-control" name="state">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries phone'); ?></label>
                    <input type="text" class="form-control" name="phone">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries account'); ?></label>
                    <input type="text" class="form-control" name="account_number">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries bank_code'); ?></label>
                    <input type="text" class="form-control" name="bank_code">
                  </div>
              </div>
              <div class="col-md-12">
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary">
                    <?php echo lang('users benificiaries send'); ?>
                  </button>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>  
     
    </div>


<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

   <?php
    $disabled="";
    if($type=='view' ||$type=='delete'){
        $disabled='disabled';
    }
   ?>
    <div class="row">
      <div class="col-md-6">
         <?php 
            if($type=='delete'){?>
                <div class="alert alert-danger">
                    <strong>Warning!</strong> This  action cannot be  undone.
                </div>
         
         <?php } ?>
         <h4 class="title"><?php echo $beneficiary['first_name'] ?> <?php echo $beneficiary['last_name'] ?></h4>

      </div>
      <div class="col-md-6 hidden-xs">
        <form method="POST" action="<?php echo base_url();?>SCI/form">

          <input type="hidden" name="order" value="134543" /> 
          <input type="hidden" name="beneficiary" value="<?php echo $beneficiary['id'] ?>" /> 
          <input type="hidden" name="item_name" value="Testing payment" />
          <input type="hidden" name="amount" value="350.00" />
          <input type="hidden" name="custom" value="comment" />
          <button type="submit" class="btn btn-primary margin-left-10 pull-right"><i class="icon-share-alt icons"></i> <?php echo lang('users merchants test'); ?></button>
          
        </form>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        <?php 
        $idOfBen= $beneficiary['id'];
        $params_of_form=['account','edit_beneficiary',$idOfBen];
        if($type=='delete'){
         $params_of_form=['account','delete_beneficiary',$idOfBen];
        }
        echo form_open(site_url($params_of_form),array("" => ""));
         ?>
        <div class="row">
          <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries fname'); ?></label>
                    <input type="text" <?php echo $disabled?>  class="form-control"  value="<?php echo $beneficiary['first_name'] ; ?>" name="first_name">
                  </div>
           </div>
           <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries lname'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"  value="<?php echo $beneficiary['last_name'] ; ?>" name="last_name">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries address1'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"  value="<?php echo $beneficiary['address1'] ; ?>" name="address1">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries address2'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"  value="<?php echo $beneficiary['address2'] ; ?>" name="address2">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries city'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"   value="<?php echo $beneficiary['city'] ; ?>" name="city">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries state'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"   value="<?php echo $beneficiary['state'] ; ?>" name="state">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries phone'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"  value="<?php echo $beneficiary['phone'] ; ?>" name="phone">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries account'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"  value="<?php echo $beneficiary['account_number'] ; ?>" name="account_number">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label><?php echo lang('users benificiaries bank_code'); ?></label>
                    <input type="text" <?php echo $disabled?> class="form-control"  value="<?php echo $beneficiary['bank_code'] ; ?>" name="bank_code">
                  </div>
              </div>
          
          <div class="col-md-12 col-xs-12">
            <div class="form-group pull-right hidden-print">
            <?php if($type=='edit'){?>
                <button type="submit" class="btn btn-primary">
                        <?php echo lang('users benificiaries save'); ?>
                </button>
            <?php } ?>
            <?php if($type=='delete'){?>
                <button type="submit" class="btn btn-primary btn-danger">
                        <?php echo lang('users benificiaries delete'); ?>
                </button>
            <?php } ?>
                <a class="btn btn-default" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
            </div>
          </div>
          
        </div>
      <?php echo form_close(); ?>  
      </div>
    </div>

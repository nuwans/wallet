<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script >
(function($) {
    var argument = $('input[name="amount"]'),
      result = $('input[name="sum"]'),
      custom_fees=<?php echo $user["is_custom_fees"]; ?>,
      multiplier = <?php echo $fee; ?>;
    argument.on('input', function() {
        if(custom_fees==0){
            if($(this).val()<=2000){
            multiplier=<?php echo $fee; ?>
            }
            if($(this).val()>2000){
                multiplier=<?php echo $fee1; ?>
            }
            if($(this).val()>3000){
                multiplier=<?php echo $fee2; ?>
            }
            result.val($(this).val() * multiplier);

        }else{
            result.val($(this).val() *<?php echo $user["transaction_fees"]/100; ?>);
        }
        
      
    });
  });
})(jQuery);;
</script>

    <div class="row">
      <div class="col-md-6">
         <h4 class="title"><?php echo lang('users title form_transfer'); ?></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <?php echo form_open(site_url("account/start_transfer/"), array("" => "")) ?>
            <?php echo form_hidden('beneficiary', $transactions['receiver']); ?>
            <div class="col-md-5">
                <div class="form-group">
                    <label><?php echo lang('users transfer amount'); ?></label>
                    <input type="text" class="form-control" name="amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" value="<?php echo $transactions['amount'] ; ?>"  placeholder="0.00">
                  </div>
                </div>
            <div class="col-md-2">
              <div class="form-group">
                <label><?php echo lang('users trans cyr'); ?></label>
                  <select class="form-control" name="currency">
                    <option value="debit_base">
                    <?php echo $this->currencys->display->base_code ?>
                    </option>
                    <?php if($this->currencys->display->extra1_check) : ?>
                    <option value="debit_extra1">
                    <?php echo $this->currencys->display->extra1_code ?>
                    </option>
                    <?php endif; ?>
                    <?php if($this->currencys->display->extra2_check) : ?>
                    <option value="debit_extra2">
                    <?php echo $this->currencys->display->extra2_code ?>
                    </option>
                    <?php endif; ?>
                    <?php if($this->currencys->display->extra3_check) : ?>
                    <option value="debit_extra3">
                    <?php echo $this->currencys->display->extra3_code ?>
                    </option>
                    <?php endif; ?>
                    <?php if($this->currencys->display->extra4_check) : ?>
                    <option value="debit_extra4">
                    <?php echo $this->currencys->display->extra4_code ?>
                    </option>
                    <?php endif; ?>
                    <?php if($this->currencys->display->extra5_check) : ?>
                    <option value="debit_extra5">
                    <?php echo $this->currencys->display->extra5_code ?>
                    </option>
                    <?php endif; ?>
                  </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label> <?php
                        if($user["is_custom_fees"]==1){ 
                            echo lang('users transfer sum');
                             echo $percent;
                             echo "%";

                         }else{
                            echo lang('users transfer sum');
                            echo $percent; 
                            echo "%";
                         } 
                         
                         ?>
                    
                  
                    </label>
                    <input type="text" class="form-control" name="sum" value="<?php echo $transactions['fee'] ; ?>" disabled>
                  </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                    <label><?php echo lang('users transfer receiver_id'); ?></label>
                    <input type="text" class="form-control"  value="<?php echo $transactions['receiver'] ; ?>" name="receiver" disabled>
               </div> 
              <div class="form-group">
                    <label><?php echo lang('users reqest note'); ?></label>
                    <textarea class="form-control" rows="5" value="<?php if($transactions['user_comment']){echo $transactions['user_comment'] ;}else{echo '';} ?>" name="note"></textarea>
                  </div>
              <div class="pull-right">
                  <button type="submit" class="btn btn-primary">
                    <?php echo lang('users transfer send'); ?>
                  </button>
                </div>
                </div>
            </div>

           <?php echo form_close(); ?>  
          </div>
        </div>
      </div>
     
    </div>


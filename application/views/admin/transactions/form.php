<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
                            <div class="col-md-12">
                                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                                    <div class="card-header bordered">
                                        <div class="header-block">
                                            <h3 class="title"><?php echo lang('admin trans edit'); ?></h3>
                                        </div>
                                        <div class="header-block pull-right">
                                          <?if($transactions['status'] == 1){?>
                                            <span class="label label-primary"> <?php echo lang('users trans pending'); ?> </span>
                                          <?}else{?>
                                          <?}?>
                                          <?if($transactions['status'] == 2){?>
                                            <span class="label label-success"> <?php echo lang('users trans success'); ?> </span>
                                          <?}else{?>
                                          <?}?>
                                          <?if($transactions['status'] == 3){?>
                                            <span class="label label-default"> <?php echo lang('users trans refund'); ?> </span>
                                          <?}else{?>
                                          <?}?>
                                          <?if($transactions['status'] == 4){?>
                                            <span class="label label-danger"> <?php echo lang('users trans dispute'); ?> </span>
                                          <?}else{?>
                                          <?}?>
                                          <?if($transactions['status'] == 5){?>
                                            <span class="label label-warning"> <?php echo lang('users trans blocked'); ?> </span>
                                          <?}else{?>
                                          <?}?>
                                        </div>
                                    </div>
                                    <section class="example">
                                        <div class="card-block">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <?php echo form_open('', array('role'=>'form')); ?>

                                                <?php // hidden id ?>
                                                <?php if (isset($transactions_id)) : ?>
                                                    <?php echo form_hidden('id', $transactions_id); ?>
                                                <?php endif; ?>
                                                <div class="row">

                                               <?php // type ?>
                                                    <div class="form-group col-sm-3<?php echo form_error('type') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans type'), '', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                         <div> 
                                                            <label style="font-weight:500">
                                                                <?php echo form_radio(array('class'=>'radio', 'type'=>'radio', 'name'=>'type', 'id'=>'type-1', 'value'=>'1', 'checked'=>((isset($transactions['type']) && (int)$transactions['type'] == 1) ? 'checked' : FALSE))); ?>
                                                                <span><?php echo lang('admin trans deposit'); ?></span>
                                                            </label>
                                                        </div>
                                                        <!-- <div>
                                                            <label style="font-weight:500">
                                                                <?php echo form_radio(array('class'=>'radio', 'type'=>'radio', 'name'=>'type', 'id'=>'type-2', 'value'=>'2', 'checked'=>((isset($transactions['type']) && (int)$transactions['type'] == 2) ? 'checked' : FALSE))); ?>
                                                                <span><?php echo lang('admin trans withdrawal'); ?></span>
                                                            </label>
                                                        </div> -->
                                                        <div>
                                                            <label style="font-weight:500">
                                                                <?php echo form_radio(array('class'=>'radio', 'type'=>'radio', 'name'=>'type', 'id'=>'type-3', 'value'=>'3', 'checked'=>((isset($transactions['type']) && (int)$transactions['type'] == 3) ? 'checked' : FALSE))); ?>
                                                                <span><?php echo lang('admin trans transfer'); ?></span>
                                                            </label>
                                                        </div>
                                                        <!-- <div>
                                                            <label style="font-weight:500">
                                                                <?php echo form_radio(array('class'=>'radio', 'type'=>'radio', 'name'=>'type', 'id'=>'type-4', 'value'=>'4', 'checked'=>((isset($transactions['type']) && (int)$transactions['type'] == 4) ? 'checked' : FALSE))); ?>
                                                                <span><?php echo lang('admin trans exchange'); ?></span>
                                                            </label>
                                                        </div> -->
                                                       <!--  <div>
                                                            <label style="font-weight:500">
                                                                <?php echo form_radio(array('class'=>'radio', 'type'=>'radio', 'name'=>'type', 'id'=>'type-5', 'value'=>'5', 'checked'=>((isset($transactions['type']) && (int)$transactions['type'] == 5) ? 'checked' : FALSE))); ?>
                                                              <span><?php echo lang('admin trans external'); ?></span>
                                                            </label>
                                                        </div> -->
                                                     </div>


                                                      <?php // sender ?>
                                                      <div class="form-group col-sm-4<?php echo form_error('sender') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans sender'), 'sender', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_input(array('name'=>'sender', 'value'=>set_value('sender', (isset($transactions['sender']) ? $transactions['sender'] : '')), 'class'=>'form-control underlined')); ?>
                                                        <?php 
                                                            if($transactions['type']=='3'){?>
                                                                <?php echo form_label(lang('admin trans receiver_fname'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'sender_name','disabled'=>true, 'value'=>set_value('sender', (isset($sender['first_name']) ? $sender['first_name'] : '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_lname'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_lname','disabled'=>true, 'value'=>set_value('sender_lname', (isset($sender['last_name']) ? $sender['last_name'] : '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_email'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'email','disabled'=>true, 'value'=>set_value('sender_email', (isset($sender['email']) ? $sender['email']: '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_phone'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'sender_phone','disabled'=>true, 'value'=>set_value('sender_phone', (isset($sender['phone']) ? $sender['phone']: '')), 'class'=>'form-control underlined')); ?>
                                                        <?php }
                                                        ?>
                                                        
                                                      </div>

                                                      <?php // receiver ?>
                                                      <div class="form-group col-sm-4<?php echo form_error('receiver') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans receiver'), 'receiver', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_input(array('name'=>'receiver', 'value'=>set_value('receiver', (isset($transactions['receiver']) ? $transactions['receiver'] : '')), 'class'=>'form-control underlined')); ?>
                                                        <?php 
                                                            if($transactions['type']=='3'){?>
                                                                <?php echo form_label(lang('admin trans receiver_fname'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_name','disabled'=>true, 'value'=>set_value('receiver_name', (isset($receiver['first_name']) ? $receiver['first_name'] : '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_lname'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_lname','disabled'=>true, 'value'=>set_value('receiver_lname', (isset($receiver['last_name']) ? $receiver['last_name'] : '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_address'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_address','disabled'=>true, 'value'=>set_value('receiver_address', (isset($receiver['address1']) ? $receiver['address1'].', '.$receiver['address2'].', '. $receiver['city'].', '. $receiver['state']  : '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_acount_number'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_account','disabled'=>true, 'value'=>set_value('acount_number', (isset($receiver['account_number']) ? $receiver['account_number']: '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_bank_code'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_bank_code','disabled'=>true, 'value'=>set_value('bank_code', (isset($receiver['bank_code']) ? $receiver['bank_code']: '')), 'class'=>'form-control underlined')); ?>
                                                                <?php echo form_label(lang('admin trans receiver_phone'), 'receiver', array('class'=>'control-label')); ?>
                                                                <?php echo form_input(array('name'=>'receiver_phone','disabled'=>true, 'value'=>set_value('phone', (isset($receiver['phone']) ? $receiver['phone']: '')), 'class'=>'form-control underlined')); ?>
                                                        <?php }
                                                        ?>
                                                      </div>
                                                      <?php // receiver name ?>
                                                      
                                                     

                                                      <?php // time ?>
                                                      <div class="form-group col-sm-9<?php echo form_error('time') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans time'), 'time', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_input(array('name'=>'time', 'value'=>set_value('time', (isset($transactions['time']) ? $transactions['time'] : '')), 'class'=>'form-control underlined')); ?>
                                                      </div>
                                                  </div>

                                                  <div class="row">

                                                    <?php // amount ?>
                                                      <div class="form-group col-sm-4<?php echo form_error('amount') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans amount'), 'amount', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_input(array('name'=>'amount', 'value'=>set_value('amount', (isset($transactions['amount']) ? $transactions['amount'] : '')), 'class'=>'form-control underlined')); ?>
                                                      </div>

                                                    <?php // fee ?>
                                                      <div class="form-group col-sm-4<?php echo form_error('fee') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans fee'), 'fee', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_input(array('name'=>'fee', 'value'=>set_value('fee', (isset($transactions['fee']) ? $transactions['fee'] : '')), 'class'=>'form-control underlined')); ?>
                                                      </div>

                                                      <?php // sum ?>
                                                      <div class="form-group col-sm-4<?php echo form_error('sum') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans sum'), 'sum', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_input(array('name'=>'sum', 'value'=>set_value('sum', (isset($transactions['sum']) ? $transactions['sum'] : '')), 'class'=>'form-control underlined')); ?>
                                                      </div>

                                                      <?php // user comment ?>
                                                      <div class="form-group col-sm-6<?php echo form_error('user_comment') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans comment'), 'user_comment', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_textarea(array('name'=>'user_comment', 'value'=>set_value('user_comment', (isset($transactions['user_comment']) ? $transactions['user_comment'] : '')), 'class'=>'form-control underlined')); ?>
                                                      </div>

                                                       <?php // admin comment ?>
                                                      <div class="form-group col-sm-6<?php echo form_error('admin_comment') ? ' has-error' : ''; ?>">
                                                        <?php echo form_label(lang('admin trans admin_comment'), 'admin_comment', array('class'=>'control-label')); ?>
                                                        <span class="required">*</span>
                                                        <?php echo form_textarea(array('name'=>'admin_comment', 'value'=>set_value('admin_comment', (isset($transactions['admin_comment']) ? $transactions['admin_comment'] : '')), 'class'=>'form-control underlined')); ?>
                                                      </div>

                                                  </div>

                                                  <?php // buttons ?>
                                                </br>
     

                                                


                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align:right"> 
                                             <a class="btn btn-secondary btn-sm" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
                                                <div class="btn-group dropup"> 
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang('admin trans status'); ?></button>
                                                    <div class="dropdown-menu"> 
                                                      <a class="dropdown-item" href="<?php echo base_url();?>admin/transactions/start_confirm/<?php echo $transactions['id']; ?>"><?php echo lang('admin trans success'); ?></a> 
                                                      <a class="dropdown-item" href="<?php echo base_url();?>admin/transactions/start_refund/<?php echo $transactions['id']; ?>"><?php echo lang('admin trans refund'); ?></a> 
                                                      <a class="dropdown-item" href="<?php echo base_url();?>admin/transactions/start_blocked/<?php echo $transactions['id']; ?>"><?php echo lang('admin trans blocked'); ?></a> 
                                                    </div>
                                                  </div>
                                          
                                          
                                                 <?if($transactions['type']==2){?>
                                                   <?if($transactions['status']==1){?>
                                                   <div class="btn-group dropup"> 
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang('admin verification action'); ?></button>
                                                    <div class="dropdown-menu"> 
                                                      <a class="dropdown-item" href="<?php echo base_url();?>admin/transactions/confirm_withdrawal/<?php echo $transactions['id']; ?>"><?php echo lang('admin verification comfirm'); ?></a> 
                                                      <a class="dropdown-item" href="<?php echo base_url();?>admin/transactions/refund_withdrawal/<?php echo $transactions['id']; ?>"><?php echo lang('admin trans refund'); ?></a> 

                                                    </div>
                                                  </div>
                                                <?}else{?>
                                                <?}?>
                                                <?}else{?>
                                                <?}?>
                                                                        <button type="submit"  class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-save"></span> <?php echo lang('core button save'); ?></button>
                                        </div>
                                  <?php echo form_close(); ?>
                                    </section>
                                </div>
                            </div>
                        </div>
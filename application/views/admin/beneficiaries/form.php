<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
      <div class="card-header bordered">
        <div class="header-block">
           <h3 class="title"><?php echo lang('admin input use_detail'); ?></h3> 
        </div>
       <ul class="nav nav-tabs pull-right" role="tablist">
          <li class="nav-item"> <a class="nav-link active" href="#overview" role="tab" data-toggle="tab"><?php echo lang('admin input overview'); ?></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#wallet" role="tab" data-toggle="tab"><?php echo lang('admin input wallet'); ?></a></li>
         <!--  <li class="nav-item"> <a class="nav-link" href="#add" role="tab" data-toggle="tab"><?php echo lang('admin input add_transaction'); ?></a></li> -->
          <li class="nav-item"> <a class="nav-link" href="#all" role="tab" data-toggle="tab"><?php echo lang('admin input all_transactions'); ?></a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="#logs" role="tab" data-toggle="tab"><?php echo lang('admin input login_history'); ?></a></li>
          <li class="nav-item"> <a class="nav-link" href="#docdd" role="tab" data-toggle="tab"><?php echo lang('admin input document'); ?></a></li> -->
       </ul>
     </div>
     <div class="card-block">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active fade in" id="overview">
            <?php echo form_open('', array('role'=>'form')); ?>

              <?php // hidden id ?>
              <?php if (isset($user_id)) : ?>
                  <?php echo form_hidden('id', $user_id); ?>
                  <?php echo form_hidden('user', $user['user']); ?>
              <?php endif; ?>
              <div class="row">
                  <?php // username ?>
                  <div class="form-group col-sm-4<?php echo form_error('user') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input added_by'), 'user', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('disabled'=>TRUE,  'value'=>set_value('user', (isset($user['user']) ? $user['user'] : '')), 'class'=>'form-control underlined')); ?>
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

                  <?php // address1 ?>
                  <div class="form-group col-sm-4<?php echo form_error('address1') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input address1'), 'address1', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'address1', 'value'=>set_value('address1', (isset($user['address1']) ? $user['address1'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                  <?php // address2 ?>
                  <div class="form-group col-sm-4<?php echo form_error('address2') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input address2'), 'address2', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'address2', 'value'=>set_value('address2', (isset($user['address2']) ? $user['address2'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                  
                  <?php // city ?>
                  <div class="form-group col-sm-4<?php echo form_error('city') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input city'), 'city', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'city', 'value'=>set_value('city', (isset($user['city']) ? $user['city'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>

                  <?php // state ?>
                  <div class="form-group col-sm-4<?php echo form_error('state') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input state'), 'state', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'state', 'value'=>set_value('state', (isset($user['state']) ? $user['state'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                
                  <?php // bank  ?>
                  <div class="form-group col-sm-4<?php echo form_error('account_number') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input bank_account'), 'account_number', array('class'=>'control-label')); ?>
                      <span class="required">*</span>
                      <?php echo form_input(array('name'=>'account_number', 'value'=>set_value('account_number', (isset($user['account_number']) ? $user['account_number'] : '')), 'class'=>'form-control underlined')); ?>
                  </div>
                  <?php // bank  ?>
                  <div class="form-group col-sm-4<?php echo form_error('bank_code') ? ' has-error' : ''; ?>">
                      <?php echo form_label(lang('users input bank_code'), 'bank_code', array('class'=>'control-label')); ?>
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
          
          <div role="tabpanel" class="tab-pane" id="wallet">
            <div class="row">
          <?php // debt ?>
              <div class="form-group col-sm-4<?php echo form_error('debit_base') ? ' has-error' : ''; ?>">
                  <label><?php echo $this->currencys->display->base_name ?>, <?php echo $this->currencys->display->base_code ?></label>
                  <span class="required">*</span>
                  <?php echo form_input(array('name'=>'debit_base', 'value'=>set_value('debit_base', (isset($user['debit_base']) ? $user['debit_base'] : '')), 'class'=>'form-control underlined')); ?>
              </div>
              <div class="form-group col-sm-4<?php echo form_error('debit_extra1') ? ' has-error' : ''; ?>">
                  <label><?php echo $this->currencys->display->extra1_name ?>, <?php echo $this->currencys->display->extra1_code ?></label>
                  <span class="required">*</span>
                  <?php echo form_input(array('name'=>'debit_extra1', 'value'=>set_value('debit_extra1', (isset($user['debit_extra1']) ? $user['debit_extra1'] : '')), 'class'=>'form-control underlined')); ?>
              </div>
              <div class="form-group col-sm-4<?php echo form_error('debit_extra2') ? ' has-error' : ''; ?>">
                  <label><?php echo $this->currencys->display->extra2_name ?>, <?php echo $this->currencys->display->extra2_code ?></label>
                  <span class="required">*</span>
                  <?php echo form_input(array('name'=>'debit_extra2', 'value'=>set_value('debit_extra2', (isset($user['debit_extra2']) ? $user['debit_extra2'] : '')), 'class'=>'form-control underlined')); ?>
              </div>
              <div class="form-group col-sm-4<?php echo form_error('debit_extra3') ? ' has-error' : ''; ?>">
                  <label><?php echo $this->currencys->display->extra3_name ?>, <?php echo $this->currencys->display->extra3_code ?></label>
                  <span class="required">*</span>
                  <?php echo form_input(array('name'=>'debit_extra3', 'value'=>set_value('debit_extra3', (isset($user['debit_extra3']) ? $user['debit_extra3'] : '')), 'class'=>'form-control underlined')); ?>
              </div>
              <div class="form-group col-sm-4<?php echo form_error('debit_extra4') ? ' has-error' : ''; ?>">
                  <label><?php echo $this->currencys->display->extra4_name ?>, <?php echo $this->currencys->display->extra4_code ?></label>
                  <span class="required">*</span>
                  <?php echo form_input(array('name'=>'debit_extra4', 'value'=>set_value('debit_extra4', (isset($user['debit_extra4']) ? $user['debit_extra4'] : '')), 'class'=>'form-control underlined')); ?>
              </div>
               <div class="form-group col-sm-4<?php echo form_error('debit_extra5') ? ' has-error' : ''; ?>">
                  <label><?php echo $this->currencys->display->extra5_name ?>, <?php echo $this->currencys->display->extra5_code ?></label>
                  <span class="required">*</span>
                  <?php echo form_input(array('name'=>'debit_extra5', 'value'=>set_value('debit_extra5', (isset($user['debit_extra5']) ? $user['debit_extra5'] : '')), 'class'=>'form-control underlined')); ?>
              </div>
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
          
          
          
          <div role="tabpanel" class="tab-pane" id="add">
            <div class="panel-group" id="accordion">
                <div class="card card-default">
                  <div class="card-header">
                    <div class="header-block">
                        <a data-toggle="collapse" class="title" data-parent="#accordion" href="#znajomi">
                        <?php echo lang('admin trans add_ball'); ?>
                      </a>
                    </div>
  
                  </div>
                  <div id="znajomi" class="panel-collapse collapse in">
                    <div class="card-block">
                      <div class="row">
                     <?php echo form_open(site_url("admin/users/add_user_transaction/" . $user['id']), array("" => "")) ?>

                        <div class="form-group col-sm-3">
                          <label class="control-label"><?php echo lang('admin trans type'); ?></label>
                          <span class="required">*</span>
                            <div>
                                <label style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="1" id="1"  />
                                     <span><?php echo lang('admin trans deposit'); ?></span>
                                </label>
                            </div>
                            <div>
                                <label  style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="3" id="3"  />
                                    <span><?php echo lang('admin trans transfer'); ?></span>
                                </label>
                            </div>
                            <div>
                                <label  style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="4" id="4"  />
                                    <span><?php echo lang('admin trans exchange'); ?></span>
                                </label>
                            </div>
                            <div>
                                <label  style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="5" id="5"  />
                                    <span><?php echo lang('admin trans external'); ?></span>
                                </label>
                            </div>
                        </div>


                        <div class="form-group col-sm-5">
                            <label><?php echo lang('admin trans amount'); ?></label>
                            <span class="required">*</span>
                            <input type="text" class="form-control underlined" id="amount" name="amount" placeholder="" value="0.00"> 
                        </div>
                        <div class="form-group col-sm-4">
                            <label><?php echo lang('admin button currency'); ?></label>
                                <select name="currency" id="currency" class="form-control underlined">
                                    <option value="debit_base"><?php echo $this->currencys->display->base_code ?></option>
                                    <?php if($this->currencys->display->extra1_check) : ?>
                                    <option value="debit_extra1"><?php echo $this->currencys->display->extra1_code ?></option>
                                    <?php endif; ?>
                                    <?php if($this->currencys->display->extra2_check) : ?>
                                    <option value="debit_extra2"><?php echo $this->currencys->display->extra2_code ?></option>
                                    <?php endif; ?>
                                    <?php if($this->currencys->display->extra3_check) : ?>
                                    <option value="debit_extra3"><?php echo $this->currencys->display->extra3_code ?></option>
                                    <?php endif; ?>
                                    <?php if($this->currencys->display->extra4_check) : ?>
                                    <option value="debit_extra4"><?php echo $this->currencys->display->extra4_code ?></option>
                                    <?php endif; ?>
                                    <?php if($this->currencys->display->extra5_check) : ?>
                                    <option value="debit_extra5"><?php echo $this->currencys->display->extra5_code ?></option>
                                    <?php endif; ?>
                                </select>
                        </div>
                    </div>

                <div class="row">

                    <div class="form-group col-sm-6">
                        <label><?php echo lang('admin trans comment'); ?></label>
                        <span class="required">*</span>
                     <textarea class="form-control underlined" id="user_comment" name="user_comment"> </textarea>
                    </div>
                    <div class="form-group col-sm-6">
                        <label><?php echo lang('admin trans admin_comment'); ?></label>
                        <span class="required">*</span>
                     <textarea class="form-control underlined" id="admin_comment" name="admin_comment"> </textarea>
                    </div>

                </div>
                      
                      
                    </div>
                    <div class="card-footer" style="text-align:right"> 
                        <a class="btn btn-secondary btn-sm" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
                        <button type="submit"  class="btn btn-primary btn-sm"><?php echo lang('core button save'); ?></button>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?> 
                <div class="card card-default">
                <div class="card-header">
                  <div class="header-block">
                    <a data-toggle="collapse" class="title" data-parent="#accordion" href="#szukaj">
                      <?php echo lang('admin trans win_ball'); ?>
                    </a>
                  </div>
                </div>
                <div id="szukaj" class="panel-collapse collapse">
                  <div class="card-block">
                   <div class="row">
                         <?php echo form_open(site_url("admin/users/add_debit_user_transaction/" . $user['id']), array("" => "")) ?>

                      <div class="form-group col-sm-3">
                          <label class="control-label"><?php echo lang('admin trans type'); ?></label>
                          <span class="required">*</span>
                            <div>
                                <label style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="2" id="2"  />
                                     <span><?php echo lang('admin trans withdrawal'); ?></span>
                                </label>
                            </div>
                            <div>
                                <label style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="3" id="3"  />
                                    <span><?php echo lang('admin trans transfer'); ?></span>
                                </label>
                            </div>
                            <div>
                                <label style="font-weight:500">
                                    <input type="radio" class="radio" name="type" value="4" id="4"  />
                                    <span><?php echo lang('admin trans exchange'); ?></span>
                                </label>
                            </div>
                       </div>


                      <div class="form-group col-sm-5">
                            <label><?php echo lang('admin trans amount'); ?></label>
                            <span class="required">*</span>
                            <input type="text" class="form-control underlined" id="amount" name="amount" placeholder="" value="0.00"> 
                      </div>
                     <div class="form-group col-sm-4">
                      <label><?php echo lang('admin button currency'); ?></label>
                        <select name="currency" id="currency" class="form-control underlined">
                                       <option value="debit_base"><?php echo $this->currencys->display->base_code ?></option>
                                       <?php if($this->currencys->display->extra1_check) : ?>
                                       <option value="debit_extra1"><?php echo $this->currencys->display->extra1_code ?></option>
                                       <?php endif; ?>
                                       <?php if($this->currencys->display->extra2_check) : ?>
                                       <option value="debit_extra2"><?php echo $this->currencys->display->extra2_code ?></option>
                                       <?php endif; ?>
                                       <?php if($this->currencys->display->extra3_check) : ?>
                                       <option value="debit_extra3"><?php echo $this->currencys->display->extra3_code ?></option>
                                       <?php endif; ?>
                                       <?php if($this->currencys->display->extra4_check) : ?>
                                       <option value="debit_extra4"><?php echo $this->currencys->display->extra4_code ?></option>
                                       <?php endif; ?>
                                       <?php if($this->currencys->display->extra5_check) : ?>
                                       <option value="debit_extra5"><?php echo $this->currencys->display->extra5_code ?></option>
                                       <?php endif; ?>
                         </select>
                      </div>
                     </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label><?php echo lang('admin trans comment'); ?></label>
                            <span class="required">*</span>
                         <textarea class="form-control underlined" id="user_comment" name="user_comment"> </textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label><?php echo lang('admin trans admin_comment'); ?></label>
                            <span class="required">*</span>
                         <textarea class="form-control underlined" id="admin_comment" name="admin_comment"> </textarea>
                        </div>

                    </div>
                    
                  </div>
                  <div class="card-footer" style="text-align:right"> 
                     <a class="btn btn-secondary btn-sm" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
                     <button type="submit"  class="btn btn-primary btn-sm"><?php echo lang('core button save'); ?></button>
                  </div>
                </div>
                  
              </div>
              
            </div>
          </div>
          
          
          
          
          
          <div role="tabpanel" class="tab-pane" id="all">
            <div class="row">
              <div class="col-md-12">
                <br>
                <h5><?php echo lang('admin log last_trans_in'); ?></h5>
                <br>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <th><?php echo lang('admin trans id'); ?></th>
                      <th><?php echo lang('admin trans type'); ?></th>
                      <th><?php echo lang('admin trans status'); ?></th>
                      <th><?php echo lang('admin trans sender'); ?></th>
                      <th><?php echo lang('admin trans receiver'); ?></th>
                      <th><?php echo lang('admin trans time'); ?></th>
                      <th><?php echo lang('admin button currency'); ?></th>
                      <th><?php echo lang('admin trans amount'); ?></th>
                      <th><?php echo lang('admin trans fee'); ?></th>
                      <th><?php echo lang('admin trans sum'); ?></th>
                    </thead>
                    <tbody>
                      <?php foreach($log_transactions_in->result() as $view) : ?>
                      <tr>
                         <td><?php echo $view->id ?></td>
                         <td>
                            <?if($view->type==1){?>
                              <?php echo lang('admin trans deposit'); ?>
                            <?}else{?>
                            <?}?>
                           <?if($view->type==2){?>
                              <?php echo lang('admin trans withdrawal'); ?>
                            <?}else{?>
                            <?}?>
                           <?if($view->type==3){?>
                              <?php echo lang('admin trans transfer'); ?>
                            <?}else{?>
                            <?}?>
                           <?if($view->type==4){?>
                              <?php echo lang('admin trans exchange'); ?>
                            <?}else{?>
                            <?}?>
                           <?if($view->type==5){?>
                              <?php echo lang('admin trans external'); ?>
                            <?}else{?>
                            <?}?>
                         </td>
                         <td>
                            <?if($view->status==1){?>
                              <span class="label label-primary"> <?php echo lang('admin trans pending'); ?> </span>
                            <?}else{?>
                            <?}?>
                            <?if($view->status==2){?>
                              <span class="label label-success"> <?php echo lang('admin trans success'); ?> </span>
                            <?}else{?>
                            <?}?>
                            <?if($view->status==3){?>
                              <span class="label label-default"> <?php echo lang('admin trans refund'); ?> </span>
                            <?}else{?>
                            <?}?>
                            <?if($view->status==4){?>
                              <span class="label label-danger"> <?php echo lang('admin trans dispute'); ?> </span>
                            <?}else{?>
                            <?}?>
                            <?if($view->status==5){?>
                              <span class="label label-warning"> <?php echo lang('admin trans blocked'); ?> </span>
                            <?}else{?>
                            <?}?>
                         </td>
                         <td><?php echo $view->sender ?></td>
                         <td><?php echo $view->receiver ?></td>
                         <td><?php echo $view->time ?></td>
                         <td class="center">
                            <?if($view->currency=='debit_base'){?>
                                <?php echo $this->currencys->display->base_code ?>
                            <?}else{?>
                            <?}?>
                            <?if($view->currency=='debit_extra1'){?>
                                <?php echo $this->currencys->display->extra1_code ?>
                            <?}else{?>
                            <?}?>
                            <?if($view->currency=='debit_extra2'){?>
                                <?php echo $this->currencys->display->extra2_code ?>
                            <?}else{?>
                            <?}?>
                            <?if($view->currency=='debit_extra3'){?>
                                <?php echo $this->currencys->display->extra3_code ?>
                            <?}else{?>
                            <?}?>
                            <?if($view->currency=='debit_extra4'){?>
                                <?php echo $this->currencys->display->extra4_code ?>
                            <?}else{?>
                            <?}?>
                            <?if($view->currency=='debit_extra5'){?>
                                <?php echo $this->currencys->display->extra5_code ?>
                            <?}else{?>
                            <?}?>
                        </td>
                         <td><?php echo $view->amount ?></td>
                         <td><?php echo $view->fee ?></td>
                         <td><?php echo $view->sum ?></td>
                         <td class="text-center">
                           <a href="../../../admin/transactions/edit/<?php echo $view->id ?>" class="btn btn-down btn-primary"><i class="icon-eye icons"></i></a> 
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <div class="text-center">
                  <a href="../../../admin/transactions?sort=id&dir=desc&limit=10&offset=0&receiver=<?php echo set_value('id', (isset($user['id']) ? $user['id'] : '')); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="icon-eye icons"></i> <?php echo lang('admin log see_trans_in'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
    </div>
  </div>
</div>
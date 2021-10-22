<div class="col-lg-4 col-lg-offset-4">
	<h2>Добре дошли!</h2>
	<h5>Въведете вашите потребителски данни за да се логнете в системата</h5>
	<?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/login/', $fattr); ?>
	<div class="form-group">
		<?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Електронна поща', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
		<?php echo form_error('email') ?>
	</div>
	<div class="form-group">
		<?php echo form_password(array(
          'name'=>'password', 
          'id'=> 'password', 
          'placeholder'=>'Парола', 
          'class'=>'form-control', 
          'value'=> set_value('password'))); ?>
		<?php echo form_error('password') ?>
	</div>
	<?php if($recaptcha == 'yes'){ ?>
	<div style="text-align:center;" class="form-group">
		<div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
	</div>
	<?php
    }
    echo form_submit(array('value'=>'Впиши ме!', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
	<?php echo form_close(); ?>
	<br>
	<a href="<?php echo site_url();?>main/register">Регистрация</a>
	<br>
	<a href="<?php echo site_url();?>main/forgot">Забравена парола</a>
</div>

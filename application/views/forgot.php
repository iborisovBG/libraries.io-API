<div class="col-lg-4 col-lg-offset-4">
	<h2>Забравена парола?</h2>
	<p>Моля въведете Мейла с който сте се регистрирали и следвайте инструкциите в пощенската Ви кутия</p>
	<br>
	<?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/forgot/', $fattr); ?>
	<div class="form-group">
		<?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Мейл', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
		<?php echo form_error('email') ?>
	</div>
	<?php if($recaptcha == 'yes'){ ?>
	<div style="text-align:center;" class="form-group">
		<div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
	</div>
	<?php
    }
    echo form_submit(array('value'=>'Изпрати', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
	<?php echo form_close(); ?>
	<br>
	<a href="<?php echo site_url();?>main/login">Вход</a>
</div>

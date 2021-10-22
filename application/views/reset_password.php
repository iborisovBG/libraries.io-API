<div class="col-lg-4 col-lg-offset-4">
	<h2>Възстановяване на парола</h2>
	<h5>Здравейте, <span><?php echo $firstName; ?></span>, <br>Моля въведете паролата си.</h5>
	<?php 
    $fattr = array('class' => 'form-signin');
    echo form_open(site_url().'main/reset_password/token/'.$token, $fattr); ?>
	<div class="form-group">
		<?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Парола', 'class'=>'form-control', 'value' => set_value('password'))); ?>
		<?php echo form_error('password') ?>
	</div>
	<div class="form-group">
		<?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Въведете паролата отново', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
		<?php echo form_error('passconf') ?>
	</div>
	<?php echo form_submit(array('value'=>'Възстанови парола', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
	<?php echo form_close(); ?>
</div>

<div class="col-lg-4 col-lg-offset-4">
	<h2>Здравейте, <?php echo $first_name; ?>,</h2>
	<h5>Моля въведете задължителната информация.</h5>
	<?php 
        $fattr = array('class' => 'form-signin');
        echo form_open('/main/adduser', $fattr);
    ?>
	<div class="form-group">
		<?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'Име', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
		<?php echo form_error('firstname');?>
	</div>
	<div class="form-group">
		<?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Фамилия', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
		<?php echo form_error('lastname');?>
	</div>
	<div class="form-group">
		<?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Мейл', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
		<?php echo form_error('email');?>
	</div>
	<div class="form-group">
		<p>Потребителска роля</p>
		<?php
        $dd_list = array(
                  '1'   => 'Admin',
                  '4'   => 'Subscriber',
                );
        $dd_name = "role";
        echo form_dropdown($dd_name, $dd_list, set_value($dd_name),'class = "form-control" id="role"');
    ?>
	</div>
	<div class="form-group">
		<?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Парола', 'class'=>'form-control', 'value' => set_value('password'))); ?>
		<?php echo form_error('password') ?>
	</div>
	<div class="form-group">
		<?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Потвърди паролата', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
		<?php echo form_error('passconf') ?>
	</div>
	<?php echo form_submit(array('value'=>'Добави', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
	<?php echo form_close(); ?>
</div>

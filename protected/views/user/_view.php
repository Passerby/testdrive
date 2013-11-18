<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

    <b><?php
          $email = $data->email;
          echo CHtml::encode($email)?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
    <?php
        echo GlobalFunc::get_gravatar($email, $s = 80, $d = 'mm', $r = 'g', $img = true, $atts = array());
    ?>

</div>

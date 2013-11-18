<?php
/* @var $this MicropostController */
/* @var $data Micropost */
?>

<div class="view">
    <?php
    //echo GlobalFunc::dump($data);
    ?>

    <?php
        echo GlobalFunc::get_gravatar($data->user->email, $s = 40, $d = 'mm', $r = 'g', $img = true, $atts = array());
    ?>
	<b><?php echo CHtml::encode($data->user->username); ?></b>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />


</div>

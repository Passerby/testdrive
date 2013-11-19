<?php
/* @var $this MicropostController */
/* @var $data Micropost */
?>

<div class="view">
    <?php
    CVarDumper::dump($data,10,true);
    ?>
    <img src="<?php echo GlobalFunc::get_gravatar($data->user->email,$s=40);?>" class="img-responsive" alt="Responsive image">
    <b><a href="/testdrive/index.php/user/<?php echo CHtml::encode($data->user->id) ?>">
        <?php echo CHtml::encode($data->user->username); ?>
    </a></b>

    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
    <?php echo CHtml::encode($data->content); ?>
    <br />


</div>

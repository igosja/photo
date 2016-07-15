<?php
/* @var $this TestController */
/* @var $data Test */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->test_id), array('view', 'id'=>$data->test_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_name')); ?>:</b>
	<?php echo CHtml::encode($data->test_name); ?>
	<br />


</div>
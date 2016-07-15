<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->test_id=>array('view','id'=>$model->test_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Test', 'url'=>array('index')),
	array('label'=>'Create Test', 'url'=>array('create')),
	array('label'=>'View Test', 'url'=>array('view', 'id'=>$model->test_id)),
	array('label'=>'Manage Test', 'url'=>array('admin')),
);
?>

<h1>Update Test <?php echo $model->test_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
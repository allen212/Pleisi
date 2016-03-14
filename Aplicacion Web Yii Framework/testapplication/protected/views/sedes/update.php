<?php
/* @var $this SedesController */
/* @var $model Sedes */

$this->breadcrumbs=array(
	'Sedes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sedes', 'url'=>array('index')),
	array('label'=>'Create Sedes', 'url'=>array('create')),
	array('label'=>'View Sedes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sedes', 'url'=>array('admin')),
);
?>

<h1>Update Sedes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
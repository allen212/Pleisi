<?php
/* @var $this SedesController */
/* @var $model Sedes */

$this->breadcrumbs=array(
	'Sedes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sedes', 'url'=>array('index')),
	array('label'=>'Create Sedes', 'url'=>array('create')),
	array('label'=>'Update Sedes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sedes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sedes', 'url'=>array('admin')),
);
?>

<h1>View Sedes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sede',
		'direccion',
	),
)); ?>

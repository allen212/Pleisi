<?php
/* @var $this SedesController */
/* @var $model Sedes */

$this->breadcrumbs=array(
	'Sedes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sedes', 'url'=>array('index')),
	array('label'=>'Manage Sedes', 'url'=>array('admin')),
);
?>

<h1>Create Sedes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
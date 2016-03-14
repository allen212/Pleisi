<?php
/* @var $this SedesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sedes',
);

$this->menu=array(
	array('label'=>'Create Sedes', 'url'=>array('create')),
	array('label'=>'Manage Sedes', 'url'=>array('admin')),
);
?>

<h1>Sedes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

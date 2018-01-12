<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Posts</h1>
<?php if(isset($_GET['tag'])) echo '<h2>Tagged with ' . $_GET['tag'] . '</h2>'; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

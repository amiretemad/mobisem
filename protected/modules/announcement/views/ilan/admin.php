<?php
/* @var $this IlanController */
/* @var $model Ilan */

$this->breadcrumbs = array(
  'Ilans' => array('index'),
  'Manage',
);

$this->menu = array(
  array('label' => 'List Ilan', 'url' => array('index')),
  array('label' => 'Create Ilan', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ilan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- page contents -->
<div class="container-fluid">

    <div class="widget-box">
        <div class="widget-title bg_lg">
            <span class="icon">
                <i class="icon-signal"></i>
            </span>
            <h5> <?php echo get_class($this) . '->' . $this->action->id; ?></h5>
        </div>
        <div class="widget-content">

          <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
            <div class="search-form" style="display:none">
              <?php $this->renderPartial('_search', array(
                'model' => $model,
              )); ?>
            </div><!-- search-form -->

          <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'ilan-grid',
            'dataProvider' => $model->search(),
            'columns' => array(
              'id',
              'description',
              'products.name',
              'stock_count',
              'users.email_address',
              'create_date',
              array(
                'class' => 'CButtonColumn',
              ),
            ),
          )); ?>

        </div>
    </div>
</div>


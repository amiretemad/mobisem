<?php
/* @var $this IlanController */
/* @var $model Ilan */

$this->breadcrumbs = array(
  'Ilans' => array('index'),
  $model->id,
);

$this->menu = array(
  array('label' => 'List Ilan', 'url' => array('index')),
  array('label' => 'Create Ilan', 'url' => array('create')),
  array('label' => 'Update Ilan', 'url' => array('update', 'id' => $model->id)),
  array('label' => 'Delete Ilan', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
  array('label' => 'Manage Ilan', 'url' => array('admin')),
);
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

          <?php $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
              'id',
              'description',
              'product_id',
              'stock_count',
              'user_id',
              'create_date',
              'expire_date',
            ),
          )); ?>
        </div>
    </div>
</div>
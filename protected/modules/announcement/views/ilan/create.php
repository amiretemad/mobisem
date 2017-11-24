<?php
/* @var $this IlanController */
/* @var $model Ilan */

$this->breadcrumbs = array(
  'Ilans' => array('index'),
  'Create',
);

$this->menu = array(
  array('label' => 'List Ilan', 'url' => array('index')),
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
          <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
        </div>
    </div>
</div>


<?php
/* @var $this IlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
  'Ilans',
);

$this->menu = array(
  array('label' => 'Create Ilan', 'url' => array('create')),
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
            <table class="table table-bordered table-striped with-check">
                <thead>
                <tr style="height: 40px;">
                    <th width="50%" class="middleVertical textLeft">id</th>
                    <th width="20%" class="middleVertical textLeft">description</th>
                    <th width="20%" class="middleVertical textLeft">product Name</th>
                    <th width="20%" class="middleVertical textLeft">count</th>
                    <th width="20%" class="middleVertical textLeft">creator name</th>
                    <th width="10%" class="middleVertical textLeft">create_date</th>
                    <th width="10%" class="middleVertical">expire_date</th>
                </tr>
                </thead>
                <tbody>
                <?php $this->widget('zii.widgets.CListView', array(
                  'dataProvider' => $dataProvider,
                  'itemView' => '_view',
                )); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


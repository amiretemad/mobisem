<?php
// Set Page Title
$this->pageTitle = Yii::app()->name . ' - Index';
// Set Bread Crumbs
$this->breadcrumbs = array(
  'Dashboard'
);
?>
<!-- page contents -->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title bg_lg">
            <span class="icon">
                <i class="icon-signal"></i>
            </span>
            <h5> <?php echo get_class($this).'->'.$this->action->id; ?></h5>
        </div>
        <div class="widget-content">

            content

        </div>
    </div>

</div>


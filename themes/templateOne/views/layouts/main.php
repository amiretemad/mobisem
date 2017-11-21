<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/fullcalendar.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/matrix-style.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/matrix-media.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>font-awesome/css/font-awesome.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" type="text/css" />
    <script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.min.js"></script>

</head>
<body>

<!-- Header -->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>

<!-- Header DropDown Menu -->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav" style="width: auto; margin: 0px;">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>
                <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo Yii::app()->createUrl('site/Logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>

<!-- SideBar Menu -->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><i class="icon icon-home"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Product Menu -->
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>
                <span>Product Management</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li><a href="<?php echo Yii::app()->createUrl('product/add'); ?>">Add</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('product/list'); ?>">List</a></li>
            </ul>
        </li>
        <!-- Announcement Menu -->
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i>
                <span>Product Management</span>
                <span class="label label-important">2</span></a>
            <ul>
                <li><a href="<?php echo Yii::app()->createUrl('product/add'); ?>">Add</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('product/list'); ?>">List</a></li>
            </ul>
        </li>
    </ul>
</div>

<!-- Main Content Holder  -->
<div id="content">

    <!-- Breadcrumbs -->
  <?php if (isset($this->breadcrumbs)) {
    echo '<div id="content-header"><div id="breadcrumb">';
    $this->widget('zii.widgets.CBreadcrumbs', array(
      'links' => $this->breadcrumbs,
    ));
    echo '</div></div>';
  }
  ?>

  <?php if ((isset($this->topItems) && $topItems == true) || !isset($this->topItems)) { ?>
      <!-- Dashboard Head Items -->
      <div class="container-fluid">
          <div class="quick-actions_homepage">
              <ul class="quick-actions">
                  <li class="bg_lb span3"><a href="index.html">
                          <i class="icon-dashboard"></i><span class="label label-important"><?php echo $this->totalProductsInInventory; ?></span>Products Count  <span style="font-size: 18px;"><?php echo $this->totalProductsInInventory; ?></span></a>
                  </li>
              </ul>
          </div>
      </div>
  <?php } ?>

  <?php

  echo $content;

  ?>

</div>

<!-- Footer -->
<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <?php echo Yii::powered(); ?> </div>
</div>

<!-- Scripts -->
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/excanvas.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.ui.custom.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.flot.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.flot.resize.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.peity.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/fullcalendar.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.dashboard.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.interface.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.chat.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.validate.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.form_validation.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.wizard.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.uniform.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/select2.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.popover.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.tables.js"></script>

</body>
</html>
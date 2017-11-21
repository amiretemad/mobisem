<?php
/* @var $this AddController */

$this->breadcrumbs = array(
  $this->module->id,
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

          <?php
          // Display Flash Message
          $messageType = Yii::app()->user->hasFlash('success');
          $flashMessages = Yii::app()->user->getFlashes();
          if (!empty($flashMessages)) {
            ?>
              <div class="alert alert-<?php echo ($messageType) ? 'success' : 'danger'; ?> ">
                <?php
                foreach ($flashMessages as $messages) {
                  foreach ($messages as $message) {
                    echo '<p>' . $message . '</p>';
                  }
                }
                ?>
              </div>
          <?php } ?>

            <!-- Form Begin -->
            <form method="post" action="<?php echo Yii::app()->createAbsoluteUrl($this->submitNewProduct); ?>">
                <!-- product name -->
                <div class="form-group">
                    <label>Product Name :</label>
                    <input type="text" id="productName" name="productName">
                </div>
                <!-- Product Description -->
                <div class="form-group">
                    <label for="productDescription">Product Description : </label>
                    <textarea id="productDescription" name="productDescription"></textarea>
                </div>
                <!-- product Price -->
                <div class="form-group">
                    <label for="productPrice">Product Price :</label>
                    <input type="text" id="productPrice" name="productPrice">
                </div>
                <!-- product Count -->
                <div class="form-group">
                    <label for="productCount">Product Count :</label>
                    <input type="text" id="productCount" name="productCount">
                </div>
                <div class="form-group">
                    <button type="submit" id="productAddBtn" name="productAddBtn" class="btn btn-success">Add
                                                                                                          Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

class ListController extends ModuleController {

  public $deleteProductUrl = '/product/list/delete';

  public function filters() {
    return array(
      'accessControl', // perform access control for CRUD operations
    );
  }

  public function accessRules() {
    return array(
      array('deny',  // deny anonymous users
        'users' => array('?'),
      ),
    );
  }

  // Display Products On Page
  public function actionIndex() {
    // get info from db
    $products = Products::model()->findAll(array('select' => 'id,name,price'));
    $this->render('index', array('productsInfo' => $products));
  }

  // delete Product
  public function actionDelete() {
    // TODO  Just For TEST ajax Loading
    sleep(1);
    $productId = (isset($_POST['productId']) && intval($_POST['productId']) > 0) ? intval($_POST['productId']) : 0;
    $result = array('status' => false);
    if ($productId > 0) {
      $transaction = Yii::app()->db->beginTransaction();
      try {
        // Delete Product
        Products::model()->deleteByPk($productId);
        // Delete Product Inventory
        ProductsInventory::model()->deleteAll("product_id = " . $productId);
        $transaction->commit();
        $result = array('status' => true);
      } catch (Exception $ex) {
        $transaction->rollBack();
      }
    }
    echo json_encode($result);
  }

}
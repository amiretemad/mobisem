<?php

class AddController extends ModuleController {

  // Set Submit Url
  public $submitNewProduct = '/product/add/save';

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

  // Index
  public function actionIndex() {
    $this->render('index');
  }

  // Inserting To DB
  public function actionSave() {

    // Checking Form Submit
    if (isset($_POST['productAddBtn'])) {

      // Set errors
      $errors = [];

      // Fields In Form
      $productName = trim($_POST['productName']);
      $productDescription = $_POST['productDescription'];
      $productPrice = floatval($_POST['productPrice']);
      $productCount = intval($_POST['productCount']);

      // Check Product Name
      if ($productName == "") {
        $errors['productName'] = 'Please Enter Product Name';
      }

      // Check Product Price
      if ($productPrice <= 0) {
        $errors['productPrice'] = 'Product Price must greater than Zero';
      }

      // Check Product Count
      if ($productCount <= 0) {
        $errors['productCount'] = 'Product Count must greater than Zero';
      }

      // TODO CHeck product added before or not !

      // Check Form Has Error
      if (count($errors) > 0) {
        // Adding Error To Flash Message
        Yii::app()->user->setFlash('danger', $errors);
      } else {
        // Beginning Transaction For inserting in two Table
        $transaction = Yii::app()->db->beginTransaction();
        try {
          // Product
          $productModel = new Products();
          $productModel->name = $productName;
          $productModel->description = $productDescription;
          $productModel->price = $productPrice;
          $productModel->save();
          // Product Inventory
          $productInventory = new ProductsInventory();
          $productInventory->product_id = $productModel->id;
          $productInventory->product_count = $productCount;
          $productInventory->action = 1;
          $productInventory->create_date = date("Y/m/d H:i:s");
          $productInventory->user_id = Yii::app()->user->id;
          $productInventory->save();
          // Set Success Message
          $errors[] = 'Success ! Product Inserted successfully to two table';
          Yii::app()->user->setFlash('success', $errors);
          // Commit Transaction
          $transaction->commit();
        } catch (Exception $ex) {
          // Set Exception Message
          $errors[] = $ex->getMessage();
          Yii::app()->user->setFlash('danger', $errors);
          // RollBack Transaction
          $transaction->rollBack();
        }
      }
      $this->redirect("index");
    }
  }

}
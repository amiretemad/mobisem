<?php

class SiteController extends Controller {

  public $layout = '';

  // Total Products In inventory
  public $totalProductsInInventory = 0;

  // Default Page
  public function actionIndex() {
    // Get Count Of Products
    $this->totalProductsInInventory = Yii::app()->db->createCommand("SELECT sum(product_count * action) as SumOfProducts FROM `products_inventory`")->queryScalar();
    $this->render('index');
  }

  // Login Page
  public function actionLogin() {

    // Disable Main Layout
    $this->layout = false;
    // Make object of login Form
    $model = new LoginForm;
    // if it is ajax validation request
    if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
      echo CActiveForm::validate($model);
      Yii::app()->end();
    }

    // collect user input data
    if (isset($_POST['LoginForm'])) {
      $model->attributes = $_POST['LoginForm'];
      // validate user input and redirect to the previous page if valid
      if ($model->validate() && $model->login())
        $this->redirect(Yii::app()->user->returnUrl);
    }
    // display the login form
    $this->render('login', array('model' => $model));
  }

  // LogOut
  public function actionLogout() {
    Yii::app()->user->logout();
    $this->redirect(Yii::app()->homeUrl);
  }

  public function filters() {
    return array(
      'accessControl', // perform access control for CRUD operations
    );
  }

  public function accessRules() {
    return array(
      array('allow',  // allow all users to perform 'list' and 'show' actions
        'actions' => array('actionLogin'),
        'users' => array('*'),
      ),
      array('deny',  // deny anonymous user
        'actions' => array('index', 'logout'),
        'users' => array('?'),
      ),
    );
  }

}
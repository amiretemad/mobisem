<?php

class AnnouncementModule extends CWebModule {

  // Initialize Method
  public function init() {
    $this->setImport(array(
      'announcement.models.*',
      'announcement.components.*',
    ));
  }

  // this method is called before any module controller action is performed
  public function beforeControllerAction($controller, $action) {
    if (parent::beforeControllerAction($controller, $action)) {
      return true;
    } else
      return false;
  }
}

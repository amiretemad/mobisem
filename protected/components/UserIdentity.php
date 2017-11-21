<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

  // Email Address
  public $email_address;
  // User Id
  private $_id;
  // Constant For EMail Error
  const ERROR_EMAIL_INVALID = 1;

  // Construction Method
  public function __construct($username, $password, $email_address) {
    parent::__construct($username, $password);
    $this->email_address = $email_address;
  }

  /**
   * Authenticates a user.
   * The example implementation makes sure if the username and password
   * are both 'demo'.
   * In practical applications, this should be changed to authenticate
   * against some persistent user identity storage (e.g. database).
   * @return boolean whether authentication succeeds.
   */
  public function authenticate() {
    $model = Users::model()->findByAttributes(array('email_address' => $this->email_address));
    // Set Error To None
    $this->errorCode = self::ERROR_NONE;
    // Check Model
    if ($model === null) {
      $this->errorCode = self::ERROR_EMAIL_INVALID;
    } else if (!password_verify($this->password, $model->password)) {
      $this->errorCode = self::ERROR_PASSWORD_INVALID;
    } else {
      $this->_id = $model->id;
      $this->email_address = $model->email_address;
      $this->username = $model->email_address;
    }
    if ($this->_id > 0) {
      return true;
    }
    return false;
  }

  /**
   * @return integer the ID of the user record
   */
  public function getId() {
    return $this->_id;
  }

}
<?php
class User_Following extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBString";
    $this->values["1"] = array();
  }
  function username($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_username($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_username($index, $value)
  {
    $v = new $this->fields["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_username()
  {
    $this->_remove_last_arr_value("1");
  }
  function username_size()
  {
    return $this->_get_arr_size("1");
  }
}
class User_Follower extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBString";
    $this->values["1"] = array();
  }
  function username($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_username($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_username($index, $value)
  {
    $v = new $this->fields["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_username()
  {
    $this->_remove_last_arr_value("1");
  }
  function username_size()
  {
    return $this->_get_arr_size("1");
  }
}
class User extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBString";
    $this->values["1"] = "";
    $this->fields["2"] = "PBString";
    $this->values["2"] = "";
    $this->fields["3"] = "PBString";
    $this->values["3"] = "";
    $this->fields["4"] = "PBString";
    $this->values["4"] = "";
    $this->fields["5"] = "PBString";
    $this->values["5"] = "";
    $this->fields["6"] = "PBString";
    $this->values["6"] = "";
    $this->fields["7"] = "PBString";
    $this->values["7"] = "";
    $this->fields["8"] = "User_Following";
    $this->values["8"] = "";
    $this->fields["9"] = "User_Follower";
    $this->values["9"] = "";
  }
  function username()
  {
    return $this->_get_value("1");
  }
  function set_username($value)
  {
    return $this->_set_value("1", $value);
  }
  function password()
  {
    return $this->_get_value("2");
  }
  function set_password($value)
  {
    return $this->_set_value("2", $value);
  }
  function name()
  {
    return $this->_get_value("3");
  }
  function set_name($value)
  {
    return $this->_set_value("3", $value);
  }
  function email()
  {
    return $this->_get_value("4");
  }
  function set_email($value)
  {
    return $this->_set_value("4", $value);
  }
  function phone()
  {
    return $this->_get_value("5");
  }
  function set_phone($value)
  {
    return $this->_set_value("5", $value);
  }
  function address()
  {
    return $this->_get_value("6");
  }
  function set_address($value)
  {
    return $this->_set_value("6", $value);
  }
  function website()
  {
    return $this->_get_value("7");
  }
  function set_website($value)
  {
    return $this->_set_value("7", $value);
  }
  function following()
  {
    return $this->_get_value("8");
  }
  function set_following($value)
  {
    return $this->_set_value("8", $value);
  }
  function follower()
  {
    return $this->_get_value("9");
  }
  function set_follower($value)
  {
    return $this->_set_value("9", $value);
  }
}
class Users extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "User";
    $this->values["1"] = array();
  }
  function user($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_user()
  {
    return $this->_add_arr_value("1");
  }
  function set_user($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function remove_last_user()
  {
    $this->_remove_last_arr_value("1");
  }
  function user_size()
  {
    return $this->_get_arr_size("1");
  }
}
?>
<?php
/**
 * SignupForm class.
 *
 **/
class SignupForm extends CFormModel
{
    public $username;
    public $password;
    public $confirmation;

    public function rules()
    {
        return array(
            array('username, password, confirmation', 'required'),
        );
    }

    public function signup()
    {

    }
}
?>

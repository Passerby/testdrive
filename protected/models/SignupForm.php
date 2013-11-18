<?php

class SignupForm extends CFormModel
{
    public $email;
    public $username;
    public $password;
    public $confirmation;

    public function rules()
    {
        return array(
            array('username, password, email, confirmation', 'required'),
            array('username, password, email', 'length', 'max'=>128),
            array('confirmation', 'compare', 'compareAttribute'=>'password'),
            array('email', 'email', 'message'=>'The email is not correct'),
            //array('email', 'unique', 'message'=>'This email is already exists.'),
        );
    }

}
?>

<?php
/* @var $this UserController */
/* @var $model SignForm */

$this->pageTitle=Yii::app()->name . ' - Sign up';
$this->breadcrumbs=array(
    'Sign up',
);
foreach(Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
}
?>
<h1>Sign up</h1>

<form accept-charset="UTF-8" action="/user/signup" method="post" class="form-signup">

    <input name="user[name]" class="form-control" type="text" placeholder="Username"/>
    <input name="user[password]" class="form-control" type="password" placeholder="Password"/>
    <input id="user_password_confirmation" class="form-control"
         name="user[password_confirmation]" type="password" placeholder="Confirmation"/>
    <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit"
         value="Create my account" />
</form>

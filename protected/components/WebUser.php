<?php
class WebUser extends CWebUser{
    private $_user;

    function getIsSuperAdmin(){
        return ( $this->user && $this->user->accessLevel === User::LEVEL_SUPERADMIN );
    }

    function getIsAdmin(){
        return ( $this->user && $this->user->accessLevel >= User::LEVEL_ADMIN );
    }

    function getUser(){
        if( $this->isGuest )
            return;
        if( $this->_user === null ){
            $this->_user = User::model()->findByPk( $this->id );
        }
        return $this->_user;
    }
}
?>

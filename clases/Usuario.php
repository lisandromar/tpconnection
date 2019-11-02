<?php

class Usuario{

    private $email;
    private $password;
    private $userName;
    private $repassword;
    private $avatar;
    public function __construct($email,$password,$userName=null,$repassword=null ,$avatar=null){
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;
        $this->avatar = $avatar;
    }
    public function getNombre(){
        return $this->userName;
    }
    public function setNombre($username){
        $this->userName = $username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getRepassword(){
        return $this->repassword;
    }
    public function setRepassword($password){
        $this->repassword = $repassword;
    }

    public function getAvatar(){
       return $this->avatar;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

}




 ?>

<?php

interface Log_user{
     public function Log_in();
     public function Log_out();
}
class Credential{
     protected $username;
     protected $password;

     public function getUsername(){
         return $this->username;}
     public function setUsername($username){
         $this->username = $username;}
     public function getPassword(){
         return $this->password;}
     public function setPassword($password){
         $this->password = $password;}
}
class Administrator implements Log_user{
     protected $usuario;

     public function __construct(Credential $user)
     {
         $this->usuario = $user;
     }
     public function Log_in()
     {

     }
     public function Log_out()
     {

     }
 }
class Data_capture implements Log_user{
     protected $usuario;

    public function __construct(Credential $user)
    {
        $this->usuario = $user;
    }

    public function Log_in()
    {
        echo "Bienvenido Capturista<br>";
    }
    public function Log_out()
    {

    }
}
class UserFactory{
    public function createUser($class, $usuario){
        return new $class($usuario);
    }
}










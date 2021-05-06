<?php 
session_start();

class Admin {

    
    protected $admin;
    protected $password;

    public function getAdmin (){
        return $this->id;
    }

    public function setAdmin ($admin){
        $this->admin = $admin;
    }

    public function getPassword (){
        return $this->img;
    }

    public function setPassword ($password){
        $this->password = $password;

    }

}
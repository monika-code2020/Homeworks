<?php
class DataBase {
    public $host = "127.0.0.1";
    public $server = "homestead";
    public $pass = "secret";
    public $database = "registration_db";

    function __costruct($host, $server, $pass, $database){
        $this->host = $host;
        $this->server = $server;
        $this->pass = $pass;
        $this->database = $database;

    }

    function connectDataBase(){
       return mysqli_connect($this->host, $this->server, $this->pass, $this->database);
    }

    function createUser($name, $username, $email, $browser, $createdAt){
        $sql = "INSERT INTO users (firstname, username, email, browser, created_at) VALUES('$name', '$username', '$email', '$browser', '$createdAt');";
        mysqli_query($this->connectDataBase(), $sql);

        mysqli_close($this->connectDataBase());
    }

}
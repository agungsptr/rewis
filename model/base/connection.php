<?php
class Connection {
    private $host = 'localhost';
    private $username = 'id12267513_rewis';
    private $password = 'rewis#000';
    private $database = 'id12267513_rewis';

    public function DoCon()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}
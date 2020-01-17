<?php
class Connection {
    private $host = 'databases-auth.000webhost.com';
    // private $host = 'localhost';
    private $username = 'id12267513_rewis';
    // private $username = 'root';
    private $password = 'rewis#000';
    // private $password = '';
    private $database = 'id12267513_rewis';
    // private $database = 'rewis';

    public function DoCon()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}
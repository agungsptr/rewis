<?php
class Connection {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'rewis';

    public function DoCon()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}
<?php
class Connection {
    private $host = 'sql12.freesqldatabase.com';
    private $username = 'sql12319357';
    private $password = '5tUgAKpNaU';
    private $database = 'sql12319357';

    public function DoCon()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}
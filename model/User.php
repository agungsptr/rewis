<?php
require_once('base/model.php');

class User extends Model {
    public $table = 'user';

    public $nama;
    public $username;
    public $password;

    public function save()
    {
        $this->atributs = ["'$this->nama'", "'$this->username'", "'$this->password'"];
        return parent::save();
    }

    public function name($id)
    {
        $do = parent::where('id', $id);
        $result = mysqli_fetch_assoc($do);
        return $result['nama'];
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM $this->table WHERE username='$username' AND password='$password'";
        return mysqli_query(parent::DoCon(), $query);
    }
}
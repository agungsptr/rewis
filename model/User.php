<?php
require('base/model.php');

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
}
<?php
require('base/model.php');

class Jarak extends Model {
    public $table = 'jarak';

    public $mtr;
    public $lobar;
    public $lotim;
    public $loteng;
    public $klu;

    public function save()
    {
        $this->atributs = [$this->mtr, $this->lobar, $this->lotim, $this->loteng, $this->klu];
        return parent::save();
    }
}
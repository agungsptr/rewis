<?php
require_once('base/model.php');

class Biaya extends Model {
    public $table = 'biaya';

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
<?php
require_once('base/model.php');

class Waktu extends Model {
    public $table = 'waktu';

    public $mtr;
    public $lobar;
    public $lotim;
    public $loteng;
    public $klu;
    public $id_tw;

    public function save()
    {
        $this->atributs = [$this->mtr, $this->lobar, $this->lotim, $this->loteng, $this->klu, $this->id_tw];
        return parent::save();
    }

    public function update($id)
    {
        $this->fid = 'id_tw';
        $this->val = "mataram=$this->mtr, lobar=$this->lobar, lotim=$this->lotim, loteng=$this->loteng, klu=$this->klu";
        return parent::update($id);
    }
}
<?php
require_once('base/model.php');

class TempatWisata extends Model {
    public $table = 'tempat_wisata';
    public $nama_tempat;
    public $id_jarak;
    public $id_waktu;
    public $id_biaya;
    public $id_user;
    public $foto;

    public function save()
    {
        $this->atributs = ["'$this->nama_tempat'", "'$this->foto'", $this->id_jarak, $this->id_waktu, $this->id_biaya, $this->id_user];
        return parent::save();
    }

    public function viewMtr()
    {
        return parent::viewAll('data_mtr');
    }

    public function viewLobar()
    {
        return parent::viewAll('data_lobar');
    }

    public function viewKlu()
    {
        return parent::viewAll('data_klu');
    }

    public function viewLoteng()
    {
        return parent::viewAll('data_loteng');
    }

    public function viewLotim()
    {
        return parent::viewAll('data_lotim');
    }

    
}
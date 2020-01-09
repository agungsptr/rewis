<?php
require('base/model.php');

class TempatWisata extends Model {
    public $table = 'tempat_wisata';
    public $nama_tempat;

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
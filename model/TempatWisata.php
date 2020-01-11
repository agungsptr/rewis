<?php
require_once('base/model.php');

class TempatWisata extends Model {
    public $table = 'tempat_wisata';
    public $nama_tempat;
    public $kab;
    public $alamat;
    public $deskripsi;
    public $foto;
    public $biaya;
    public $fasilitas;
    public $id_user;

    public function save()
    {
        $this->atributs = ["'$this->nama_tempat'", "'$this->kab'", "'$this->alamat'", "'$this->deskripsi'", "'$this->foto'", "'$this->biaya'", "'$this->fasilitas'", $this->id_user];
        return parent::save();
    }

    public function update($id)
    {
        $this->fid = 'id';
        $this->val = "nama_tempat='$this->nama_tempat', foto='$this->foto', id_user=$this->id_user, fasilitas=$this->fasilitas, biaya=$this->biaya";
        return parent::update($id);
    }
}
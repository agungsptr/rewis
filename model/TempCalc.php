<?php
require_once('base/model.php');

class TempCalc extends Model
{
    public $table = 'temp_calc';

    public $id_tw;
    public $nama_tempat;
    public $kab;
    public $foto;
    public $jarak;
    public $biaya;
    public $fasilitas;
    public $vektor_s='NULL';
    public $vektor_v='NULL';

    public function save()
    {
        $this->atributs = ["'$this->nama_tempat'", "'$this->kab'", "'$this->foto'","$this->jarak", "$this->biaya", "$this->fasilitas", "$this->vektor_s", "$this->vektor_v", $this->id_tw];
        return parent::save();
    }

    public function addVektorV($id, $val)
    {
        $query = "UPDATE $this->table SET vektor_v=$val WHERE id=$id";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function best6()
    {
        $query = "SELECT * FROM $this->table ORDER BY vektor_v DESC LIMIT 6";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function clear()
    {
        $query = "DELETE FROM $this->table";
        return mysqli_query(parent::DoCon(), $query);
    }
}

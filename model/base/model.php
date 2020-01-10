<?php
require('connection.php');

class Model extends Connection
{
    public $table;
    public $atributs;
    public $val;
    public $fid;

    public function all()
    {
        $query = "SELECT * FROM $this->table";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function allOrder($orderBy, $type)
    {
        $query = "SELECT * FROM $this->table ORDER BY $orderBy $type";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function where($field1, $field2)
    {
        $query = "SELECT * FROM $this->table WHERE $field1='$field2'";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function whereOrder($field1, $field2, $orderBy, $type)
    {
        $query = "SELECT * FROM $this->table WHERE $field1='$field2' ORDER BY $orderBy $type";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function viewAll($view)
    {
        $query = "SELECT * FROM $view";
        return mysqli_query(parent::DoCon(), $query);
    }

    public function lastId()
    {
        $query = "SELECT id FROM $this->table ORDER BY id DESC LIMIT 1";
        $do = mysqli_query(parent::DoCon(), $query);
        $do = mysqli_fetch_assoc($do);
        return $do['id'];
    }

    public function save()
    {
        $values = 'NULL';
        foreach ($this->atributs as $atr) {
            $values .= ',' . $atr;
        }

        $query = "INSERT INTO $this->table VALUES ($values)";
        $do = mysqli_query(parent::DoCon(), $query);
        
        if ($do) {
            return $do;
        } else {
            return "Error input data, silahkan cek kembali";
        }
    }

    public function update($id)
    {
        $query = "UPDATE $this->table SET $this->val WHERE $this->fid=$id";
        $do = mysqli_query(parent::DoCon(), $query);
        
        if ($do) {
            return $do;
        } else {
            return "Error input data, silahkan cek kembali";
        }

    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id=$id";
        return mysqli_query(parent::DoCon(), $query);
    }

}

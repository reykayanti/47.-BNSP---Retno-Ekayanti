<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Beasiswa extends Model
{
    protected $table      = 'beasiswa';
    protected $primaryKey = 'id_beasiswa';
    protected $allowedFields = ['nama', 'email', 'hp', 'semester', 'pilihan', 'berkas'];

    public function tampilSemua(){
        $query= $this->db->query( "SELECT * FROM beasiswa JOIN mahasiswa ON mahasiswa.nama_mahasiswa = beasiswa.nama");
        return $query;
    }
}
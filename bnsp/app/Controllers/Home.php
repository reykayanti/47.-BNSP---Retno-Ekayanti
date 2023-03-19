<?php

namespace App\Controllers;
use App\Models\M_Beasiswa;
use App\Models\M_Mahasiswa;

class Home extends BaseController
{
    protected $mBeasiswa;
    protected $mMahasiswa;

    public function __construct()
    {
        $this->mBeasiswa    = new M_Beasiswa();
        $this->mMahasiswa    = new M_Mahasiswa();
    }

    public function index()
    {
        return view('home.php');
    }

    public function daftar()
    {
        $data = [
            'mahasiswa'  =>  $this->mMahasiswa->findAll(),
        ];
        return view('daftar', $data);
    }

    public function ajax()
    {
        $nama = $this->request->getVar('nama');

        $koneksi = mysqli_connect("localhost", "root", "", "bnsp");
        $query = mysqli_query($koneksi, "select * from mahasiswa where nama_mahasiswa='$nama'");
        $mahasiswa = mysqli_fetch_array($query);
        $data = array(
                    'nama'      =>  @$mahasiswa['nama_mahasiswa'],
                    'ipk'      =>  @$mahasiswa['ipk'],
                );

        echo json_encode($data);
    }

    public function save(){

        if(!$this->validate([
            'berkas'  => 'uploaded[berkas]|max_size[berkas,4096]',
        ])) {
            return redirect()->to('/daftar');
        }

        $upload = $this->request->getFile('berkas');
        $upload->move('berkas');

        $this->mBeasiswa->save([
            'nama'                  =>  $this->request->getVar('nama'),
            'email'                 =>  $this->request->getVar('email'),
            'hp'                    =>  $this->request->getVar('hp'),
            'semester'              =>  $this->request->getVar('semester'),
            // 'ipk'                   =>  $this->request->getVar('ipk'),
            'pilihan'               =>  $this->request->getVar('pilihan'),
            'berkas'            	=>  $upload->getName()
        ]);  

        return redirect()->to('/hasil');
    }

    public function hasil()
    {
        $data = [
            'beasiswa'  =>  $this->mBeasiswa->tampilSemua()->getResultArray(),
        ];
        return view('hasil', $data);
    }
}

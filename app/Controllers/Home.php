<?php

namespace App\Controllers;
use App\Models\office;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function dashboard()
    {
        echo view('header');
        echo view('menu');
        echo view('dashboard'); 
        echo view('footer');
    }

    public function login()
    {
        echo view('login');
    }

    public function aksi_login()
    {
        $a = $this->request->getPost('username');
        $b = $this->request->getPost('password');

        $oke = array(
            "username" => $a,
            "password" => $b
        );
        print_r($oke);

        $model = new office();
        $morgen = $model->getWhere('user', $oke);

        if ($morgen != null) {
            session()->set('id', $morgen->id_user);
            session()->set('email', $morgen->username);
            session()->set('level', $morgen->level);
            return redirect()->to('home/dashboard');
        } else {
            return redirect()->to('home/login');
        }
    }
     public function logout()
    {
        session()->destroy();
        return redirect()->to('home/login');
    }

    public function signup(){
    $model = new office();
    echo view('header', $data);
    echo view('signup');
}

public function aksi_signup()
{
    $model = new office();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    // Validasi input (tambahkan sesuai kebutuhan)
    if (!$username || !$password) {
        session()->setFlashdata('errors', ['Username dan Password harus diisi']);
        return redirect()->back();
    }

    $data = [
        'username' => $username,
        'password' => md5($password),
    ];
    
    // Pastikan `tambah` menerima data dan tabel yang benar
    if ($model->tambah('user', $data)) { // 'user' adalah nama tabel
        session()->setFlashdata('toast_message', 'Signup berhasil! Silakan login.');
        session()->setFlashdata('toast_type', 'success');
        return redirect()->to('home/login'); 
    } else {
        log_message('error', 'Error saat menambahkan data: ' . $model->errors());
        session()->setFlashdata('errors', $model->errors());
        return redirect()->back();
    }
}

        public function user()
    {
        $model = new office();
        $data['desta']= $model->tampil('user');

        echo view ('header');
        echo view ('user',$data);
        echo view ('footer');
    }
    public function tambahuser()
    {
        $model = new office();
        $data['desta']= $model->tampil('user');

        echo view ('header');
        echo view ('tambahuser');
        echo view ('footer');
    }
    public function edituser($id)
{
    $model = new office();
    $where = array('id_user' => $id);
    $data['a'] = $model->getwhere('user', $where);

    echo view('header');
    echo view('edituser', $data); 
    echo view('footer');
}
        public function hapususer($id)
    {
        $model = new office();
        $where = array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('home/user');
    }
    public function aksi_t_user()
     {
        
        $data=array(
            'username'=>$this->request->getpost('nama'),
            'level'=>$this->request->getpost('level'),
            'password'=>$this->request->getpost('pass')

        );
        $model = new office();
        $model->tambah('user',$data);

        return redirect()->to('home/user');
    }
    public function aksi_e_user()
{
    $model = new office();
    $a = $this->request->getPost('nama'); 
    $b = $this->request->getPost('level');
    $c = $this->request->getPost('pass');
    $id = $this->request->getPost('id');

    $data = array(
        'username' => $a,
        'level' => $b,
        'password' => $c
    );

    $where = array('id_user' => $id);
    $model->edit('user', $data, $where);
    return redirect()->to('home/user');
}

public function suratmasuk() {
    $model = new office();
    $where = ['id' => session()->get('id')];
    $data['suratmasuk'] = $model->getAllSuratMasuk('Active');
     echo view ('header');
     echo view ('suratmasuk',$data);
     echo view ('footer');
    
}
  public function tambahsuratmasuk()
    {
        $model = new office();
        $data['desta']= $model->tampil('suratmasuk');

        echo view ('header');
        echo view ('tambahsuratmasuk');
        echo view ('footer');
    }
    public function editsuratmasuk($id)
{
    $model = new office();
    $where = array('id_suratmasuk' => $id);
    $data['surat'] = $model->getwhere('suratmasuk', $where);

    echo view('header');
    echo view('editsuratmasuk', $data); 
    echo view('footer');
}

public function aksi_t_suratmasuk() {
    $data = array(
        'no_surat' => $this->request->getPost('no_surat'),
        'tanggal_surat' => $this->request->getPost('tanggal_surat'),
        'pengirim' => $this->request->getPost('pengirim'),
        'perihal' => $this->request->getPost('perihal'),
        'status' => $this->request->getPost('status'),
    );

    if ($file = $this->request->getFile('file_surat')) {
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move(WRITEPATH . 'uploads');

            $data['filesurat'] = $file->getName();
        } else {
            // Bisa menambahkan logika error jika file tidak valid
        }
    }

    $model = new office();
    $model->tambah('suratmasuk',$data);
    return redirect()->to('home/suratmasuk');
}

public function detailsuratmasuk($id) {
    $model = new office(); // Inisialisasi model office
    $data['suratmasuk'] = $model->getSuratMasukById($id); // Mengambil data surat masuk berdasarkan id
    echo view('header'); // Menampilkan header
    echo view('detailsuratmasuk', $data); // Menampilkan view detail surat masuk dengan data
    echo view('footer'); // Menampilkan footer
}

 public function hapussuratmasuk($id)
    {
        $model = new office();
        $where = array('id_suratmasuk'=>$id);
        $model->hapus('suratmasuk',$where);
        return redirect()->to('home/suratmasuk');
    }
    public function suratkeluar() {
    $model = new office();
    $where = ['id_suratkeluar' => session()->get('id')];
     $data['suratkeluar'] = $model->getAllSuratKeluar('Active');
     echo view ('header');
     echo view ('suratkeluar',$data);
     echo view ('footer');
    
}
public function tambahsuratkeluar()
    {
        $model = new office();
        $data['desta']= $model->tampil('suratkeluar');

        echo view ('header');
        echo view ('tambahsuratkeluar');
        echo view ('footer');
    }
    public function editsuratkeluar($id)
{
    $model = new office();
    $where = array('id_suratkeluar' => $id);
    $data['surat'] = $model->getwhere('suratkeluar', $where);

    echo view('header');
    echo view('editsuratkeluar', $data); 
    echo view('footer');
}
public function aksi_t_suratkeluar() {
    $data = array(
        'no_surat' => $this->request->getPost('no_surat'),
        'tanggal_surat' => $this->request->getPost('tanggal_surat'),
        'pengirim' => $this->request->getPost('pengirim'),
        'perihal' => $this->request->getPost('perihal'),
        'status' => $this->request->getPost('status'), // Status yang dipilih (Dikirim, Terkirim, Ditunda)
    );

    if ($file = $this->request->getFile('file_surat')) {
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move('public/upload');
            $data['filesurat'] = $file->getName();
        }
    }

    $model = new office();
    $model->tambah('suratkeluar',$data);
    return redirect()->to('home/suratkeluar');
}

public function detailsuratkeluar($id) {
    $model = new office();
    $data['suratkeluar'] = $model->getSuratKeluarById($id);
    echo view('header');
    echo view('detailsuratkeluar', $data);
    echo view('footer');
}

 public function hapussuratkeluar($id)
    {
        $model = new office();
        $where = array('id_suratkeluar'=>$id);
        $model->hapus('suratkeluar',$where);
        return redirect()->to('home/suratkeluar');
    }
 
public function arsip() {
    $model = new office();
    $data['suratMasukArsip'] = $model->getSuratMasukArsip();
    $data['suratKeluarArsip'] = $model->getSuratKeluarArsip();
    
    return view('arsip', $data);
}
public function arsipsuratmasuk($id_suratmasuk) {
    $model = new office(); 
    if ($model->arsipkanSuratMasuk($id_suratmasuk)) {
        echo "Successfully archived!";
    } else {
        echo "Failed to archive.";
    }
}
public function arsipsuratkeluar($id_suratkeluar) {
    $model = new office(); 
    if ($model->arsipkanSuratKeluar($id_suratkeluar)) {
        echo "Successfully archived!";
    } else {
        echo "Failed to archive.";
    }
}
}
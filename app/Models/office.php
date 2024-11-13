<?php

namespace App\Models;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class office extends Model
{

    public function tampil($tabel)
    {
        return $this->db
                    ->table($tabel)
                    ->get()
                    ->getResult();
    }
    public function edit($tabel, $data, $where)
    {
        return $this->db
                    ->table($tabel)
                    ->update($data,$where);
    }
    public function getwhere($tabel, $where)
    {
        return $this->db
                    ->table($tabel)
                    ->getWhere($where)
                    ->getRow();
    }
    public function tambah($tabel, $data)
    {
        return $this->db
                    ->table($tabel)
                    ->insert($data);
                    
    }

    public function hapus($tabel, $where)
    {
        return $this->db
                    ->table($tabel)
                    ->delete($where);
    }
   
public function getAllSuratMasuk($status = 'Active') {
    return $this->db->table('suratmasuk')
                    ->where('status !=', 'Arsip')  
                    ->get()
                    ->getResult();
}


   public function getSuratMasukById($id) {
    return $this->db->table('suratmasuk')->where('id_suratmasuk', $id)->get()->getRow();
}

 // In office model
public function getAllSuratKeluar($status = 'Active') {
    return $this->db->table('suratkeluar')
                    ->where('status !=', 'Arsip') 
                    ->get()
                    ->getResult();
}


public function getSuratKeluarById($id) {
    return $this->db->table('suratkeluar')->where('id_suratkeluar', $id)->get()->getRow();
}
public function getSuratMasukArsip() {
    return $this->db->table('suratmasuk')
                    ->where('status', 'Arsip')
                    ->get()->getResult();
}

public function getSuratKeluarArsip() {
    return $this->db->table('suratkeluar')
                    ->where('status', 'Arsip')
                    ->get()->getResult();
}
public function arsipkanSuratMasuk($id_suratmasuk) {
    $data = [
        'status' => 'Arsip', // Set the status to 'Arsip'
    ];
    
    // Attempt to update the status and check for errors
    $update = $this->db->table('suratmasuk')->where('id_suratmasuk', $id_suratmasuk)->update($data);

    if (!$update) {
        // Log or display the error message if the update fails
        echo "Error: " . $this->db->error()['message'];
        return false;
    }

    return $update;
}
public function arsipkanSuratKeluar($id_suratkeluar) {
    $data = [
        'status' => 'Arsip', // Set the status to 'Arsip'
    ];
    
    // Attempt to update the status and check for errors
    $update = $this->db->table('suratkeluar')->where('id_suratkeluar', $id_suratkeluar)->update($data);

    if (!$update) {
        // Log or display the error message if the update fails
        echo "Error: " . $this->db->error()['message'];
        return false;
    }

    return $update;
}
}

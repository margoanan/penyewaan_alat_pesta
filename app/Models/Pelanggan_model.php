<?php
namespace App\Models;

use CodeIgniter\Model;

class Pelanggan_model extends Model
{
    protected $table = 'Pesta_Pelanggan';
    protected $primaryKey = 'PestaPelanggan_id';
    protected $allowedFields = ['PestaPelanggan_Nama', 'PestaPelanggan_Alamat', 'PestaPelanggan_Tgl'];

    public function getPelanggan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }

    public function insertPelanggan($data)
    {
        return $this->insert($data);
    }

    public function updatePelanggan($id, $data)
    {
        $row = $this->find($id);

        if ($row) {
            $updated = $this->where('PestaPelanggan_id', $id)->set($data)->update();

            if ($updated) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function deletePelanggans($id)
    {
        return $this->db->table($this->table)->delete(['PestaPelanggan_id' => $id]);
    }
}
?>
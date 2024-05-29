<?php
namespace App\Models;

use CodeIgniter\Model;

class Alat_model extends Model
{
    protected $table = 'alat';
    protected $primaryKey = 'alat_id';
    protected $allowedFields = ['alat_id','alat_nama', 'alat_status', 'alat_kondisi'];

    public function getAlat($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    protected $table = 'Pesta_Pelanggan';

    public function getCountPel()
    {
        return $this->countAll();
    }

    public function getCountAlat()
    {
        $alatModel = new \App\Models\Alat_model();
        return $alatModel->countAll();
    }
}

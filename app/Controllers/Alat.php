<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Alat_model;

class Alat extends BaseController
{
    protected $alatModel;

    public function __construct()
    {
        $this->alatModel = new Alat_model();
    }

    public function index()
    {
        $data['data_alat'] = $this->alatModel->findAll();
        return view('alat/index', $data);
    }

    public function create()
    {
        return view('alat/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $data = [
            'alat_id' => $this->request->getPost('alat_id'),
            'alat_nama' => $this->request->getPost('alat_nama'),
            'alat_status' => $this->request->getPost('alat_status'),
            'alat_kondisi' => $this->request->getPost('alat_kondisi'),
        ];

        if (!$validation->run($data, 'alat')) {
            return redirect()->to(base_url('alat/create'))->withInput()->with('errors', $validation->getErrors());
        }

        $this->alatModel->insert($data);

        return redirect()->to(base_url('alat'))->with('success', 'alat created successfully');
    }

    public function edit($id)
    {
        $data['alat'] = $this->alatModel->find($id);

        return view('alat/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('alat_id');

        $data = [
            'alat_nama' => $this->request->getVar('alat_nama'),
            'alat_status' => $this->request->getVar('alat_status'),
            'alat_kondisi' => $this->request->getVar('alat_kondisi'),
        ];

        $this->alatModel->update($id, $data);

        return redirect()->to(base_url('alat'))->with('success', 'alat updated successfully');
    }

    public function delete($id)
    {
        
        $this->alatModel->delete($id);

        return redirect()->to(base_url('alat'))->with('success', 'Alat deleted successfully');
    }
}  
<?php

namespace App\Controllers;

use App\Models\KeluargaModel;

class Keluarga extends BaseController
{
    protected $keluarga;

    function __construct()
    {
        $this->keluarga = new KeluargaModel();
    }

    public function index()
    {
        $data['keluarga'] = $this->keluarga->findAll();
        return view('keluarga/index', $data);
    }

    public function create()
    {
        return view('keluarga/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->keluarga->insert([
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'level' => $this->request->getVar('level'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Keluarga Berhasil');
        return redirect()->to('/keluarga');
    }

    function edit($id)
    {
        $dataKeluarga = $this->keluarga->find($id);
        if (empty($dataKeluarga)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Keluarga Tidak ditemukan !');
        }
        $data['keluarga'] = $dataKeluarga;
        return view('keluarga/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->keluarga->update($id, [
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'level' => $this->request->getVar('level'),
        ]);
        session()->setFlashdata('message', 'Update Data Keluarga Berhasil');
        return redirect()->to('/keluarga');
    }

    function delete($id)
    {
        $dataKeluarga = $this->keluarga->find($id);
        if (empty($dataKeluarga)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Keluarga Tidak ditemukan !');
        }
        $this->keluarga->delete($id);
        session()->setFlashdata('message', 'Delete Data Keluarga Berhasil');
        return redirect()->to('/keluarga');
    }
}

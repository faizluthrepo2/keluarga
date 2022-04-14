<?php

namespace App\Models;

use CodeIgniter\Model;

class KeluargaModel extends Model
{
    protected $table = "keluarga";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['id', 'nama', 'jenis_kelamin', 'level'];
}

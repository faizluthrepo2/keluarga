<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KeluargaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          =>  'Budi',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '1',
            ],
            [
                'nama'          =>  'Dedi',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '2',
            ],
            [
                'nama'          =>  'Dodi',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '2',
            ],
            [
                'nama'          =>  'Dede',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '2',
            ],
            [
                'nama'          =>  'Dewi',
                'jenis_kelamin' =>  'perempuan',
                'level'       =>  '2',
            ],
            [
                'nama'          =>  'Feri',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '3',
            ],
            [
                'nama'          =>  'Farah',
                'jenis_kelamin' =>  'perempuan',
                'level'       =>  '3',
            ],
            [
                'nama'          =>  'Gugus',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '3',
            ],
            [
                'nama'          =>  'Candi',
                'jenis_kelamin' =>  'laki-laki',
                'level'       =>  '3',
            ],
            [
                'nama'          =>  'Hani',
                'jenis_kelamin' =>  'perempuan',
                'level'       =>  '3',
            ],
            [
                'nama'          =>  'Hana',
                'jenis_kelamin' =>  'perempuan',
                'level'       =>  '3',
            ]
        ];
        $this->db->table('keluarga')->insertBatch($data);
    }
}

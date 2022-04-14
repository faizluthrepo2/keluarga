<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keluarga extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jenis_kelamin'       => [
                'type'              => 'ENUM',
                'constraint'        => "'laki-laki','perempuan'",
            ],
            'level' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('keluarga');
    }

    public function down()
    {
        $this->forge->dropTable('keluarga');
    }
}

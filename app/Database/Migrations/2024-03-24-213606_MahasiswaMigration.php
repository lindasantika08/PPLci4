<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MahasiswaMigration extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'NIM' =>[
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'Nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'Umur' => [
                'type' => 'INT',
                'constraint' => 3
            ]

            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mahasiswa');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jabatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jabatan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama_jabatan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'gaji'       => [
                'type'       => 'DOUBLE',
                'constraint' => '11',
            ],
            'jam_kerja'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'jadwal'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],

        ]);
        $this->forge->addKey('id_jabatan', true);
        $this->forge->createTable('data_jabatan');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_jabatan');
    }
}
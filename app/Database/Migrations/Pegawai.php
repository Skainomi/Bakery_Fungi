<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pegawai'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'profile_picture'       => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'       => true,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '12',
            ],
            'password'   => [
                'type'       => 'VARCHAR',
                'constraint' => '12',
            ],
            'tgl_bergabung'       => [
                'type'       => 'TIMESTAMP',
                'constraint' => '11',
            ],
            'gaji_tambahan'       => [
                'type'       => 'DOUBLE',
                'constraint' => '11',
            ],
            'id_jabatan'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('id_pegawai', true);
        $this->forge->createTable('data_pegawai');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_pegawai');
    }
}
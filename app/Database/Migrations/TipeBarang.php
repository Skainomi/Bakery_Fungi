<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tipe_barang'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_tipe'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'nama_tipe'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],

        ]);
        $this->forge->addKey('id_tipe_barang', true);
        $this->forge->createTable('data_tipe_barang');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_tipe_barang');
    }
}
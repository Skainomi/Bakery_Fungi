<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tambahan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'path'       => [
                'type'       => 'VARCHAR',
                'constraint' => '300',
            ],

        ]);
        $this->forge->addKey('id_tambahan', true);
        $this->forge->createTable('data_tambahan_barang');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_tambahan_barang');
    }
}
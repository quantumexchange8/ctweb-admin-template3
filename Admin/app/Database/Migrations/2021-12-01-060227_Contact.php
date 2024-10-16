<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'position' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'status' => [
                'type' => 'TINYINT',
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use App\Libraries\Hash;

class User extends Migration
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
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'otp' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => true
            ],
            'is_verify' => [
                'type' => 'INT',
                'default' => 0
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');

        // insert sample record
        $data = [
            'name' => 'Admin',
            'email' => 'admin@Themesdesign.in',
            'password' => Hash::make(123456),
            'otp' => null,
            'is_verify' => 1,
            'token' => null
        ];
        // Using Query Builder
        $this->db->table('users')->insert($data);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

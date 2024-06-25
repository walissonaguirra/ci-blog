<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'            => 'INT',
                'constraint'      => 11,
                'unsigned'        => true,
                'auto_increment' => true
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
            ],
            'content' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}

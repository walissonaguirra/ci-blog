<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 128
            ],
            'slug' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'body' => [
                'type' => 'text'
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}

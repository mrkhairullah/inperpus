<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRacksMigration extends Migration
{
    protected $tableName = 'racks';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'floor' => [
                'type'           => 'VARCHAR',
                'constraint'     => 1,
                'default'        => 1,
            ],
            'name' => [
                'type'           => 'CHAR',
                'constraint'     => 1,
                'unique'         => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'deleted_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable($this->tableName);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName);
    }
}

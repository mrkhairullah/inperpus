<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLoansMigration extends Migration
{
    protected $tableName = 'loans';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'member_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'book_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'quantity' => [
                'type'           => 'TINYINT',
                'constraint'     => 2,
                'unsigned'       => true,
                'default'        => 1,
            ],
            'due_date' => [
                'type'           => 'DATETIME',
            ],
            'return_date' => [
                'type'           => 'DATETIME',
                'null'           => true,
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
        $this->forge->addForeignKey('member_id', 'members', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->addForeignKey('book_id', 'books', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable($this->tableName);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName);
    }
}

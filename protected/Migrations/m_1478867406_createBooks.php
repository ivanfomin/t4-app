<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1478867406_createBooks
    extends Migration
{

    public function up()
    {
        $this->createTable('books', [
            'name' => ['type' => 'string'],
            'description' => ['type' => 'text'],
            'year' => ['type' => 'int'],
        ]);
    }

    public function down()
    {
        $this->dropTable('books');
    }

}
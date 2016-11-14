<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1479101418_addFragments
    extends Migration
{

    public function up()
    {
        $this->createTable('fragments', [
            'content' => ['type' => 'text']
        ]);
        $this->addColumn('books', [
            '__fragment_id' => ['type' => 'link']
        ]);
    }

    public function down()
    {
        $this->dropColumn('books', '__fragment_id');
        $this->dropTable('fragments');
    }
    
}
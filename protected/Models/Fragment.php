<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 14.11.16
 * Time: 8:32
 */

namespace App\Models;


use T4\Orm\Model;

class Fragment extends Model
{
    static protected $schema = [
        'table' => 'fragments',
        'columns' => [
            'content' => ['type' => 'text']
        ]
    ];

}
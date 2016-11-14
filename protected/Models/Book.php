<?php


namespace App\Models;

use T4\Orm\Model;

/**
 * Class Book
 * @package App\Models
 *
 * $property string $name
 * $property string $description
 * $propery int $age
 */
class Book extends Model
{
    static protected $schema = [
        'table' => 'books',
        'columns' => [
            'name' => ['type' => 'string'],
            'description' => ['type' => 'text'],
            'year' => ['type' => 'int'],
        ],
        'relations' => [
            'fragment' => ['type' => self::BELONGS_TO, 'model' => Fragment::class]
        ]
    ];

}
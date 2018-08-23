<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Page extends Model
{
    use ElasticquentTrait;

    protected $table = 'pages';
    protected $fillable = [
      'name',
      'alias',
      'text',
      'images'
    ];

    protected $mappingProperties = array(
        'name' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
        'alias' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
        'text' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
        'images' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
    );
}

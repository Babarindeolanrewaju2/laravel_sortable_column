<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Product extends Model
{
    use Sortable;

    protected $fillable = [ 'name', 'description' ];

	public $sortable = ['id', 'name', 'description', 'created_at', 'updated_at'];
}

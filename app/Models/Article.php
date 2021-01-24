<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'article';

    public function getPublishedOnAttribute($value)
    {
        // return $value->format('d-m-Y');
        return Carbon::parse($value)->format('d-m-Y');
    }
}

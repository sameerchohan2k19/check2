<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo(project::class);
    }
}

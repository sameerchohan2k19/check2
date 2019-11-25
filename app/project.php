<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
   //protected $fillable = ['title', 'description', 'price'];
   protected $guarded = [];


public function specs(){
    return $this->hasMany(Specs::class);
    
}

public function addSpecs($specs)
{
//    return Specs::create([
//    'project_id' => $this->id,
//    'description' => $description
//    ]);
$this->specs()->create($specs);
}

}
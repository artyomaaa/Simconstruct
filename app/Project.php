<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['project_name'];

    public function project_image()
    {
        return $this->hasMany('App\ProjectImage');
    }
}

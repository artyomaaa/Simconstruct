<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['image', 'icone', 'title_es', 'title_eng', 'text_es', 'text_eng'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public $guarded = [];

    public function getCompletePost() {
        return 
        'Titulo del post: '.$this->title.
        'Subtitulo: '.$this->subtitle.
        'Contenido de post: '.$this->content; 
    }
    
}

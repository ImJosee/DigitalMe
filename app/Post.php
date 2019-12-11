<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model {

    public $guarded = [];

    public function getCompletePost() {
        return 
        'Titulo del post: '.$this->title.
        'Subtitulo: '.$this->subtitle.
        'Contenido de post: '.$this->content; 
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getShortTitle() {
        if(strlen($this->title) > 30) {
            return substr($this->title, 0, 30) . "...";
        }
        return $this->title;
    }

    public function getImage() {
        $test = 'images/publicacion'.rand(1,12).'.jpg';
        if($this->image != null) {
            return '/storage/'.$this->image;
        }  else {
            return asset($test);
        }               
    }
 
    public function likes() {
        return $this->belongsToMany(User::class, 'like_user', 'post_id', 'user_id');
    }

    public function getViews() {
        return $this->belongsToMany(User::class, 'view_user', 'post_id', 'user_id');
    }

}

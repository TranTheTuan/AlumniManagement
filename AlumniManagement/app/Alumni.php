<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    //
    protected $table = 'alumni';
    //tao lien ket 1-n voi bang courses, n sinh vien - 1 course
    public function course(){
        return $this->belongsTo('App\Course');
    }
    //tao lien ket 1-n voi bang provinces, n sinh vien - 1 tinh
    public function province(){
        return $this->belongsTo('App\Province');
    }
    //tao lien ket 1-n voi bang district, n sinh vien - 1 huyen
    public function district(){
        return $this->belongsTo('App\District');
    }
}

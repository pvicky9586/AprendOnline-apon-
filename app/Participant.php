<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    protected $fillable = [ 'cedula','name','last_name', 'email', 'phone', 'NroWp', 'user_created', 'user_updated' ];

    // public function profe()
    // {
    //     return $this->hasOne(Profession::class);
    // }


    public function profession()
    {
          return $this->belongsTo(Profession::class);
    }

     public function aulas()
    {
        return $this->hasMany(UserAula::class);
    }

    public function inscs()
    {
       return $this->hasMany(Incription::class);
    }



       // public function curs()
       //  {
       //      return $this->hasManyThrough(Curso::class, Incription::class, '');
       //  }
}

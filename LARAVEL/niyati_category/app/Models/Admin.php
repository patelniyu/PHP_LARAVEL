<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email', 'password','gender','hobbie',
    ];
    public function setHobbieAttribute($Admin)
    {
        $this->attributes['hobbie'] = implode(',',$Admin);
    }
    public function getHobbieAttribute($Admin)
    {
        return $this->attributes[''] = explode(',',$Admin);
    }
}

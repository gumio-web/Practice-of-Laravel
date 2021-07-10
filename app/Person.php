<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
    protected $guarded = ['id',];
    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    ];

    public function getData()
    {
        return "{$this->id}: {$this->name}({$this->age})";
    }

    public function board()
    {
        return $this->hasOne('App\Board');
    }
}

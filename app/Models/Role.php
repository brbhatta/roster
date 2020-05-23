<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['name', 'is_internal'];

    public function scopeInternal()
    {
        return $this->whereIsInternal(true);
    }

    public function scopeNotInternal()
    {
        return $this->whereIsInternal(false);
    }

    public function isInternal()
    {
        return $this->is_internal == 1;
    }

}

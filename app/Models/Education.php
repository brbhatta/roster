<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    public $table = 'educations';

    protected $fillable = ['name', 'category', 'sub_category'];
}

<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/5
 * Time: 15:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    public $timestamps=true;
    protected $fillable = ['name','age'];

    protected function getDateFormat()
    {
        return time();
    }
    protected function asDateTime($value)
    {
        return $value; // TODO: Change the autogenerated stub
    }
}
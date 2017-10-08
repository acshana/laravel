<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/7
 * Time: 11:07
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ALmodel extends Model
{
    protected $table='al';
    protected $primaryKey = 'id';
    protected $fillable = ['name','pj','lj','fk','hk','zt','nj'];
}
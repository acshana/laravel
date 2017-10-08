<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/5
 * Time: 11:05
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class mymodel extends Model
{
    public static function getname()
    {
        return 'my girl name is arroy!';
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/6
 * Time: 15:11
 */

namespace App\Http\Middleware;

class Active
{
    public function handle($request,\Closure $next)
    {

        if (time()<strtotime('2017-10-10')){
            return redirect('conduct');
        }
        return $next($request);
    }
}
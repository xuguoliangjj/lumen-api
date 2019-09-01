<?php
/**
 * Created by PhpStorm.
 * Date: 2019/9/1
 * Time: 20:37
 * @author: xuguoliang <1044748759@qq.com>
 */
namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // 执行操作

        return $next($request);
    }
}
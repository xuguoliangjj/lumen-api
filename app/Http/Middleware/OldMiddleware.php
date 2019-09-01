<?php
/**
 * Created by PhpStorm.
 * Date: 2019/9/1
 * Time: 20:36
 * @author: xuguoliang <1044748759@qq.com>
 */
namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
    /**
     * 运行请求过滤器
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('age') <= 200) {
            return '不够';
        }

        return $next($request);
    }

}
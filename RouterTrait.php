<?php
namespace App\Http\Traits;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
trait RouterTrait
{
    /**
     * 根據路由名稱取得呼叫方法
     */
    function getMethodByRouteName($routeName)
    {
        /** @var  $router */
        $router = App::make(Router::class);
        $method = $router->getRoutes()->getByName($routeName)->methods[0];
        return $method;
    }
}

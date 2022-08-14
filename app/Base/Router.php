<?php

namespace App\Base;

use Pecee\SimpleRouter\SimpleRouter;
use Pecee\SimpleRouter\Route\IRoute;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Route\RouteUrl;

class Router extends SimpleRouter
{

    /**
     * Route the given url to your callback on GET request method.
     *
     * @param string $url
     * @param string|array|\Closure $callback
     * @param array|null $settings
     *
     * @return RouteUrl|IRoute
     */
    public static function get(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR . '/' . $url;
        return static::match([Request::REQUEST_TYPE_GET], $url, $callback, $settings);
    }
    /**
     * Route the given url to your callback on POST request method.
     *
     * @param string $url
     * @param string|array|Closure $callback
     * @param array|null $settings
     * @return RouteUrl|IRoute
     */
    public static function post(string $url, $callback, array $settings = null): IRoute
    {
        $url = BASE_DIR . '/' . $url;
        return static::match([Request::REQUEST_TYPE_POST], $url, $callback, $settings);
    }
}

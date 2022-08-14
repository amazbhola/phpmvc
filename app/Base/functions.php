<?php

use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Url;
use Pecee\Http\Response;
use Pecee\Http\Request;
use App\Models\Setting;

function setting_data($column_name)
{
    $setting = new Setting();

    // return $setting->showSettingData();
    $result =  $setting->showSettingData();
    return $result[0][$column_name];
}

function views(string $path, array $data = [])
{
    extract($data);
    require_once VIEWS.'/'.$path.'.php';
}

function assets($assets_file_name)
{
    return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/'.BASE_DIR.'/assets/'.$assets_file_name;
}
function media($assets_file_name)
{
    return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/'.BASE_DIR.'/media/'.$assets_file_name;
}
function checkNotLogin()
{
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:'.url('login'));
    }
}
function checkLogin()
{
    session_start();
    if (isset($_SESSION['username'])) {
        header('location:'.url('dashboard'));
    }
}
function sessionMassageSet($massage)
{
    session_start();
    $_SESSION['flash_message'] = $massage;
}
function sessionMassageGet()
{
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);

        return $message;
    }
}
/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|array|null $parameters
 *
 * @throws \InvalidArgumentException
 */
function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
{
    $name = BASE_DIR.'/'.$name;

    return Router::getUrl($name, $parameters, $getParams);
}

function response(): Response
{
    return Router::response();
}

function request(): Request
{
    return Router::request();
}

/**
 * Get input class.
 *
 * @param string|null       $index        Parameter index name
 * @param string|mixed|null $defaultValue Default return value
 * @param array             ...$methods   Default methods
 *
 * @return \Pecee\Http\Input\InputHandler|array|string|null
 */
function input($index = null, $defaultValue = null, ...$methods)
{
    if ($index !== null) {
        return request()->getInputHandler()->value($index, $defaultValue, ...$methods);
    }

    return request()->getInputHandler();
}

function redirect(string $url, ?int $code = null): void
{
    if ($code !== null) {
        response()->httpCode($code);
    }

    response()->redirect($url);
}

/**
 * Get current csrf-token.
 */
function csrf_token(): ?string
{
    $baseVerifier = Router::router()->getCsrfVerifier();
    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }

    return null;
}

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}



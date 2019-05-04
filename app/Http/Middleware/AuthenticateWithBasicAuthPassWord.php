<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use App\Room;

class AuthenticateWithBasicAuthPassWord
{
    /**
     * The guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(AuthFactory $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @param  string|null  $field
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
     */
     public function handle($request, Closure $next, $guard = null, $field = null)
     {
       preg_match("|([0-9]+)|",$request->path(),$matches);
       $id = $matches[1];
       $password = Room::find($id)->password;

       switch (true) {
         case !isset($_SERVER['PHP_AUTH_PW']):
         // case $_SERVER['PHP_AUTH_USER'] !== 'test':
         case $_SERVER['PHP_AUTH_PW']   !== $password:
         header('WWW-Authenticate: Basic realm="Enter password."');
         header('Content-Type: text/plain; charset=utf-8');
         die('このページを見るにはログインが必要です');
       }
       header('Content-Type: text/html; charset=utf-8');

        return $next($request);
    }
}

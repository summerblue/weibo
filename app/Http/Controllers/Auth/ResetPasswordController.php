<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 重置密码控制器
    |--------------------------------------------------------------------------
    |
    | 此控制器使用 ResetsPasswords trait 里设定的控制器方法来处理
    | 显示密码重置表单和修改密码动作。
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';
}

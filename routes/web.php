<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Notifications\SubscriptionRenewalFailed;
use Symfony\Component\HttpKernel\HttpCache\SubRequestHandler;

Route::get('/', function () {
    $user = App\User::first();

    // error_log($user);

    $user->notify(new SubscriptionRenewalFailed);

    return 'Done';
});

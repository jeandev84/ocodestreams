<?php
namespace App\Providers;


use App\Auth\Factory;
use App\Auth\JwtAuth;
use App\Auth\Providers\Auth\EloquentProvider;
use League\Container\ServiceProvider\AbstractServiceProvider;


/**
 * Class AuthServiceProvider
 * @package App\Providers
*/
class AuthServiceProvider extends AbstractServiceProvider
{

    protected $provides = [
       JwtAuth::class
    ];


    public function register()
    {
        $container = $this->getContainer();

        $container->share(JwtAuth::class, function () {

            $authProvider = new EloquentProvider();
            $factory = new Factory();

            return new JwtAuth($authProvider, $factory);
        });
    }
}
<?php
namespace App\Providers;


use Doctrine\ORM\Tools\Setup;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Doctrine\ORM\EntityManager;


/**
 * Class DatabaseServiceProvider
 * @package App\Providers
*/
class DatabaseServiceProvider extends AbstractServiceProvider
{

    protected $provides = [
       EntityManager::class
    ];

    public function register()
    {
         $container = $this->getContainer();

         $config = $container->get('config');

         $container->share(EntityManager::class, function () use($config) {

             $entityManager = EntityManager::create(
                  $config->get('db.'. env('DB_TYPE')),
                  Setup::createAnnotationMetadataConfiguration(
                      [base_path('app')],
                      $config->get('app.debug') // true or false
                  )
             );

             return $entityManager;
         });
    }
}
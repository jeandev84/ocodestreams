<?php

$container = new League\Container\Container();

$container->addServiceProvider(new \App\Providers\AppServiceProvider());

var_dump($container->get('test'));
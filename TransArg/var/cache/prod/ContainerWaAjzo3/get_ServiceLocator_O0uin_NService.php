<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.O0uin.n' shared service.

return $this->privates['.service_locator.O0uin.n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'compte' => ['privates', '.errored..service_locator.O0uin.n.App\\Entity\\Compte', NULL, 'Cannot autowire service ".service_locator.O0uin.n": it references class "App\\Entity\\Compte" but no such service exists.'],
    'compteRepository' => ['privates', 'App\\Repository\\CompteRepository', 'getCompteRepositoryService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
], [
    'compte' => 'App\\Entity\\Compte',
    'compteRepository' => 'App\\Repository\\CompteRepository',
    'serializer' => '?',
]);
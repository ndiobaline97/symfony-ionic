<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PWbY9uA' shared service.

return $this->privates['.service_locator.PWbY9uA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'entrepriseRepository' => ['privates', 'App\\Repository\\EntrepriseRepository', 'getEntrepriseRepositoryService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
], [
    'entrepriseRepository' => 'App\\Repository\\EntrepriseRepository',
    'serializer' => '?',
]);

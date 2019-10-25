<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/SerializerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/ArrayTransformerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Serializer.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/LazyLoadingDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Expression/CompilableExpressionEvaluatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Expression/ExpressionEvaluatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Expression/ExpressionEvaluator.php';
include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionFunctionProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ExpressionLanguage/BasicSerializerFunctionsProvider.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/EventDispatcher/EventDispatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/EventDispatcher/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/EventDispatcher/LazyEventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Type/ParserInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Type/Parser.php';

$a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
$a->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));
$b = ($this->services['fos_rest.serializer.jms_handler_registry'] ?? $this->load('getFosRest_Serializer_JmsHandlerRegistryService.php'));
$c = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
$c->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

$d = new \JMS\Serializer\Expression\ExpressionEvaluator($c, ['container' => $this]);

$e = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($d);
$f = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService.php', true],
    'jms_serializer.stopwatch_subscriber' => ['privates', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService.php', true],
], [
    'jms_serializer.doctrine_proxy_subscriber' => '?',
    'jms_serializer.stopwatch_subscriber' => '?',
]));
$f->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => NULL], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 5 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy']], 'serializer.post_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'], 1 => NULL, 2 => NULL, 3 => NULL]]]);
$g = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
$g->setOptions(1216);
$h = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
$h->setFormatOutput(true);
$i = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
$i->setOptions(0);

return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, ($this->privates['jms_serializer.unserialize_object_constructor'] ?? ($this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())), $e, $f, $d), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $e, $f, $d)], ['json' => $g, 'xml' => $h], ['json' => $i, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($this->services['jms_serializer.serialization_context_factory'] ?? ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->services['jms_serializer.deserialization_context_factory'] ?? ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));

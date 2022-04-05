<?php

namespace ContainerEJiVxiE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf597 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7a36 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese3790 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getConnection', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getMetadataFactory', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getExpressionBuilder', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'beginTransaction', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getCache', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'transactional', array('func' => $func), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'commit', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->commit();
    }

    public function rollback()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'rollback', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'createQuery', array('dql' => $dql), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'createQueryBuilder', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'flush', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'clear', array('entityName' => $entityName), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'close', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->close();
    }

    public function persist($entity)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'persist', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'remove', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'refresh', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'detach', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'merge', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'contains', array('entity' => $entity), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getEventManager', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getConfiguration', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'isOpen', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getUnitOfWork', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getProxyFactory', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'getFilters', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'isFiltersStateClean', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'hasFilters', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return $this->valueHolderdf597->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc7a36 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf597) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf597 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf597->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, '__get', ['name' => $name], $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        if (isset(self::$publicPropertiese3790[$name])) {
            return $this->valueHolderdf597->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf597;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf597;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf597;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf597;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, '__isset', array('name' => $name), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf597;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf597;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, '__unset', array('name' => $name), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf597;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf597;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, '__clone', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        $this->valueHolderdf597 = clone $this->valueHolderdf597;
    }

    public function __sleep()
    {
        $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, '__sleep', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;

        return array('valueHolderdf597');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7a36 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7a36;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7a36 && ($this->initializerc7a36->__invoke($valueHolderdf597, $this, 'initializeProxy', array(), $this->initializerc7a36) || 1) && $this->valueHolderdf597 = $valueHolderdf597;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf597;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf597;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

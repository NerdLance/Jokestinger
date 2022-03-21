<?php

namespace ContainerQAkjxie;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere043d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3aa12 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0815 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getConnection', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getMetadataFactory', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getExpressionBuilder', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'beginTransaction', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getCache', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'transactional', array('func' => $func), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'commit', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->commit();
    }

    public function rollback()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'rollback', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getClassMetadata', array('className' => $className), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'createQuery', array('dql' => $dql), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'createNamedQuery', array('name' => $name), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'createQueryBuilder', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'flush', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'clear', array('entityName' => $entityName), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->clear($entityName);
    }

    public function close()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'close', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->close();
    }

    public function persist($entity)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'persist', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'remove', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'refresh', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'detach', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'merge', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'contains', array('entity' => $entity), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getEventManager', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getConfiguration', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'isOpen', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getUnitOfWork', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getProxyFactory', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'initializeObject', array('obj' => $obj), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'getFilters', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'isFiltersStateClean', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'hasFilters', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return $this->valueHoldere043d->hasFilters();
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

        $instance->initializer3aa12 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere043d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere043d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere043d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, '__get', ['name' => $name], $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        if (isset(self::$publicPropertiesf0815[$name])) {
            return $this->valueHoldere043d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere043d;

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

        $targetObject = $this->valueHoldere043d;
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
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere043d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere043d;
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
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, '__isset', array('name' => $name), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere043d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere043d;
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
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, '__unset', array('name' => $name), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere043d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere043d;
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
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, '__clone', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        $this->valueHoldere043d = clone $this->valueHoldere043d;
    }

    public function __sleep()
    {
        $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, '__sleep', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;

        return array('valueHoldere043d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3aa12 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3aa12;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3aa12 && ($this->initializer3aa12->__invoke($valueHoldere043d, $this, 'initializeProxy', array(), $this->initializer3aa12) || 1) && $this->valueHoldere043d = $valueHoldere043d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere043d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere043d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

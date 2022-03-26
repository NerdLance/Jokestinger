<?php

namespace ContainerQVxqY47;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3e48 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10cc3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties34bed = [
        
    ];

    public function getConnection()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getConnection', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getMetadataFactory', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getExpressionBuilder', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'beginTransaction', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getCache', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'transactional', array('func' => $func), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'commit', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->commit();
    }

    public function rollback()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'rollback', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getClassMetadata', array('className' => $className), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'createQuery', array('dql' => $dql), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'createNamedQuery', array('name' => $name), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'createQueryBuilder', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'flush', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'clear', array('entityName' => $entityName), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->clear($entityName);
    }

    public function close()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'close', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->close();
    }

    public function persist($entity)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'persist', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'remove', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'refresh', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'detach', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'merge', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'contains', array('entity' => $entity), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getEventManager', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getConfiguration', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'isOpen', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getUnitOfWork', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getProxyFactory', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'initializeObject', array('obj' => $obj), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'getFilters', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'isFiltersStateClean', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'hasFilters', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return $this->valueHoldera3e48->hasFilters();
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

        $instance->initializer10cc3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera3e48) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3e48 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3e48->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, '__get', ['name' => $name], $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        if (isset(self::$publicProperties34bed[$name])) {
            return $this->valueHoldera3e48->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3e48;

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

        $targetObject = $this->valueHoldera3e48;
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
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3e48;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3e48;
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
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, '__isset', array('name' => $name), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3e48;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3e48;
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
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, '__unset', array('name' => $name), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3e48;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3e48;
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
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, '__clone', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        $this->valueHoldera3e48 = clone $this->valueHoldera3e48;
    }

    public function __sleep()
    {
        $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, '__sleep', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;

        return array('valueHoldera3e48');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10cc3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10cc3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10cc3 && ($this->initializer10cc3->__invoke($valueHoldera3e48, $this, 'initializeProxy', array(), $this->initializer10cc3) || 1) && $this->valueHoldera3e48 = $valueHoldera3e48;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3e48;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3e48;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

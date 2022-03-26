<?php

namespace ContainerJjt5upR;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder69dc5 = null;
    private $initializerca9e5 = null;
    private static $publicProperties45188 = [
        
    ];
    public function getConnection()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getConnection', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getMetadataFactory', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getExpressionBuilder', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'beginTransaction', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getCache', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getCache();
    }
    public function transactional($func)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'transactional', array('func' => $func), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'commit', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->commit();
    }
    public function rollback()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'rollback', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getClassMetadata', array('className' => $className), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'createQuery', array('dql' => $dql), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'createNamedQuery', array('name' => $name), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'createQueryBuilder', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'flush', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'clear', array('entityName' => $entityName), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->clear($entityName);
    }
    public function close()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'close', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->close();
    }
    public function persist($entity)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'persist', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'remove', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'refresh', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'detach', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'merge', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'contains', array('entity' => $entity), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getEventManager', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getConfiguration', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'isOpen', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getUnitOfWork', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getProxyFactory', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'initializeObject', array('obj' => $obj), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'getFilters', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'isFiltersStateClean', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'hasFilters', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return $this->valueHolder69dc5->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerca9e5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder69dc5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder69dc5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder69dc5->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, '__get', ['name' => $name], $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        if (isset(self::$publicProperties45188[$name])) {
            return $this->valueHolder69dc5->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69dc5;
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
        $targetObject = $this->valueHolder69dc5;
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
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69dc5;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder69dc5;
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
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, '__isset', array('name' => $name), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69dc5;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder69dc5;
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
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, '__unset', array('name' => $name), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69dc5;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder69dc5;
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
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, '__clone', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        $this->valueHolder69dc5 = clone $this->valueHolder69dc5;
    }
    public function __sleep()
    {
        $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, '__sleep', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
        return array('valueHolder69dc5');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca9e5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca9e5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerca9e5 && ($this->initializerca9e5->__invoke($valueHolder69dc5, $this, 'initializeProxy', array(), $this->initializerca9e5) || 1) && $this->valueHolder69dc5 = $valueHolder69dc5;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder69dc5;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder69dc5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

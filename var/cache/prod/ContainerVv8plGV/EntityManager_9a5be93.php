<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd8a1d = null;
    private $initializerc66b4 = null;
    private static $publicPropertiese0f54 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getConnection', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getMetadataFactory', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getExpressionBuilder', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'beginTransaction', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getCache', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'transactional', array('func' => $func), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'commit', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->commit();
    }
    public function rollback()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'rollback', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getClassMetadata', array('className' => $className), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'createQuery', array('dql' => $dql), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'createNamedQuery', array('name' => $name), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'createQueryBuilder', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'flush', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'clear', array('entityName' => $entityName), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->clear($entityName);
    }
    public function close()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'close', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->close();
    }
    public function persist($entity)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'persist', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'remove', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'refresh', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'detach', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'merge', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'contains', array('entity' => $entity), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getEventManager', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getConfiguration', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'isOpen', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getUnitOfWork', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getProxyFactory', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'initializeObject', array('obj' => $obj), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'getFilters', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'isFiltersStateClean', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'hasFilters', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return $this->valueHolderd8a1d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc66b4 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd8a1d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd8a1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd8a1d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, '__get', ['name' => $name], $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        if (isset(self::$publicPropertiese0f54[$name])) {
            return $this->valueHolderd8a1d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8a1d;
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
        $targetObject = $this->valueHolderd8a1d;
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
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8a1d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd8a1d;
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
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, '__isset', array('name' => $name), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8a1d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd8a1d;
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
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, '__unset', array('name' => $name), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8a1d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd8a1d;
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
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, '__clone', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        $this->valueHolderd8a1d = clone $this->valueHolderd8a1d;
    }
    public function __sleep()
    {
        $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, '__sleep', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
        return array('valueHolderd8a1d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc66b4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc66b4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc66b4 && ($this->initializerc66b4->__invoke($valueHolderd8a1d, $this, 'initializeProxy', array(), $this->initializerc66b4) || 1) && $this->valueHolderd8a1d = $valueHolderd8a1d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd8a1d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd8a1d;
    }
}

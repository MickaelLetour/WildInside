<?php

namespace ContainerEaXUnEW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6c081 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerab5a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8adea = [
        
    ];

    public function getConnection()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getConnection', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getMetadataFactory', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getExpressionBuilder', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'beginTransaction', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getCache', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getCache();
    }

    public function transactional($func)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'transactional', array('func' => $func), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->transactional($func);
    }

    public function commit()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'commit', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->commit();
    }

    public function rollback()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'rollback', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getClassMetadata', array('className' => $className), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'createQuery', array('dql' => $dql), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'createNamedQuery', array('name' => $name), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'createQueryBuilder', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'flush', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'clear', array('entityName' => $entityName), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->clear($entityName);
    }

    public function close()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'close', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->close();
    }

    public function persist($entity)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'persist', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'remove', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'refresh', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'detach', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'merge', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getRepository', array('entityName' => $entityName), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'contains', array('entity' => $entity), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getEventManager', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getConfiguration', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'isOpen', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getUnitOfWork', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getProxyFactory', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'initializeObject', array('obj' => $obj), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'getFilters', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'isFiltersStateClean', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'hasFilters', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return $this->valueHolder6c081->hasFilters();
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

        $instance->initializerab5a0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6c081) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6c081 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6c081->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__get', ['name' => $name], $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        if (isset(self::$publicProperties8adea[$name])) {
            return $this->valueHolder6c081->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c081;

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

        $targetObject = $this->valueHolder6c081;
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
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c081;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6c081;
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
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__isset', array('name' => $name), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c081;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6c081;
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
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__unset', array('name' => $name), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c081;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6c081;
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
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__clone', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        $this->valueHolder6c081 = clone $this->valueHolder6c081;
    }

    public function __sleep()
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__sleep', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        return array('valueHolder6c081');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerab5a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerab5a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'initializeProxy', array(), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6c081;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6c081;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

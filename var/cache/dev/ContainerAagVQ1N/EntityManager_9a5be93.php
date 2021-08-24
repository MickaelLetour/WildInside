<?php

namespace ContainerAagVQ1N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa158 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2993 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0c47 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getConnection', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getMetadataFactory', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getExpressionBuilder', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'beginTransaction', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getCache', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'transactional', array('func' => $func), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->transactional($func);
    }

    public function commit()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'commit', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->commit();
    }

    public function rollback()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'rollback', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'createQuery', array('dql' => $dql), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'createQueryBuilder', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'flush', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'clear', array('entityName' => $entityName), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'close', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->close();
    }

    public function persist($entity)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'persist', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'remove', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'refresh', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'detach', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'merge', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'contains', array('entity' => $entity), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getEventManager', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getConfiguration', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'isOpen', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getUnitOfWork', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getProxyFactory', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'getFilters', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'isFiltersStateClean', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'hasFilters', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return $this->valueHolderaa158->hasFilters();
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

        $instance->initializerf2993 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa158) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa158 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa158->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, '__get', ['name' => $name], $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        if (isset(self::$publicPropertiesb0c47[$name])) {
            return $this->valueHolderaa158->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa158;

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

        $targetObject = $this->valueHolderaa158;
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
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa158;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa158;
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
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, '__isset', array('name' => $name), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa158;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa158;
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
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, '__unset', array('name' => $name), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa158;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa158;
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
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, '__clone', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        $this->valueHolderaa158 = clone $this->valueHolderaa158;
    }

    public function __sleep()
    {
        $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, '__sleep', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;

        return array('valueHolderaa158');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2993 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2993;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2993 && ($this->initializerf2993->__invoke($valueHolderaa158, $this, 'initializeProxy', array(), $this->initializerf2993) || 1) && $this->valueHolderaa158 = $valueHolderaa158;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa158;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa158;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

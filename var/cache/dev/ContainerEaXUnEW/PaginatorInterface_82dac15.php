<?php

namespace ContainerEaXUnEW;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        if ($this->valueHolder6c081 === $returnValue = $this->valueHolder6c081->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerab5a0 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder6c081) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder6c081 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerab5a0 && ($this->initializerab5a0->__invoke($valueHolder6c081, $this, '__get', ['name' => $name], $this->initializerab5a0) || 1) && $this->valueHolder6c081 = $valueHolder6c081;

        if (isset(self::$publicProperties8adea[$name])) {
            return $this->valueHolder6c081->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}

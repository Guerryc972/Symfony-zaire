<?php

namespace ContainerJyI6WcC;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9b5f4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbf088 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7fced = [
        
    ];

    public function getConnection()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getConnection', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getMetadataFactory', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getExpressionBuilder', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'beginTransaction', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getCache', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'transactional', array('func' => $func), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->transactional($func);
    }

    public function commit()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'commit', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->commit();
    }

    public function rollback()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'rollback', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'createQuery', array('dql' => $dql), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'createQueryBuilder', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'flush', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'clear', array('entityName' => $entityName), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->clear($entityName);
    }

    public function close()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'close', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->close();
    }

    public function persist($entity)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'persist', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'remove', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'refresh', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'detach', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'merge', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'contains', array('entity' => $entity), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getEventManager', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getConfiguration', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'isOpen', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getUnitOfWork', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getProxyFactory', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'getFilters', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'isFiltersStateClean', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'hasFilters', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return $this->valueHolder9b5f4->hasFilters();
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

        $instance->initializerbf088 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9b5f4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9b5f4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9b5f4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, '__get', ['name' => $name], $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        if (isset(self::$publicProperties7fced[$name])) {
            return $this->valueHolder9b5f4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5f4;

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

        $targetObject = $this->valueHolder9b5f4;
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
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5f4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9b5f4;
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
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, '__isset', array('name' => $name), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5f4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9b5f4;
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
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, '__unset', array('name' => $name), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b5f4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9b5f4;
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
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, '__clone', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        $this->valueHolder9b5f4 = clone $this->valueHolder9b5f4;
    }

    public function __sleep()
    {
        $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, '__sleep', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;

        return array('valueHolder9b5f4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf088 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf088;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbf088 && ($this->initializerbf088->__invoke($valueHolder9b5f4, $this, 'initializeProxy', array(), $this->initializerbf088) || 1) && $this->valueHolder9b5f4 = $valueHolder9b5f4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b5f4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9b5f4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

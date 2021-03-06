<?php

namespace Proxies\__CG__\BufeteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Casos extends \BufeteBundle\Entity\Casos implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'noCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'fechaCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'pruebasCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'asignatarioCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'estadoCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idTipoasunto', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idDemandante', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idDemandado', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idEstudiante', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idTribunal', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idPersona', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idTipo'];
        }

        return ['__isInitialized__', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'noCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'fechaCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'pruebasCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'asignatarioCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'estadoCaso', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idTipoasunto', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idDemandante', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idDemandado', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idEstudiante', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idTribunal', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idPersona', '' . "\0" . 'BufeteBundle\\Entity\\Casos' . "\0" . 'idTipo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Casos $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdCaso()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCaso();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCaso', []);

        return parent::getIdCaso();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoCaso($noCaso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoCaso', [$noCaso]);

        return parent::setNoCaso($noCaso);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoCaso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoCaso', []);

        return parent::getNoCaso();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCaso($fechaCaso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCaso', [$fechaCaso]);

        return parent::setFechaCaso($fechaCaso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCaso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCaso', []);

        return parent::getFechaCaso();
    }

    /**
     * {@inheritDoc}
     */
    public function setPruebasCaso($pruebasCaso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPruebasCaso', [$pruebasCaso]);

        return parent::setPruebasCaso($pruebasCaso);
    }

    /**
     * {@inheritDoc}
     */
    public function getPruebasCaso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPruebasCaso', []);

        return parent::getPruebasCaso();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsignatarioCaso($asignatarioCaso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsignatarioCaso', [$asignatarioCaso]);

        return parent::setAsignatarioCaso($asignatarioCaso);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsignatarioCaso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsignatarioCaso', []);

        return parent::getAsignatarioCaso();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadoCaso($estadoCaso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadoCaso', [$estadoCaso]);

        return parent::setEstadoCaso($estadoCaso);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoCaso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoCaso', []);

        return parent::getEstadoCaso();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTipoasunto(\BufeteBundle\Entity\Tipoasuntos $idTipoasunto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTipoasunto', [$idTipoasunto]);

        return parent::setIdTipoasunto($idTipoasunto);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTipoasunto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTipoasunto', []);

        return parent::getIdTipoasunto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDemandante(\BufeteBundle\Entity\Demandantes $idDemandante = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDemandante', [$idDemandante]);

        return parent::setIdDemandante($idDemandante);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdDemandante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDemandante', []);

        return parent::getIdDemandante();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDemandado(\BufeteBundle\Entity\Demandados $idDemandado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDemandado', [$idDemandado]);

        return parent::setIdDemandado($idDemandado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdDemandado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDemandado', []);

        return parent::getIdDemandado();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEstudiante(\BufeteBundle\Entity\Estudiantes $idEstudiante = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEstudiante', [$idEstudiante]);

        return parent::setIdEstudiante($idEstudiante);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEstudiante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEstudiante', []);

        return parent::getIdEstudiante();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTribunal(\BufeteBundle\Entity\Tribunales $idTribunal = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTribunal', [$idTribunal]);

        return parent::setIdTribunal($idTribunal);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTribunal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTribunal', []);

        return parent::getIdTribunal();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPersona(\BufeteBundle\Entity\Personas $idPersona = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPersona', [$idPersona]);

        return parent::setIdPersona($idPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPersona', []);

        return parent::getIdPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTipo(\BufeteBundle\Entity\Tipocaso $idTipo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTipo', [$idTipo]);

        return parent::setIdTipo($idTipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTipo', []);

        return parent::getIdTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}

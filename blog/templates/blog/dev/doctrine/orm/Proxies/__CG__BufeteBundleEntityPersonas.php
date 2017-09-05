<?php

namespace Proxies\__CG__\BufeteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Personas extends \BufeteBundle\Entity\Personas implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'idPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'nombrePersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'telefonoPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'direccionPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'emailPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'usuarioPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'contrasenaPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'estadoPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'role', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'idBufete'];
        }

        return ['__isInitialized__', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'idPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'nombrePersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'telefonoPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'direccionPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'emailPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'usuarioPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'contrasenaPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'estadoPersona', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'role', '' . "\0" . 'BufeteBundle\\Entity\\Personas' . "\0" . 'idBufete'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Personas $proxy) {
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
    public function getIdPersona()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdPersona();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPersona', []);

        return parent::getIdPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombrePersona($nombrePersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombrePersona', [$nombrePersona]);

        return parent::setNombrePersona($nombrePersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombrePersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombrePersona', []);

        return parent::getNombrePersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefonoPersona($telefonoPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefonoPersona', [$telefonoPersona]);

        return parent::setTelefonoPersona($telefonoPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefonoPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefonoPersona', []);

        return parent::getTelefonoPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccionPersona($direccionPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccionPersona', [$direccionPersona]);

        return parent::setDireccionPersona($direccionPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccionPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccionPersona', []);

        return parent::getDireccionPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailPersona($emailPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailPersona', [$emailPersona]);

        return parent::setEmailPersona($emailPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailPersona', []);

        return parent::getEmailPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioPersona($usuarioPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioPersona', [$usuarioPersona]);

        return parent::setUsuarioPersona($usuarioPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioPersona', []);

        return parent::getUsuarioPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setContrasenaPersona($contrasenaPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContrasenaPersona', [$contrasenaPersona]);

        return parent::setContrasenaPersona($contrasenaPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getContrasenaPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrasenaPersona', []);

        return parent::getContrasenaPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadoPersona($estadoPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadoPersona', [$estadoPersona]);

        return parent::setEstadoPersona($estadoPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoPersona', []);

        return parent::getEstadoPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdBufete(\BufeteBundle\Entity\Bufetes $idBufete = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdBufete', [$idBufete]);

        return parent::setIdBufete($idBufete);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdBufete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdBufete', []);

        return parent::getIdBufete();
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
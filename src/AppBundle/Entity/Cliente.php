<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClienteRepository")
 */
class Cliente {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codcliente", type="integer")
     */
    private $codcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=80, nullable=true)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="altura", type="string", length=20, nullable=true)
     */
    private $altura;

    /**
     * @var int
     *
     * @ORM\Column(name="ruta", type="smallint", nullable=true)
     */
    private $ruta;

    /**
     * @var int
     *
     * @ORM\Column(name="folio", type="smallint", nullable=true)
     */
    private $folio;

    /**
     * @var string
     *
     * @ORM\Column(name="nromedidor", type="string", length=20)
     */
    private $nromedidor;

    /**
     * @var string
     *
     * @ORM\Column(name="partida", type="string", length=80)
     */
    private $partida;

    /**
     * @var int
     *
     * @ORM\Column(name="numSector", type="smallint")
     */
    private $numSector;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombreSector", type="string", length=80)
     */
    private $nombreSector;    

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Set codcliente
     *
     * @param integer $codcliente
     *
     * @return Cliente
     */
    public function setCodCliente($codcliente) {
        $this->codcliente = $codcliente;

        return $this;
    }
    
    /**
     * Get codcliente
     *
     * @return int
     */
    public function getCodCliente() {
        return $this->codcliente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Cliente
     */
    public function setCalle($calle) {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle() {
        return $this->calle;
    }

    /**
     * Set altura
     *
     * @param string $altura
     *
     * @return Cliente
     */
    public function setAltura($altura) {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return string
     */
    public function getAltura() {
        return $this->altura;
    }

    /**
     * Set ruta
     *
     * @param integer $ruta
     *
     * @return Cliente
     */
    public function setRuta($ruta) {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return int
     */
    public function getRuta() {
        return $this->ruta;
    }

    /**
     * Set folio
     *
     * @param integer $folio
     *
     * @return Cliente
     */
    public function setFolio($folio) {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get folio
     *
     * @return int
     */
    public function getFolio() {
        return $this->folio;
    }

    /**
     * Set nromedidor
     *
     * @param string $nromedidor
     *
     * @return Cliente
     */
    public function setNromedidor($nromedidor) {
        $this->nromedidor = $nromedidor;

        return $this;
    }

    /**
     * Get nromedidor
     *
     * @return string
     */
    public function getNromedidor() {
        return $this->nromedidor;
    }

    /**
     * Set partida
     *
     * @param string $partida
     *
     * @return Cliente
     */
    public function setPartida($partida) {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string
     */
    public function getPartida() {
        return $this->partida;
    }

    /**
     * Get NumSector
     *
     * @return int
     */
    public function getNumSector() {
        return $this->numSector;
    }

    /**
     * Get nombreSector
     *
     * @return string
     */
    public function getNombreSector() {
        return $this->nombreSector;
    }

    /**
     * Set numSector
     *
     * @param integer $numSector
     *
     * @return Cliente
     */
    public function setNumSector($numSector) {
        $this->numSector = $numSector;
    }
    
    /**
     * Set nombreSector
     *
     * @param string $nombreSector
     *
     * @return Cliente
     */
    public function setNombreSector($nombreSector) {
        $this->nombreSector = $nombreSector;
    }
}

<?php

class Ponuda implements JsonSerializable {
    private $id;
    private $naziv;
    private $cena;
    private $popust;
    private $tip_id;
    private $zemlja_id;
    private $duzina_putovanja;
    private $slika;

    public function __construct($id, $naziv, $cena, $popust, $tip_id, $zemlja_id, $duzina_putovanja, $slika) {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->cena = $cena;
        $this->popust = $popust;
        $this->tip_id = $tip_id;
        $this->zemlja_id = $zemlja_id;
        $this->duzina_putovanja = $duzina_putovanja;
        $this->slika = $slika;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNaziv() {
        return $this->naziv;
    }

    public function setNaziv($naziv) {
        $this->naziv = $naziv;
    }

    public function getCena() {
        return $this->cena;
    }

    public function setCena($cena) {
        $this->cena = $cena;
    }

    public function getPopust() {
        return $this->popust;
    }

    public function setPopust($popust) {
        $this->popust = $popust;
    }

    public function getTipId() {
        return $this->tip_id;
    }

    public function setTipId($tip_id) {
        $this->tip_id = $tip_id;
    }

    public function getZemljaId() {
        return $this->zemlja_id;
    }

    public function setZemljaId($zemlja_id) {
        $this->zemlja_id = $zemlja_id;
    }

    public function getDuzinaPutovanja() {
        return $this->duzina_putovanja;
    }

    public function setDuzinaPutovanja($duzina_putovanja) {
        $this->duzina_putovanja = $duzina_putovanja;
    }

    public function setSlika($slika)
    {
        $this->slika = $slika;
    }

    public function getSlika()
    {
        return $this->slika;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'naziv' => $this->naziv,
            'cena' => $this->cena,
            'popust' => $this->popust,
            'tip_id' => $this->tip_id,
            'zemlja_id' => $this->zemlja_id,
            'duzina_putovanja' => $this->duzina_putovanja,
            'slika' => $this->slika
        ];
    }
}

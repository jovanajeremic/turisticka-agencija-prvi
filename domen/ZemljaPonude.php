<?php

class ZemljaPonude implements JsonSerializable {
    private $id;
    private $nazivZemlje;

    public function __construct($id, $nazivZemlje) {
        $this->id = $id;
        $this->nazivZemlje = $nazivZemlje;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNazivZemlje() {
        return $this->nazivZemlje;
    }

    public function setNazivZemlje($nazivZemlje) {
        $this->nazivZemlje = $nazivZemlje;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'nazivZemlje' => $this->nazivZemlje
        ];
    }
}

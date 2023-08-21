<?php

class TipPutovanja implements JsonSerializable {
    private $id;
    private $tip;

    public function __construct($id, $tip) {
        $this->id = $id;
        $this->tip = $tip;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTip() {
        return $this->tip;
    }

    public function setTip($tip) {
        $this->tip = $tip;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'tip' => $this->tip
        ];
    }
}

<?php
class Programma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    /**
     * @param $liedje
     */
    public function voegLiedjeToe($liedje) {
        $this->liedjes[] = $liedje;
    }

    /**
     * Geeft programma liedjes terug
     * @return array
     */
    public function getLiedjes() {
        return $this->liedjes;
    }

    /**
     * Geeft programma informatie terug
     * @return array
     */
    public function getProgramma() {
        return array("naam" => $this->naam, "omschrijving" => $this->omschrijving);
    }

    /**
     * Geef het programma een naam
     * @param $naam string
     */
    public function setNaam($naam) {
        if (strlen($naam) >= 2) {
            $this->naam = $naam;
        }
    }

    /**
     * Geef het programma een omschrijving
     * @param $omschrijving string
     */
    public function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }

    /**
     * Geef de naam van het programma terug
     * @return string
     */
    public function getNaam() {
        return $this->naam;
    }

    /**
     * Geef de omschrijving van het programma terug
     * @return string
     */
    public function getOmschrijving() {
        return $this->omschrijving;
    }
}
?>
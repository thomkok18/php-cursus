<?php
class Auto {
    private $autoSoort;
    private $link;
    private $prijs;
    private $merk;

    /**
     * Auto constructor.
     * @param $autoSoort
     */
    function __construct($autoSoort, $link, $prijs, $merk) {
        $this->autoSoort = $autoSoort;
        $this->link = $link;
        $this->prijs = $prijs;
        $this->merk = $merk;
    }

    /**
     * Geef de titel van het liedje terug
     * @return mixed
     */
    public function getAuto() {
        return $this->autoSoort;
    }

    /**
     * @return mixed
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getPrijs() {
        return $this->prijs;
    }

    /**
     * @return mixed
     */
    public function getMerk() {
        return $this->merk;
    }
}
?>
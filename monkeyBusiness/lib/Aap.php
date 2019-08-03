<?php
class Aap {
    private $aapSoort;
    private $link;

    /**
     * Aap constructor.
     * @param $aapSoort
     */
    function __construct($aapSoort, $link) {
        $this->aapSoort = $aapSoort;
        $this->link = $link;
    }

    /**
     * Geef de titel van het liedje terug
     * @return mixed
     */
    public function getAap() {
        return $this->aapSoort;
    }

    /**
     * @return mixed
     */
    public function getLink() {
        return $this->link;
    }
}
?>
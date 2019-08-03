<?php
class Liedje {
    private $titel;
    private $artiest;

    /**
     * Liedje constructor.
     * @param $titel
     * @param $artiest
     */
    function __construct($titel, $artiest) {
        $this->titel = $titel;
        $this->artiest = $artiest;
    }

    /**
     * Geef de titel van het liedje terug
     * @return mixed
     */
    public function getTitel() {
        return $this->titel;
    }

    /**
     * Geef het liedje een titel
     * @param mixed $titel
     */
    public function setTitel($titel) {
        $this->titel = $titel;
    }

    /**
     * Geef de artiest van het liedje terug
     * @return mixed
     */
    public function getArtiest() {
        return $this->artiest;
    }

    /**
     * Geef het liedje een artiest
     * @param mixed $artiest
     */
    public function setArtiest($artiest) {
        $this->artiest = $artiest;
    }
}
?>
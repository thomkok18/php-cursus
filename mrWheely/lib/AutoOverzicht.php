<?php
class AutoOverzicht {
    public $autos = array();

    /**
     * @param $autoSoort
     */
    function voegAutoToe($autos) {
        $this->autos[] = $autos;
    }

    /**
     * @return array
     */
    public function getAutoSoort() {
        return $this->autos;
    }
}
?>
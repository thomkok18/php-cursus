<?php
class AapOverzicht {
    public $apen = array();

    /**
     * @param $aapSoort
     */
    function voegAapToe($apen) {
        $this->apen[] = $apen;
    }

    /**
     * @return array
     */
    public function getAapSoort() {
        sort($this->apen);
        return $this->apen;
    }
}
?>
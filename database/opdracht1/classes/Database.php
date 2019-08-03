<?php
/**
 * Created by PhpStorm.
 * User: Ton van Beuningen
 * Date: 11-05-17
 * Time: 16:10
 *
 * De klasse Database maakt een persistente verbinding met de database en stuurt
 * er queries in de vorm van een string naar toe. Vervolgens ontvangt de klasse
 * een resultset en stuurt deze terug naar de oproepende instantie of stuurt een
 * string terug met het gevraagde gegeven.
 */
class Database {
    private $db;
    private $error;

    /**
     * Constructor van de klasse Database, waarin de verbinding met de database
     * tot stand komt of een exceptie wordt gegenereerd.
     *
     * De verbinding is persistent, dat wil zeggen dat een nieuwe aanvraag om een
     * verbinding met dezelfde gegevens gebruik maakt van deze verbinding en er geen
     * nieuwe verbinding wordt gemaakt.
     *
     * @param geen
     * @return geen
     * @throws Exception als verbinding met de database niet tot stand komt.
     */
    function __construct() {
        $error = null;
        try {
            $this->db = new PDO('mysql:host=127.0.0.1; dbname=sportvereniging', 'root', 'root', array(PDO::ATTR_PERSISTENT => true));
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //SQL maakt gebruik via PDO van try en catch in PHP
        } catch (Exception $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * getDb: geeft de verbinding met een database terug.
     *
     * @param geen
     * @return PDO
     */
    function getDb() {
        return $this->db;
    }

    /**
     *closeDb: sluit de verbinding met de database.
     *
     * @param geen
     * @Return geen
     */
    function closeDb() {
        $this->db = null;
    }

    /**
     * getError geeft een string terug, waarin de laatste fout staat die is opgetreden
     * of null als er geen fout is opgetreden.
     *
     * @param geen
     * @return string: De laatste fout die is opgetreden
     */
    function getError() {
        return  $this->error;
    }

    /**
     * getAantal stuurt een query in de vorm van een string naar
     * de database en krijgt een resulset terug. Uit de resultset wordt
     * het aantal leden in de vorm van een string gehaald en deze wordt teruggegeven
     * aan de oproepende instantie.
     *
     * @param $id: Het id van een commissie in de database
     * @return string: Het aantal leden van de commissie
     */
    function getAantal($id) {
        $sql = "select count(*) as 'Aantal leden'
				from lid 
				inner join lidcommissie using (idLid)
				inner join commissie using (idCommissie)
				where idCommissie ='$id'";

        $result = $this->db->query($sql);
        return $result->fetchColumn(0);
    }

    /**
     * getLeden stuurt een query in de vorm van een string naar
     * de database en krijgt een resulset terug. Deze resultset wordt teruggegeven
     * aan de oproepende instantie.
     *
     * @param $id: Het id van een commissie in de database
     * @return PDOStatement: Resultset met de namen en de telefoonnummers van de leden
     */
    function getLeden($id) {
        $sql = "select concat_ws(' ', voorletters, tussenvoegsels, achternaam) as naam, telefoonnummer
            from lid
            inner join lidcommissie using (idLid)
            inner join commissie using (idCommissie)
            where idCommissie = '$id'";

        return $this->db->query($sql);
    }

    /**
     * getCommissies stuurt een query in de vorm van een string naar
     * de database en krijgt een resulset terug. Deze resultset wordt teruggegeven
     * aan de oproepende instantie.
     *
     * @return PDOStatement: Resultset met de ids en namen van de commissies
     */
    function getCommissies() {
        $sql = "select idCommissie, commissienaam from commissie";
        return $this->db->query($sql);
    }

    /**
     * getCommissienaam stuurt een query in de vorm van een string naar
     * de database en krijgt een resulset terug. Uit deze resultset wordt de naam
     * van de gevraagde commissie gehaald en in de vorm van een string
     * teruggegeven aan de oproepende instantie.
     *
     * @param $id: Het id van een commissie in de database
     * @return string: De naam van de commissie
     */
    function getCommissienaam($id) {
        $sql = "select commissienaam from commissie where idCommissie = '$id'";
        $result = $this->db->query($sql);
        return $result->fetchColumn(0);
    }
}
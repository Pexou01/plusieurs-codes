<?php
/**
 * Connexion.php : une bibliotheque
 *
 * seConnecter() (a partir d'un fichier ini)
 * seDeconnecter()
 */

/**
 *
 * @param type $psCheminParametresConnexion
 * @return null
 */
function seConnecter($psCheminParametresConnexion) {

    $tProprietes = parse_ini_file($psCheminParametresConnexion);

    $lsProtocole = $tProprietes["protocole"];
    $lsServeur = $tProprietes["serveur"];
    $lsPort = $tProprietes["port"];
    $lsUT = $tProprietes["ut"];
    $lsMDP = $tProprietes["mdp"];
    $lsBD = $tProprietes["bd"];

    /*
     * Connexion
     */
    $lcnx = null;
    try {
        $lcnx = new PDO("$lsProtocole:host=$lsServeur;port=$lsPort;dbname=$lsBD;", $lsUT, $lsMDP);
        $lcnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $lcnx->setAttribute(PDO::ATTR_AUTOCOMMIT, true);
        $lcnx->exec("SET NAMES 'UTF8'");
    } catch (Exception $ex) {
        $lcnx = null;
        echo "<br>" . $ex->getMessage();
    }
    return $lcnx;
}

/**
 *
 * @param PDO $pcnx
 */
function seDeconnecter(PDO &$pcnx) {
    $pcnx = null;
}
?>
<?php
/**
 * Transaxion.php : une bibliotheque
 * initialiser()
 * valider()
 * annuler()
 */

/**
 *
 * @param PDO $pcnx
 */
function initialiser(PDO &$pcnx) {
    $lbOK = true;
    try {
        $pcnx->beginTransaction();
    } catch (Exception $ex) {
        $lbOK = false;
    }
    return $lbOK;
}

/**
 *
 * @param PDO $pcnx
 */
function valider(PDO &$pcnx) {
    $lbOK = true;
    try {
        $pcnx->commit();
    } catch (Exception $ex) {
        $lbOK = false;
    }
    return $lbOK;
}

/**
 *
 * @param PDO $pcnx
 */
function annuler(PDO &$pcnx) {
    $lbOK = true;
    try {
        $pcnx->rollBack();
    } catch (Exception $ex) {
        $lbOK = false;
    }
    return $lbOK;
}
?>
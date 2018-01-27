<?php

/*
  ArticleRubriqueDAO.php
 */
/*
  LE DAO de la table [ArticleRubrique] de la BD [5Minutes]
 */
require_once 'ArticleRubriqueDTO.php';

class ArticleRubriqueDAO {

    private $pdo;

    /**
     * 
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * 
     * @return null
     */
    public function selectAll() {
        // Déclaration d'un tableau
        $liste = array();
        try {
            // SELECTION DE LA TABLE ArticleRubrique avec toute ces valeur
            $sql = 'SELECT * FROM membre.dvd';
            // Exécution de la requete SQL : le résultat dans un curseur
            $lrs = $this->pdo->query($sql);
            $lrs->setFetchMode(PDO::FETCH_ASSOC);
            // Boucle sur le curseur
            while ($enr = $lrs->fetch()) {
                // Création d'un objet
                $objet = new ArticleRubriqueDTO();
                // Valorise les attributs d el'objet
                $objet->setIdArticle($enr['nom']);
                $objet->setIdRubrique($enr['premon']);
                // Ajout l'objet au tableau
                $liste[] = $objet;
            }
        } catch (PDOException $e) {
            $objet = null;
            $liste[] = $objet;
        }
        return $liste;
    }


}

/* DTO = table
 * attribut = colonne
 * methode
 * dao utilise un DTO
 * DAO = commande SQL dans un code php
 *       insert
 *       select
 *       delete
 *       update 
 */
?>

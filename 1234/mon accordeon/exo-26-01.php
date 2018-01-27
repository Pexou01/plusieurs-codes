<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Mon Accordeon</title>

 <!-- APPEL DES FICHIER JQUERY-UI.CSS + JQUERY.JS + JQUERY-UI.JS -->

    <link href="../lib/jquery/ui/jquery-ui.css" rel="stylesheet" type="text/css" />

    <script src="../lib/jquery/jquery.js"></script>

    <script src="../lib/jquery/ui/jquery-ui.js"></script>
 
    <script>
    // ------------
    function init() {
        // --- La balise qui sert d'en-tete de soufflet
        $("#accordeon").accordion({ header:"h5"  });
    }
    
    $(document).ready(init);
</script>
<script>
// Style css juste en dessous sur le contenue du soufflet
</script>
<style type="text/css">
   .soufflet, contenuSoufflet{margin:0; padding:0;}
   .contenuSoufflet ul{list-style-type:none; color:black;}
</style>
</head>


<!-- Creation d'un souflet statique avec obligatoirment des ul et des li et des h1 ou h2 etc... pour les H -->
<body>
    <!-- /div soufflet 1 AVEC APPEL DE JQUERY UI-->
<div id="centre">
    <h3>ACCORDEON</h3>
    <div id="accordeon">
        <div class="soufflet">
            <h5><a href="#">Membres</a></h5>
            <div class="contenuSoufflet">
                <ul>
                    <li>Dupont Frédéric</li>
                    <li>Dupont Zoe</li>
                    <li>Dupont Lysa</li>
                </ul>
            </div>
        </div>
  <!-- /div soufflet 2 AVEC APPEL DE JQUERY UI-->
        <div class="soufflet" >
            <h5><a href="#" id='1'>Passion</a></h5>
            <div class="contenuSoufflet">
                <ul>
                    <li>Internet</li>
                    <li>Youtube</li>
                    <li>Les licorne</li>
                </ul>
            </div>
        </div>
           <!-- /div soufflet 3  AVEC APPEL DE JQUERY UI-->
             <div class="soufflet">
            <h5><a href="#">Adresse</a></h5>
            <div class="contenuSoufflet">
                <ul>
                    <li>95300 Pontoise</li>
                    <li>95300 Pontoise</li>
                    <li>95300 Pontoise</li>
                </ul>
            </div>
        </div> <!-- FIN DE div soufflet -->
    </div> <!-- FIN div accordeon -->

</div> <!-- FIN DE div centre -->
</body>
</html>
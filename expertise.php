
<?php
/*appeler les apirest pour obtenir le nom de l'expertise
get....
/*<div  class=\"row\"; style:\"justify-content-center\"><h3 style=\"color:#002266;\">".//$expertise[0]->nomExpertiseFR."</h3></div>*/

$expertise = json_decode(file_get_contents("https://dev.cic-it-bordeaux.fr/API_TEST/API/expertise/1"));
$expert = json_decode(file_get_contents("https://dev.cic-it-bordeaux.fr/API_TEST/API/expert/1"));
//echo $expertise[0]->nomExpertiseFR;//teste:OK
//echo $expert[0]->nom
echo"
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>";


echo"
<!-- nouvelle mise en forme du cartouche   (resssemble au boostrap) -->
<div class=\"container-fluid\" style=\"background-color:rgba(204,255,204, 0.4); margin-top:-40px;margin-left:10%;\">

<div class=\"col\">
<div  class=\"row\"; style:\"justify-content-center\"><h3 style=\"color:#002266;\">".$expertise[0]->nomExpertiseFR."</h3></div>
</div>

<div class=\"col\">
<div  class=\"row\" style=\"justify\"><h4>Expert:</h4><br><h5><a href=\"../HTML/SamanthaDelmond.php\">".$expert[0]->nom." ".$expert[0]->prenom."</a></h5><br></div></div>
<div class=\"col\">
<div  class=\"row style=\"justify\"><h4>Consultant</h4><h5><a href=\"../HTML/LionelCouraud.php\">Lionel Couraud</h5></a><br>
</div></div>
</div>
";

?>



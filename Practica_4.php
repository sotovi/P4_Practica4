<html>
<head></head>
<body>


<?php




	$pais=array();
	$paises["Mexico"]=array("Guadalajara","Sinaloa","Veracruz","Chiapas","Oaxaca");
	$paises["Argentina"]=array("San Juan","Santa fe","Salta","Mar de Palta","Tucuman");
	$paises["El Salvador"]=array("Ahuachapan","Soyapango","Chalatenango","Cuscatlan","Morazan");
	$paises["Canada"]=array("Quebec","Toronto","Ottawa","Montreal","Calgary");
	$paises["Brasil"]=array("Rio de Janeiro","Fortaleza","Brasilia","Manaus","Recife");
	$paises["Dinamarca"]=array("Copenhague","Aarhus","Aalborg","Randers","Odense");
	$paises["Gran Bretaña"]=array("Londres","Manchester","Liverpool","Leeds","Sheffield");
	$paises["Italia"]=array("Roma","Milan","Napoles","Turin","Palermo");
	$paises["Suiza"]=array("Zurich","Ginebra","Berna","Basilea","Lucerna");
	$paises["Turquia"]=array("Estambul","Ankara","Izmir","Bursa","Adana");


	foreach($paises as $nombre=>$ciudad){
		echo "<ul>";

		echo "<li>".$nombre."</li><br>";
			
		echo	"<ol>";
		
		for($i=0;$i<count($paises[$nombre]);$i++){
			
			echo " <li>".$paises[$nombre][$i]."</li>";
	}



		echo "</ol>";

		echo "</ul>";
	}
?>


</body>
</html>


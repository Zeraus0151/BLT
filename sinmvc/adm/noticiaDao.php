<?php
class noticiaDao{
		public function inserir($fecha_creacion,$titulo,$descripcion){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "INSERT INTO noticias(fecha_creacion,titulo,descripcion) VALUES('$fecha_creacion','$titulo','$descripcion')";
			mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
		}
		public function mostrar(){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "SELECT * FROM noticias ";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			if ($result->num_rows > 0) {
				//
				while($row = $result->fetch_assoc()) {
					$id = $row["idnoticias"];
					echo"<div style='background-color:white;height:50px;'>
							<div class='col-sm-3' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["fecha_creacion"]."</div>
							<div class='col-sm-3' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["titulo"]."</div>
							<div class='col-sm-3'style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>1.jpg</div>
							<div class='col-sm-2'style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".substr($row["descripcion"],0,20)."</div>
							<div class='col-sm-1' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><a href=''>X</a><a href=editarNews.php?id=".$row["idnoticias"].">Editar</a></div></div>";
				}
			} else {
				echo "0 results";
			}
		}
}

<?php
class imagenDao{
		public function inserir($fecha_creacion,$descripcion,$nombre){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "INSERT INTO imagenes(fecha_creacion,descripcionn,nombre) VALUES('$fecha_creacion','$descripcion','$nombre')";
			mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
		}
		public function mostrar(){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "SELECT * FROM imagenes";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			if ($result->num_rows > 0) {
				//
				while($row = $result->fetch_assoc()) {
					//$id = $row["noticias_idnoticias"];
					echo"<div style='background-color:white;height:50px;'>
							<div class='col-sm-3' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["fecha_creacion"]."</div>
							<div class='col-sm-3' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["descripcionn"]."</div>
							<div class='col-sm-3'style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["noticias_idnoticias"]."</div>
							<div class='col-sm-2'style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".substr($row["nombre"],0,16)."</div>
							<div class='col-sm-1' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><a href='eliminarImgs.php?id=".$row["idimagenes"]."'>X</a><a href=editarImages.php?id=".$row["idimagenes"].">Editar</a></div></div>";
				}
			} else {
				echo "0 results";
			}
		}
		public function eliminar($id){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "DELETE FROM imagenes WHERE idimagenes='$id';";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			header("location:images.php");
		}
}

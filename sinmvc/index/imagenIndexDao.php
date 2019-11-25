<?php
class imagenIndexDao{
		public function jssor(){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "SELECT * FROM imagenes WHERE descripcionn ='jssor'";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			if ($result->num_rows > 0) {
				//
				while($row = $result->fetch_assoc()) {
					//$id = $row["noticias_idnoticias"];
					echo"<div>
							<img data-u='image' src='".$row["nombre"]."'/>
						</div>";
				}
			} else {
				echo "0 results";
			}
		}
}

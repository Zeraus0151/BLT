<?php
class juegoIndexDao{
		public function mostrar(){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "SELECT * FROM juegos ";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			if ($result->num_rows > 0) {
				//
				while($row = $result->fetch_assoc()) {
					echo"<div class='col-lg-4 col-sm-6 nnn'>
						<div>
							<div>
								<a href='view-game.php?id=".$row["idjuegos"]."'><img src='".$row["capa"]."' width='100%'/></a>
							</div>
							<div>
								<div>
									<a href='view-game.php?id=".$row["idjuegos"]."'><h3 style='font-size:20px;font-weight:bold;font-family:'Roboto', sans-serif;'>".$row["nombree"]."</h3></a>
									<p style='color:#9a9a9a;font-family:Roboto, sans-serif;'>".substr($row["descripcion"],0,100)."</p>
									<p style='color:#9a9a9a;font-family:Roboto, sans-serif;'>".$row["distribuidora"]." - ".$row["lanzamiento"]."</p>
								</div>
							</div>
						</div>
					</div>";
				}
			} else {
				echo "0 results";
			}
		}
}

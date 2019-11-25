<?php
class noticiaIndexDao{
		public function noticia(){
			$aux=0;
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "SELECT * FROM noticias AS n INNER JOIN  imagenes as i ON i.noticias_idnoticias = n.idnoticias WHERE idnoticias = noticias_idnoticias;";
			$result2 = mysqli_query($conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			if ($result2->num_rows > 0) {}else{echo"no tiene imagen la noticia";die;}
				while($row = $result2->fetch_assoc()) {
					$id = $row["idnoticias"];
					if($id===$aux)
					{
						break;
					}
					echo"<div class='col-lg-8 col-lg-offset-2' style='heigth:500px;'>
							<div class='news-bottom'>
								<div class='foto-news'>
									<a href='news.php?id=".$row["idnoticias"]."'><img src=".$row["nombre"]." style='width:100%;height:100%;'></a>
								</div>
								<div class='items-news'>
									<a href='news.php?id=".$row["idnoticias"]."' class='item-news-h1'><h3 class='item-news-h1'>".$row["titulo"]."</h3></a>
									<p class='item-news-p'>".substr($row["descripcion"],0,250)."</p>
									<a href='news.php?id=".$row["idnoticias"]."' class='news-link'>VER NOTICIA</a>
								</div>
							</div>
						</div>";
						$aux = $row["idnoticias"];
				}
		}
}

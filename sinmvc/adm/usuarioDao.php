<?php
class usuarioDao{
		public function inserir($fecha_ingreso,$tipo,$nombre,$saldo,$estado){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "INSERT INTO usuarios(fecha_ingreso,tipo,nombre,saldo,estado) VALUES('$fecha_ingreso','$tipo','$nombre','$saldo','$estado')";
			mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
		}
		public function inserirAdm($nombre,$pass,$sesion){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "UPDATE usuarios SET nombre = '$nombre', pass = '$pass' WHERE idusuarios = '$sesion'";
			mysqli_query( $conn, $sql) or die ('qweweqUnable to execute query. '.mysqli_error($conn));
		}
		public function buscar(){
			$result=array();
			$stmt=$this->con->prepare("SELECT * FROM usuarios");
			$stmt->execute();
			while($resultado=$stmt->fetch())
			{
				$t=new usuario();
				$t->setid($resultado["idusuario"]);
				$t->setid($resultado["fecha_ingreso"]);
				$t->setid($resultado["tipo"]);
				$t->setnombre($resultado["nombre"]);
				$t->setsaldo($resultado["saldo"]);
				$t->setestado($resultado["estado"]);
				$t->setpass($resultado["pass"]);
				$t->setsobre($resultado["sobremi"]);
				$result[]=$t;
			}
			return $result;
		}
		public function mostrar(){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "SELECT * FROM usuarios ";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			if ($result->num_rows > 0) {
				//
				while($row = $result->fetch_assoc()) {
					$id = $row["idusuarios"];
					//echo'<a href=editUsers.php?id='.$row["idusuarios"].'>editar</a>';die;
					//no estoy seguro de como agarrar el id del boton,
					//no se si por el value se puede agarrar
					echo"<div style='background-color:white;height:50px;'>
							<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["fecha_ingreso"]."</div>
							<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["tipo"]."</div>
							<div class='col-sm-2'style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["nombre"]."</div>
							<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["saldo"]."</div>
							<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'>".$row["estado"]."</div>
							<div class='col-sm-2' style='float:left;paddin-left:10px;color:grey;padding-top:11px;font-size:20px;'><a href='eliminarUsers.php?id=".$row["idusuarios"]."'>X</a><a href=editarUsers.php?id=".$row["idusuarios"].">Editar</a></div></div>";
				}
			} else {
				echo "0 results";
			}
		}
		public function eliminar($id){
			$conn = mysqli_connect("localhost","root","","dawii");
			$sql = "DELETE FROM usuarios WHERE idusuarios='$id';";
			$result = mysqli_query( $conn, $sql) or die ('Unable to execute query. '.mysqli_error($conn));
			header("location:users.php");
		}
}

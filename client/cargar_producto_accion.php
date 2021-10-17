<?php 
	include "..\server\conexion.php";
	$contar = $con->query("SELECT COUNT(id) as total FROM productos");
	$data=mysqli_fetch_assoc($contar);
	$data1=$data['total']+1;
    $nombre = $_REQUEST["nombre"];
    $precio = $_REQUEST["precio"];
    $categoria = $_REQUEST["categoria"];
    $desc = $_REQUEST["descripcion"];
	$targetDir = "uploads/";
	$fileName = basename($_FILES["file"]["name"]);
	$fileName=$data1.$fileName;
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	
	if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
		// Allow certain file formats
		$allowTypes = array('jpg','png','jpeg','gif','pdf');
		if (!file_exists($targetFilePath)) {
			if(in_array($fileType, $allowTypes)){
					// Upload file to server
				if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
					// Insert image file name into database
					//$sql = "INSERT INTO `productos` (`nombre`, `que_es`, `precio`, `descripcion`, `img`) VALUES ('$nombre','$categoria','$precio','$desc','$fileName')";
					//echo $sql;
					//mysqli_query($con, $sql);  
					
					$insert = $con->query("INSERT INTO `productos` (`nombre`, `que_es`, `precio`, `descripcion`, `img`) VALUES ('$nombre','$categoria','$precio','$desc','uploads/$fileName')");
				}
			}
		}
	}
	echo '<script language="javascript">alert("Cargado con exito");window.location.href="cargar_producto.php"</script>';

<?php 


	include "..\server\conexion.php";

	/* echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>"; */

    $nombre = $_REQUEST["nombre"];
    $precio = $_REQUEST["precio"];
    $categoria = $_REQUEST["categoria"];
    $desc = $_REQUEST["descripcion"];

    $target = "imagenes/".basename($_FILES['image']['name']);
	$img_name = $_FILES['image']['name'];
	// $img_size = $_FILES['image']['size'];
	// $tmp_name = $_FILES['image']['tmp_name'];

    $sql = "INSERT INTO `productos` (`nombre`, `que_es`, `precio`, `descripcion`, `img`) VALUES ($nombre,$categoria,$precio,$desc,$img_name)";
    mysqli_query($con, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg="Subido correctamente";
	} else {
		$msg="Error al subir";
	};
	
		/* if ($img_size > 125000) {
			$em = "El archivo es demasiado grande";
		    header("Location: ..\client\cargar_producto.html?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				
			}else {
				$em = "No puedes subir archivos de este tipo";
		        header("Location: ..\client\cargar_producto.html?error=$em");
			}
		} */
	

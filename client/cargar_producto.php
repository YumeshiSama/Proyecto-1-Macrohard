<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../Bootstrap/js/jquery.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cargar Producto - El Enchiridion</title>
      </head>
    <body>
      <div class="container">
      <div id="navbar"></div>
        <form action="cargar_producto_accion.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Producto">
              </div>
            </div>
            <div class="form-group row">
              <label for="Precio" class="col-sm-2 col-form-label">Precio</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio del producto">
              </div>
            </div>
            <fieldset id="categoria" name="categoria" class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Categoria</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="categoria" id="categoria1" value="2" checked>
                    <label class="form-check-label" for="categoria1">
                      Ropa
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="categoria" id="categoria2" value="1">
                    <label class="form-check-label" for="categoria2">
                      Comic
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="categoria" id="categoria3" value="3">
                    <label class="form-check-label" for="categoria3">
                      Manga
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="categoria" id="categoria4" value="4">
                    <label class="form-check-label" for="categoria1">
                      Juguete
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del Producto">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Imagen</label>
              <div class="col-sm-10">
                <input type="file" name="file">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Cargar</button>
              </div>
            </div>
          </form>
          <div id="pie"></div>
          </div>

          <script src="navbar.js"></script>
    </body>
</html>
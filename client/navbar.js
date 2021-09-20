const navbar = document.getElementById("navbar")
const pie = document.getElementById("pie")

pintarNavbar = () => {
    navbar.innerHTML = `<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <a class="navbar-brand" href="front.html">El Enchiridion!</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="comics.html">Comics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mangas.html">Mangas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="juguetes.html">Juguetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ropa.html">Ropa</a>
        </li>
      </ul>
      <form action="resultado.php" method="GET" class="form-inline my-2 my-lg-0">
        <input id="busqueda" name="busqueda" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button></form>
    </div>
    </nav>`
}
pintarNavbar()

pintarPie = () => {
  pie.innerHTML = `<footer class="container">
        <p class="float-right"><a href="#">Volver arriba</a></p>
        <p>&copy; 2021-2022 El Enchiridion SRL. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
      </footer>`
}
pintarPie()
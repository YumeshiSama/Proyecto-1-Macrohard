const cartas = document.getElementById('cartas')
const items = document.getElementById("items")
const footer = document.getElementById("footer")
const templateCard = document.getElementById('template-card').content
const templateFooter = document.getElementById("template-footer").content
const templateCarrito = document.getElementById("template-carrito").content
const fragmento = document.createDocumentFragment()
var bandera = false
let carrito = {}

document.addEventListener('DOMContentLoaded', () => {
retrieveDataAsync()
if(localStorage.getItem('carrito')) {
  carrito = JSON.parse(localStorage.getItem('carrito'))
  pintarCarrito()
}
})

cartas.addEventListener("click", e => {
  agregarCarrito(e)
})

items.addEventListener("click", e => {
  btnAccion(e)
})

const retrieveDataAsync = async () => {
    try {
      const resData = await fetch('http://localhost/github/proyecto-1-macrohard/server/productos')
      const data = await resData.json()
      printCards(data)
    } catch (error) {
      console.log(error);
    }
  }

const printCards = data => {
  data.forEach(producto => {
    if (producto.nombre.includes(busqueda)){
      bandera=true
    }
  })
  data.forEach(producto => { 
    if (producto.tipo === document.querySelector("body").id) {
    templateCard.querySelector('h5').textContent = producto.nombre
    templateCard.querySelector('p').textContent = producto.precio
    templateCard.querySelector('img').setAttribute('src', producto.img)
    templateCard.querySelector('img').setAttribute('width', '100px')
    templateCard.querySelector('.btn-dark').dataset.id = producto.id
    const clone = templateCard.cloneNode(true)
    fragmento.appendChild(clone)
    }else if (document.querySelector("body").id === "busqueda"){
      if (producto.nombre.includes(busqueda)){
        templateCard.querySelector('h5').textContent = producto.nombre
        templateCard.querySelector('p').textContent = producto.precio
        templateCard.querySelector('img').setAttribute('src', producto.img)
        templateCard.querySelector('img').setAttribute('width', '100px')
        templateCard.querySelector('.btn-dark').dataset.id = producto.id
        const clone = templateCard.cloneNode(true)
        fragmento.appendChild(clone)
      }
      if (bandera === false){
        cartas.innerHTML='<H1>Lo lamento, pero no encontramos nada relacionado con tu busqueda</h1>'
      }
    } 
  })
  cartas.appendChild(fragmento)
}


const agregarCarrito = e => {
  if (e.target.classList.contains("btn-dark")) {
    modifCarrito(e.target.parentElement)
  }
  e.stopPropagation()
}
const modifCarrito = objeto => {
  const producto = {
    id: objeto.querySelector(".btn-dark").dataset.id,
    nombre: objeto.querySelector("h5").textContent,
    precio: objeto.querySelector("p").textContent,
    cantidad: 1
  }
  if(carrito.hasOwnProperty(producto.id)) {
    producto.cantidad = carrito[producto.id].cantidad + 1
    }
  
    carrito[producto.id] = {...producto}
    pintarCarrito()

}

const pintarCarrito = () => {
  items.innerHTML = ""
  Object.values(carrito).forEach(producto => {
    templateCarrito.querySelector("th").textContent = producto.id
    templateCarrito.querySelectorAll("td")[0].textContent = producto.nombre
    templateCarrito.querySelectorAll("td")[1].textContent = producto.cantidad
    templateCarrito.querySelector(".btn-info").dataset.id = producto.id
    templateCarrito.querySelector(".btn-danger").dataset.id = producto.id
    templateCarrito.querySelector("span").textContent = producto.cantidad * producto.precio
    const clone = templateCarrito.cloneNode(true)
    fragmento.appendChild(clone)
  })
  items.appendChild(fragmento)
  pintarFooter()
  localStorage.setItem('carrito', JSON.stringify(carrito))
}
const pintarFooter = () => {
  footer.innerHTML = ""
  if (Object.keys(carrito).length === 0) {
    footer.innerHTML = '<th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>'
    return
  }
    const nCantidad = Object.values(carrito).reduce((acc, {cantidad}) => acc + cantidad,0)
    const nPrecio = Object.values(carrito).reduce((acc, {cantidad, precio}) => acc + cantidad * precio,0)
    templateFooter.querySelectorAll("td")[0].textContent = nCantidad
    templateFooter.querySelector("span").textContent = nPrecio
    const clone = templateFooter.cloneNode(true)
    fragmento.appendChild(clone)
    footer.appendChild(fragmento)

    const btnVaciar = document.getElementById("vaciar-carrito")
    btnVaciar.addEventListener('click', () => {
      carrito = {}
      pintarCarrito()    
    })
}
const btnAccion = e => {
  if (e.target.classList.contains("btn-info")) {
    const producto = carrito[e.target.dataset.id]
    producto.cantidad++
    carrito[e.target.dataset.id] = {...producto}
    pintarCarrito() 
  }
  if (e.target.classList.contains("btn-danger")) {
    const producto = carrito[e.target.dataset.id]
    producto.cantidad--
    if(producto.cantidad === 0) {
      delete carrito[e.target.dataset.id]
    }
    pintarCarrito() 
  }
  e.stopPropagation()
}
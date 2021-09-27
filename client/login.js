const boton = document.getElementById("submit")

boton.addEventListener("click", e => {
    e.preventDefault()
    const username = document.getElementById("username").value
    const pass = document.getElementById("password").value
    retrieveDataAsync(username,pass)
  })

  const retrieveDataAsync = async (username,pass) => {
    try {
      const resData = await fetch('http://localhost/github/proyecto-1-macrohard/server/usuarios')
      const data = await resData.json()
      comprobacion(data,username,pass)
    } catch (error) {
      console.log(error);
    }
  }
  const comprobacion = (data,username,pass) =>{
    data.forEach(usuario => {
      if ((username == usuario.user) & (pass == usuario.password)) {
        console.log("SI")
      } else {
        console.log("NO")
      }
    });
  }
const u = document.getElementById("user")
const p = document.getElementById("password")
const par = document.getElementById("war")
const formulario=m = document.getElementById("form")


formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let enter = false
    let contra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,18})/;
    par.innerHTML=""


    if(usuario.value.length < 8){
        warning += `El nombre de usuario no es valido <br>`
        enter = true
    }

    if(!contra.test(p.value)) {
        warning += `La contraseña debe ser superior a 8 carateres, tambien debe contener al menos un número y un carácter especial <br>`
        enter = true
    }

    if(enter){
        par.innerHTML = warning;
    } else{
        location.href = "/adm"
    }

})

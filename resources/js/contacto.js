const nombre = document.getElementById("name")
const mail = document.getElementById("mail")
const par = document.getElementById("war")
const formulario=m = document.getElementById("form-cont")


formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let enter = false
    let regexEmail= /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    par.innerHTML=""


    if(nombre.value.length < 3){
        warning += `El nombre de usuario no es valido <br>`
        enter = true
    }

    if(!regexEmail.test (mail.value)){
        warning += `El correo electronico no es valido <br>`
        enter = true
    }

    if(enter){
        par.innerHTML = warning;
    } else{
        location.href = "crud.php"
    }

})

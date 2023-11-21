const nombre = document.querySelector("[name='Nombre']")
const password = document.getElementById("password")
const validacion = document.querySelector("[name='Validación']")
const par = document.getElementById("warnings")
const formulario = document.getElementById("form")

formulario.addEventListener("submit", e=>{
    let warning = ""
    let enter = false
    let contra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,18})/;
    let regexNombre = /^[a-zA-Z0-9]+$/;
    par.innerHTML=""

    if(!regexNombre.test(nombre.value)){
        warning += `El nombre de usuario solo puede contener letras y números <br>`
        enter = true
    }

    if(!contra.test(password.value)) {
        warning += `La contraseña debe ser superior a 8 carateres, tambien debe contener al menos un número y un carácter especial <br>`
        enter = true
    }

    if(password.value !== validacion.value) {
        warning += `Las contraseñas no coinciden <br>`
        enter = true
    }

    if(enter){
        // Evitar el envío del formulario si la validación falla
        e.preventDefault();
        par.innerHTML = warning;
    } else{
        // Enviar los datos del formulario al servidor usando fetch
        const formData = new FormData(formulario);
        fetch("/user", {
          method: "POST",
          body: formData,
        })
          .then((response) => {
            // Procesar la respuesta del servidor
            console.log(response);
            // Redirigir al usuario a otra página
            location.href = "/adm"
          })
          .catch((error) => {
            // Manejar los posibles errores
            console.error(error);
          });
    }

})

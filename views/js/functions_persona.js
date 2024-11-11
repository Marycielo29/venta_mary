async function registrarPersona() {
    let nroIdentidad = document.getElementById('nroIdentidad').value;
    let razonSocial = document.querySelector('#razonSocial').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codigoPostal = document.querySelector('#codigoPostal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fechaRegistro = document.querySelector('#fechaRegistro').value;

    if (nroIdentidad=="" || razonSocial=="" || telefono=="" || correo=="" || departamento=="" || provincia=="" || distrito=="" || codigoPostal=="" || direccion=="" 
        || rol=="" || password=="" || estado=="" || fechaRegistro=="") {
        alert("Error, campos vacios");
        return; 
    }

    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);

        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', { //await es una promesa que si o si espera una respuesta
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        json = await respuesta.json();
        if(json.status){
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }
    
        console.log(json);
       } catch (e){
        console.log("Oops, ocurrio un error persona" + e );
       }
    }

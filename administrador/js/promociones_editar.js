function verificar_actualizacion() {
    let nombre = document.formulario.nombre.value;
    let archivo = document.formulario.archivo.value;
    

    if (nombre == "" || archivo == "" ) {
        $("#error_campos").fadeIn();
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    if (validar_codigo_actualizado() == false) return false;
    
    return true;
}
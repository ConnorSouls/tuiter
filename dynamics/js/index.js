window.addEventListener("load", ()=>{
    const nota = document.addElementByID("textaDescripcion");

    const enviar = document.addElementByID("btnEnviar");

    document.cookie = "comegalleta = galletita; max-age="+60*5;

    var guardado = document.cookie.split("=");
    if(guardado != ""){
        nota.value=guardad[1];
    }

    nota.addEventListener("keyup", ()=>{
        document.cookie = "comegalleta ="+nota.value+"; max-age="+60*5;
    });
    
    enviar.addEventListener("click", ()=>{
        document.cookie = "comegalleta; max-age=-1";
    });
});
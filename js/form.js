var id = 0;
document.getElementById("anonima").addEventListener('change', function() {
    document.getElementById('correo').removeClass("required");
    document.getElementById('curp').removeClass("required");
    document.getElementById('nombreDenunciante').removeClass("required");
    document.getElementById('apellidoParternoDenunciante').removeClass("required");
    document.getElementById('fechaNacimiento').removeClass("required");
    document.getElementById('ocupacionDenunciante').removeClass("required");
    document.getElementById('parteDenunciante').style.display='none';
    });

document.getElementById("noAnonima").addEventListener('change', function() {
    document.getElementById('parteDenunciante').style.display='inherit';
    });

document.getElementById("cargarArchivo").addEventListener('click', function() {
    id++;
    const input = document.createElement("input");
    input.type = "file";
    input.id = "archivo"+(id);
    input.name = "archivo"+(id);
    const hidden = document.getElementById("hidden");
    hidden.value = id;
    contenedor = document.getElementById(id%2!=0?"archivosIzquierda":"archivosDerecha");
    contenedor.appendChild(input);
    });
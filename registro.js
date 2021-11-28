function sendRegistro() {
    var user = document.querySelector('#txtUser').value;
    var email = document.querySelector('#txtEmail').value;
    var pass = document.querySelector('#txtPass').value;
    var url = "sendregistrar.php"; 
    var datossol = "user=" + user + "&email="+email +"&pass="+pass ;
    console.log(url);
    fetch(
        url,
        {
            method: 'POST',
            body: datossol,
            headers: {'Content-Type':'application/x-www-form-urlencoded'}
        }
    )
    .then(
        (respuesta) => {
            respuesta.text()
            .then(
                (texto) => {
                    document.getElementById("divInfo").innerHTML="Registro Éxitoso";
                },
                (error) => {
                    document.getElementById("divInfo").innerHTML="No se ha podido registrar la cuenta";
                }
            );
        }
    );
}
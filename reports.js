const divTabla = document.getElementById("divTabla");

fetch('getreports.php').then(
    respuesta => {
        respuesta.text().then(
            texto => divTabla.innerHTML=texto,
            e => console.log(e)
        );
    },
    function(error) {
        console.log(error)
    }
);

function getAppReports() {
    var appName = document.querySelector('#txtAppName').value;
    var url = "getreportbyapp.php"; 
    var datossol = "appname=" + appName;
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
                    divTabla.innerHTML = texto;
                }
            );
        }
    );
}
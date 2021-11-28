const divTabla = document.getElementById("divTabla");

getAllReports()

function getAllReports() {
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
}

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

function sendReport() {
    var appName = document.querySelector('#txtApp').value;
    var tipoReporte = document.querySelector('#txtTipo').value;
    var email = document.querySelector('#txtEmail').value;
    var detalles  = document.querySelector('#txtDetalles').value;
    var url = "sendreport.php"; 
    var datossol = "appname=" + appName + "&tipo=" + tipoReporte + "&email="+email +"&detalles="+detalles ;
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
                    getAllReports();
                }
            );
        }
    );
}
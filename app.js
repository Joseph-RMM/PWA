//Revisar soporte de SW
if ('serviceWorker' in navigator) {
    //Registrar SW
    navigator.serviceWorker.register('/sw.js')
    .then((reg) => console.log("Registro de SW Completado"))
    .catch((err) => console.log("Ocurrió un error al registrar el SW"))
}
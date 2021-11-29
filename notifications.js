var button = document.getElementById("btnNotifications");
button.addEventListener('click', function(e) {
    Notification.requestPermission().then(function(result) {
        if(Notification.permission === 'granted') {
            startNotification();
        }
    });
});

function startNotification() {
    if (Notification.permission === 'granted') {
        navigator.serviceWorker.getRegistration()
        .then(
            reg => {
                var options = {
                    body: "Se han activado las notificaciones",
                    icon: "maskable_icon_x192.png"
                };
                reg.showNotification("CatFox Testers", options);
            }
        )
    }
}
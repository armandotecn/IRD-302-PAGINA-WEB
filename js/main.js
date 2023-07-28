(function(){
    "use strict";
    document.addEventListener('DOMContentLoaded',function(){
        var map = L.map('mapa').setView([19.613363714986637, -99.33924061601721], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        L.marker([19.613363714986637, -99.33924061601721]).addTo(map)
            .bindPopup('Empresa 100% Mexicana')
            .openPopup()
            .bindTooltip('Reciclaje')
            .bindTooltip();   
});
})();
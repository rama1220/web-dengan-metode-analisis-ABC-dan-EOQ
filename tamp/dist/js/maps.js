
      var map = L.map('map').setView([-7.840243, 110.408333], 13);
      L.tileLayer('https://mt1.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.Routing.control({
         routeWhileDragging: true,
        geocoder: L.Control.Geocoder.nominatim()
      }).addTo(map);
      
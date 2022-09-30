@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h1>Detail</h1>

      <div class="row">
        <div class="col-md-8 my-3">
          <h4>{{ $wisata->nama_wisata }}</h4>
          <img src="{{ asset('storage/'. $wisata->img_wisata) }}" alt="">
            <h5>deskripsi  :</h5>
            <p>{{ $wisata->deskripsi }}</p>
            <h5>Alamat  :</h5>
            <p>{{ $wisata->alamat }}</p>
            <h4>Koordinat : {{ $wisata->latitude . $wisata->longitude }}</h4>

            <div id="leafletMap-registration" style="height: 300px;width:50%;"></div>
            <input type="hidden" value="{{ $wisata->latitude }}" id="latitude">
            <input type="hidden" value="{{ $wisata->longitude }}" id="longitude">

            <a href="/wisata" class="btn btn-primary my-3">Back</a>

            <script>
              // you want to get it of the window global
              const providerOSM = new GeoSearch.OpenStreetMapProvider();
              const latitude = document.querySelector('#latitude').value;
              const longitude = document.querySelector('#longitude').value;
          
              //leaflet map
              var leafletMap = L.map('leafletMap-registration', {
              fullscreenControl: true,
              // OR
              fullscreenControl: {
                  pseudoFullscreen: false // if true, fullscreen to page width and height
              },
              minZoom: 8
              }).setView([latitude, longitude], 15);
          
              L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
              }).addTo(leafletMap);
              
              let theMarker = {};
              theMarker = L.marker([latitude,longitude]).addTo(leafletMap);
          
              leafletMap.on('click',function(e) {
                  let latitude  = e.latlng.lat.toString().substring(0,15);
                  let longitude = e.latlng.lng.toString().substring(0,15);
                  // document.getElementById("latitude").value = latitude;
                  // document.getElementById("longitude").value = longitude;
                  let popup = L.popup()
                      .setLatLng([latitude,longitude])
                      .setContent("Kordinat : " + latitude +" - "+  longitude )
                      .openOn(leafletMap);
          
                  if (theMarker != undefined) {
                      leafletMap.removeLayer(theMarker);
                  };
                  theMarker = L.marker([latitude,longitude]).addTo(leafletMap);  
              });
            </script>
        </div>
      </div>
    </div>
@endsection
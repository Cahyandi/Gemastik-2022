@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Create Wisata</h3>

      {{-- {{ auth('dinas')->user()->id }} --}}
      <div class="row mt-3">
        <div class="col-md-8">
          <form action="/wisata" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_dinas" value="{{ auth('dinas')->user()->id }}">
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="nama_wisata" class="form-label">Nama Wisata :</label>
                  <input type="text" class="form-control" name="nama_wisata" id="nama_wisata">
                  @error('nama_wisata')
                      {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="profil" class="form-label">Profil :</label>
                  <input type="file" class="form-control" id="profil" name="img_wisata">
                  @error('img_wisata')
                      {{ $message }}
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                @error('alamat')
                      {{ $message }}
                @enderror
            </div>
            <div class="form-group mb-3">
              <label for="tiket" class="form-label">Harga Ticket</label> 
              <input type="number" class="form-control" id="tiket" name="harga_tiket">
              @error('harga_tiket')
                  {{ $message }}
              @enderror
            </div>
            <div class="form-group mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label> 
              <input type="text" class="form-control" id="deskripsi" name="deskripsi">
              @error('deskripsi')
                  {{ $message }}
              @enderror
            </div>

            <div id="leafletMap-registration" style="height: 300px"></div>


            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="latitude" class="form-label">Latitude :</label>
                  <input type="text" class="form-control" name="latitude" id="latitude">
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="longitude" class="form-label">Longitude :</label>
                  <input type="text" class="form-control" id="longitude" name="longitude">
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      // you want to get it of the window global
      const providerOSM = new GeoSearch.OpenStreetMapProvider();
  
      //leaflet map
      var leafletMap = L.map('leafletMap-registration', {
      fullscreenControl: true,
      // OR
      fullscreenControl: {
          pseudoFullscreen: false // if true, fullscreen to page width and height
      },
      minZoom: 8
      }).setView([-6.981307456857814, 108.48760381032402], 15);
  
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(leafletMap);
      
      let theMarker = {};
  
      leafletMap.on('click',function(e) {
          let latitude  = e.latlng.lat.toString().substring(0,15);
          let longitude = e.latlng.lng.toString().substring(0,15);
          document.getElementById("latitude").value = latitude;
          document.getElementById("longitude").value = longitude;
          let popup = L.popup()
              .setLatLng([latitude,longitude])
              .setContent("Kordinat : " + latitude +" - "+  longitude )
              .openOn(leafletMap);
  
          if (theMarker != undefined) {
              leafletMap.removeLayer(theMarker);
          };
          theMarker = L.marker([latitude,longitude]).addTo(leafletMap);  
      });
  
      const search = new GeoSearch.GeoSearchControl({
          provider: providerOSM,
          style: 'bar',
          searchLabel: 'Kuningan',
      });
  
      leafletMap.addControl(search);
    </script>
@endsection
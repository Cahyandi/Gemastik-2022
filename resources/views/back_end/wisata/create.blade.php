@extends('back_end.layouts.main')

@section('section')
    <div class="mt-3">
      <h3>Create Wisata</h3>
      <div class="row mt-4">
        <div class="col-md-8">
          <form action="/dinas/wisata" method="POST" enctype="multipart/form-data" class="bg-secondary bg-opacity-10 my-3 p-4 rounded">
            @csrf
            <input type="hidden" name="dinas_id" value="{{ auth('dinas')->user()->id }}">
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="nama_wisata" class="form-label">Nama Wisata :</label>
                  <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" value="{{ old('nama_wisata') }}">
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
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="htm_weekday" class="form-label">HTM Hari Biasa</label> 
                  <input type="number" class="form-control" id="htm_weekday" name="htm_weekday" value="{{ old('htm_weekday') }}">
                  @error('htm_weekday')
                  {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="htm_weekend" class="form-label">HTM Sabtu-Minggu</label> 
                  <input type="number" class="form-control" id="htm_weekend" name="htm_weekend" value="{{ old('htm_weekend') }}">
                  @error('htm_weekend')
                  {{ $message }}
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                  {{ $message }}
                @enderror
            </div>

            <div id="leafletMap-registration" style="height: 300px"></div>


            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="latitude" class="form-label">Latitude :</label>
                  <input type="text" class="form-control" name="latitude" id="latitude" value="{{ old('latitude') }}">
                  @error('latitude')
                      {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="longitude" class="form-label">Longitude :</label>
                  <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude') }}">
                  @error('longitude')
                      {{ $message }}
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label> 
              <textarea name="deskripsi" id="editor" cols="40" rows="100" value="">Deskripsi :  <br><br><br>
                       Fasilitas :  <br>
              </textarea>
              @error('deskripsi')
                  {{ $message }}
              @enderror
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
      // Selesai Leaflet

      ClassicEditor.create(document.querySelector('#editor'))
                   .catch( error => {
                    console.error(error);
                   });
    </script>
@endsection
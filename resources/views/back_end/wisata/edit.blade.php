@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Update Wisata</h3>

      {{-- {{ auth('dinas')->user()->id }} --}}
      <div class="row mt-3">
        <div class="col-md-8">
          <form action="/dinas/wisata/{{ $wisata->id }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <input type="hidden" name="dinas_id" value="{{ auth('dinas')->user()->id }}">
            <input type="hidden" name="old_image" value="{{ $wisata->img_wisata }}">
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="nama_wisata" class="form-label">Nama Wisata :</label>
                  <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" value="{{ $wisata->nama_wisata }}">
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
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $wisata->alamat }}">
                @error('alamat')
                      {{ $message }}
                @enderror
            </div>
            <div class="form-group mb-3">
              <label for="tiket" class="form-label">Harga Ticket</label> 
              <input type="number" class="form-control" id="tiket" name="harga_tiket" value="{{ $wisata->harga_tiket }}">
              @error('harga_tiket')
                  {{ $message }}
              @enderror
            </div>
            <div class="form-group mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label> 
              <textarea  cols="30" rows="10" class="form-control" id="deskripsi" name="deskripsi">{{$wisata->deskripsi}}</textarea>

              @error('deskripsi')
                  {{ $message }}
              @enderror
            </div>

            <div id="leafletMap-registration" style="height: 300px"></div>

            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="latitude" class="form-label">Latitude :</label>
                  <input type="text" class="form-control" name="latitude" id="latitude" value="{{ $wisata->latitude }}">
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="longitude" class="form-label">Longitude :</label>
                  <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $wisata->longitude }}">
                </div>
              </div>
            </div>

            <a href="/dinas/wisata" class="btn btn-secondary my-3">Back</a>
            <button type="submit" class="btn btn-primary my-3">Update</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      // you want to get it of the window global
      const providerOSM = new GeoSearch.OpenStreetMapProvider();
      let latitude = document.getElementById("latitude").value;
      let longitude = document.getElementById("longitude").value;
  
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
      
      let theMarker = L.marker([latitude,longitude]).addTo(leafletMap);
  
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
    </script>
@endsection
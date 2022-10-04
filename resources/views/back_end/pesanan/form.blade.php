@extends('back_end.layouts.main')

@section('section')
<div class="mt-4">
  <h3>Create Wisata</h3>

  {{-- {{ auth('dinas')->user()->id }} --}}
  <div class="row mt-4">
    <div class="col-md-8">
      <form action="/ticket/pesan" method="POST" enctype="multipart/form-data" class="bg-secondary bg-opacity-10 my-3 p-4 rounded">
        @csrf
        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
        <input type="hidden" name="id_wisata" value="{{ $wisata->id }}">
        <div class="row g-3 mb-3">
          <div class="col-md">
            <div class="form-group">
              <label for="nama_wisata" class="form-label">Nama Wisata :</label>
              <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="{{ $wisata->nama_wisata }}" readonly>
              @error('nama_wisata')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="nama_pemesan" class="form-label">Nama Pemesan :</label>
              <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan">
              @error('nama_pemesan')
                  {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md">
            <div class="form-group mb-3">
              <label for="harga_ticket" class="form-label">Harga Tiket</label> 
              <input type="number" class="form-control" id="harga_ticket" name="harga_ticket" value="{{ $wisata->harga_tiket }}" readonly>
              @error('harga_ticket')
              {{ $message }}
              @enderror
            </div>
          </div>
          <div class="col-md">
            <div class="form-group mb-3">
              <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket">
                @error('jumlah_tiket')
                      {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md">
            <div class="form-group mb-3">
              <label for="total_harga" class="form-label">Total Harga</label> 
              <input type="text" class="form-control" id="total_harga" name="total_harga" value="" readonly>
              @error('total_harga')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="col-md">
            <?php 
              // mengambil string nama 3huruf awalnya
               $nama = substr($wisata->nama_wisata, 0,3);
              //  Membuat No Tiket Otomatis
               if ($tiket == '0001') {
                $noTiket = $nama . $tiket;
               } else {
                $tiket = (int) substr($tiket, 4, 4);
                $noTiket = $nama . '000' . $tiket+1;
                // ddd($noTiket);
               }
              //  ddd($noTiket)
              //  ($tiket == 0001) ? $nama . '000'. $tiket : $nama . '000' . $tiket+1
              //  if ($tiket->no_ticket == null) {
              //    $notiket = 0001;
              //  } else {
                //  $notiket = substr($tiket->no_ticket, 4, 4);
              //    $notiket = (int) $notiket;
              //  }
            ?>
            {{-- {{ $nama = substr($wisata->nama_wisata, 0,3)  }}
            {{ $notiket = substr($tiket->no_ticket, 4, 4) }}
            {{ $notiket = (int) $notiket }} --}}
            {{-- {{ ddd($nama . '000' . $notiket+1) }} --}}
            {{-- {{ ddd($nama . '000' . $notiket+1) }} --}}
            
            <div class="form-group mb-3">
              <label for="no_tiket" class="form-label">No Tiket</label> 
              <input type="text" class="form-control" id="no_tiket" name="no_ticket" value="{{ $noTiket }}" readonly>
              @error('no_tiket')
                  {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Pesan</button>
      </form>
    </div>
  </div>
</div>

<script>
  let jumlah = document.getElementById('jumlah_tiket');
  let ticket = document.getElementById('harga_ticket').value;
  let total = document.getElementById('total_harga');
  // console.log(ticket); 

  jumlah.addEventListener('change', () => {
    jumlahHasil = jumlah.value
    harga = ticket * jumlah.value
    hasil = total.value = harga
    return console.log(hasil)
  })
</script>
@endsection
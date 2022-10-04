@extends('back_end.layouts.main')

@section('section')
<div class="mt-4">
  <h3>{{ $title }}</h3>

  <div class="row mt-3">
    <div class="col-md-8">
      <form action="/ticket/{{ $ticket->id }}" method="post" class="bg-secondary bg-opacity-10 p-4" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ $ticket->id }}">
        <input type="hidden" name="username" value="{{ $ticket->user->username }}">
        <input type="hidden" name="gambar" value="{{ ($ticket->bukti_pembayaran == null) ? '' : $ticket->bukti_pembayaran }}">
        <input type="hidden" name="status" value="proses">
        <div class="row g-3 mb-3">
          <div class="col-md">
            <div class="form-group">
              <label for="nama_pemesan" class="form-label">Nama Pemesan :</label>
              <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" value="{{ $ticket->nama_pemesan }}" readonly>
              @error('nama_pemesan')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="no_ticket" class="form-label">No Ticket :</label>
              <input type="text" class="form-control" id="no_ticket" name="no_ticket" value="{{ $ticket->no_ticket }}" readonly>
              @error('no_ticket')
                  {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md">
            <div class="form-group">
              <label for="jumlah_tiket" class="form-label"> Jumlah :</label>
              <input type="number" class="form-control" name="jumlah_tiket" id="jumlah_tiket" value="{{ $ticket->jumlah_tiket }}" readonly>
              @error('jumlah_tiket')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="total_harga" class="form-label">Total :</label>
              <input type="text" class="form-control" id="total_harga" name="total_harga" value="Rp. {{ number_format($ticket->total_harga,'0',',','.') }}" readonly>
              @error('total_harga')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran :</label>
            <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" onchange="previewImage()">
            @if ($ticket->bukti_pembayaran == null)
              @error('bukti_pembayaran')
                  {{ $message }}
              @enderror
              <img class="img-preview img-fluid mt-3 col-md-5">  
            @else
              <img class="img-preview img-fluid mt-3 col-md-5" src="{{ asset('storage/'.$ticket->bukti_pembayaran) }}">      
            @endif
          </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Selesai</button>
      </form>
    </div>
  </div>
</div>

<script>
  function previewImage() {
    const bukti = document.querySelector('#bukti_pembayaran')
    const imgPreview = document.querySelector('.img-preview')
    
    imgPreview.style.display = 'block';

    const oFReader = new FileReader()
    oFReader.readAsDataURL(bukti.files[0])
    oFReader.onload = function(ofREvent) {
      imgPreview.src = ofREvent.target.result 
    }
  }
</script>
@endsection
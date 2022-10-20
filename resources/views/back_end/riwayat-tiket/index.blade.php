@extends('back_end.layouts.main')

@section('section')
<div class="mt-4">
  <h3>Riwayat Ticket</h3>

  <div class="row mt-4">
    <div class="col-md-10 border rounded">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>No</th>
            <th>QR</th>
            <th>No Tiket</th>
            {{-- <th>Username</th> --}}
            <th>Nama Pemesan</th>
            <th>TGL Booking</th>
            <th>Wisata</th>
            <th>Status</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        {{-- {{ ddd($tikets) }} --}}
        <tbody>
          @foreach ($tikets as $tiket)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <?php
                $code  = "NoTicket : $tiket->no_ticket \nNama : $tiket->nama_pemesan \nTempat Wisata  : ". $tiket->wisata->nama_wisata."\nStatus : $tiket->status \nTglBooking  : $tiket->tgl_booking";
              ?> 
              <td>
                {{ QrCode::size(100)->generate($code) }}
                {{-- <div>
                  <canvas id="canvas" height="100" width="100"></canvas>
                </div> --}}
              </td>
              <td>{{ $tiket->no_ticket }}</td>
              {{-- <td>{{ $tiket->user->username }}</td> --}}
              <td>{{ $tiket->nama_pemesan }}</td>
              <td>{{ $tiket->tgl_booking }}</td>
              <td>{{ $tiket->wisata->nama_wisata }}</td>
              <td>{{ $tiket->status }}</td>
              <td colspan="2" class="text-center">
                <a href="/riwayat-ticket/validate/{{ $tiket->no_ticket }}" class="btn btn-success">Validasi</a>
                <form action="/data-petugas" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="../node_modules\qrcode\build\qrcode.js"></script>
<script>
  let canvas = document.getElementById('canvas')
  QRCode.toCanvas(canvas, 'success', (err) => {
    if(err) console.error(err);
    console.log("Berhasil");
  })
</script>
@endsection
@extends('back_end.layouts.main')

@section('section')
<div class="mt-4">
  <h3>Detail Ticket User</h3>

  <div class="row mt-4">
    <div class="col-md-8">
      <div class="card">
        <h5 class="card-header">Wisata  : {{ $ticket->wisata->nama_wisata }}</h5>
        <div class="row">
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">Nama Pemesan : {{ $ticket->nama_pemesan }}</h5>
              <h6 class="card-title">No Ticket : {{ $ticket->no_ticket }}</h6>
              <p class="card-text">Jumlah Ticket  : {{ $ticket->jumlah_tiket }}</p>
              <p class="card-text">Total Harga  : Rp. {{ number_format($ticket->total_harga, 0, ',','.') }}</p>
              <h6 class="card-title my-3">Status : {{ $ticket->status }}</h6>
              <a href="/data-ticket/{{ auth('dinas')->user()->username }}" class="btn btn-secondary">Back</a>
              <a href="/data-ticket/edit/{{ $ticket->no_ticket }}" class="btn btn-primary">Update</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <?php
                $code  = "NoTicket : $ticket->no_ticket \nNama : $ticket->nama_pemesan \nTempat Wisata  : ". $ticket->wisata->nama_wisata."\nStatus : $ticket->status";
               ?> 
             <p class="card-text mb-2">Scan QRCode</p>
              {{ QrCode::size(70)->generate($code) }}
            </div>
          </div>
          <div class="col-md-5">
            <div class="card-body">
              @if ($ticket->bukti_pembayaran)
                <img src="{{ asset("/storage/$ticket->bukti_pembayaran") }}" class="card-img-top">   
              @endif
              <h5 class="card-title">Belum Upload Bukti Pembayaran</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
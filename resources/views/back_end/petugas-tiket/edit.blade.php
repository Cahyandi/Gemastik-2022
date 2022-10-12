@extends('back_end.layouts.main')

@section('section')
<div class="mt-4">
  <h3>Riwayat Ticket</h3>

  <div class="row mt-4">
    <div class="col-md-6 border rounded">
      <form action="/data-ticket/updateStatus/{{ $ticket->id }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $ticket->id }}">
        <table class="table mt-3">
          <thead>
            <tr>
              <th>No</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Status</td>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="belum" {{ ($ticket->status == 'belum') ? 'checked' : '' }}>
                  <label class="form-check-label" for="inlineRadio1">Belum</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="proses" {{ ($ticket->status == 'proses') ? 'checked' : '' }}>
                  <label class="form-check-label" for="inlineRadio2">Proses</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="selesai" {{ ($ticket->status == 'selesai') ? 'checked' : '' }}>
                  <label class="form-check-label" for="inlineRadio3">Selesai</label>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="3" class="my-3">
                <a href="/data-ticket/show/{{ $ticket->no_ticket }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
@endsection
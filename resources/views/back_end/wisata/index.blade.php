@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Daftar Wisata</h3>
      
      <div class="row my-3">
        <div class="col-md-3">
          @if ($petugasWisata == null && auth('dinas')->user()->role == 'petugas' )
            <a href="/dinas/wisata/create" class="btn btn-primary">Tambah Wisata</a>
          @elseif(auth('dinas')->user()->role !== 'petugas')
          {{ '' }}
          @else
          {{ '' }}
          @endif
        </div>
      </div>

      <div class="row mt-3">
        @if (auth('dinas')->user()->role == 'petugas')
        {{-- {{ ddd($petugasWisata) }} --}}
          @if ($petugasWisata !== null)
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('storage/'. $petugasWisata->img_wisata) }}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{ $petugasWisata->nama_wisata }}</h5>
                  @if ($petugasWisata->status == 'approve')
                    <span class="badge bg-success">{{ $petugasWisata->status }}</span>
                  @elseif ($petugasWisata->status == 'reject')
                    <span class="badge bg-danger">{{ $petugasWisata->status }}</span>
                  @else
                    <span class="badge bg-warning">{{ $petugasWisata->status }}</span>
                  @endif
                  <p class="card-text">{{ $petugasWisata->deskripsi }}</p>
                  <a href="/dinas/wisata/{{ $petugasWisata->id }}" class="btn btn-primary">Detail</a>
                  <a href="/dinas/wisata/{{ $petugasWisata->id }}/edit" class="btn btn-success">Update</a>
                  <form action="/dinas/wisata/{{ $petugasWisata->id }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="javascript: confirm('Yakin hapus data')">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          @else
          @endif
        @else
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Di Approve
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <div class="row">
                    @foreach ($wisataApprove as $wisata)
                      <div class="col-md-4">
                        <div class="card">
                          <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                            <p class="card-text">{{ $wisata->deskripsi }}</p>
                            <div class="d-flex">
                              <a href="/dinas/wisata/{{ $wisata->id }}" class="btn btn-primary">Detail</a>
                              <form action="{{ route('change.status.pariwisata', $wisata->id) }}" method="POST" class="ms-3">
                                @csrf
                                <button class="btn btn-danger" name="status" value="reject">Reject Wisata</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div> 
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Pending
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <div class="row">
                    @foreach ($wisataPending as $wisata)
                      <div class="col-md-4">
                        <div class="card">
                          <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                            <p class="card-text">{{ $wisata->deskripsi }}</p>
                            <div class="d-flex">
                              <div>
                                <a href="/dinas/wisata/{{ $wisata->id }}" class="btn btn-primary">Detail</a>
                              </div>
                              <form action="{{ route('change.status.pariwisata', $wisata->id) }}" method="POST" class="ms-3 d-flex">
                                @csrf
                                <button class="btn btn-success me-3" name="status" value="approve">Approve</button>
                                <button class="btn btn-danger" name="status" value="reject">Reject</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div> 
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Di Reject
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <div class="row">
                    @foreach ($wisataReject as $wisata)
                      <div class="col-md-4">
                        <div class="card">
                          <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                            <p class="card-text">{{ $wisata->deskripsi }}</p>
                            <form action="{{ route('change.status.pariwisata', $wisata->id) }}" method="POST" class="ms-3 d-flex">
                              @csrf
                              <button class="btn btn-warning me-3" name="status" value="pending">Pending</button>
                              <button class="btn btn-success" name="status" value="approve">Approve</button>
                            </form>
                          </div>
                        </div>
                      </div> 
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>    
        @endif
      </div>
    </div>
@endsection
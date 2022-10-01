<!-- Modal Box Login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content d-flex p-4">
          <div class="modal-header mb-4">
              <div class="header d-flex flex-column ">
                  <h5 class="modal-title fs-4" id="exampleModalLabel">Login</h5>
                  <p style="font-size: 14px; color: #adb5bd;">Perjalanan serumu dimulai di sini.</p>
              </div>
              <img src="/image/logo_sipaku.png" alt="" width="150">
          </div>
          <div class="modal-body">
              <!--  -->
              <form class="" action="authenticate" method="POST">
                  @csrf
                  <div class="form-field d-flex align-items-center pb-1">
                      <input type="text" name="username" placeholder="Masukkan Username" class="@error('username') is-invalid  @enderror" required>
                      @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="form-field d-flex align-items-center">
                      <input type="password" name="password" placeholder="Masukkan Password" class="@error('password') is-invalid @enderror" required>
                      @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <p style="font-size: 14px; color: #adb5bd;">Belum Mempunyai Akun?
                      <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar" data-bs-dismiss="modal">Daftar Sekarang</a>
                  </p>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="submit">Login</button>
                  </div>
              </form>

          </div>
      </div>
  </div>
</div>
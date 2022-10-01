<!-- Modal Box Daftar -->
<div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content d-flex p-4">
          <div class="modal-header mb-4">
              <div class="header d-flex flex-column ">
                  <h5 class="modal-title fs-4" id="exampleModalLabel">Daftar</h5>
                  <p style="font-size: 14px; color: #adb5bd;">Perjalanan serumu dimulai di sini.</p>
              </div>
              <img src="/image/logo_sipaku.png" alt="" width="150">
          </div>
          <div class="modal-body">
              <!--  -->
              <form class="" action="register" method="POST">
                  @csrf
                  <div class="form-field d-flex align-items-center pb-1">
                      <input type="text" name="name" id="userName" placeholder="Masukkan Nama">
                  </div>
                  <div class=" form-field d-flex align-items-center pb-1">
                      <input type="number" name="no_telp" id="userName" placeholder="Masukkan Telpon">
                  </div>
                  <div class="form-field d-flex align-items-center pb-1">
                      <input type="text" name="email" id="userName" placeholder="Masukkan Email">
                  </div>
                  <div class="form-field d-flex align-items-center pb-1">
                      <input type="text" name="username" id="userName" placeholder="Masukkan Username">
                  </div>
                  <div class="form-field d-flex align-items-center">
                      <input type="password" name="password" id="pwd" placeholder="Masukkan Password">
                  </div>
                  <p style="font-size: 14px; color: #adb5bd;">Sudah Mempunyai Akun?
                      <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar" data-bs-dismiss="modal">Login Sekarang</a>
                  </p>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="submit">Register</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
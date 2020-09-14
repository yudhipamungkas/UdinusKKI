@extends('mhski.layouts.app', ['activePage' => 'formajuan', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Form Ajuan Dosbim KKI</h4>
              <p class="card-category">Tahun Akademik xxxx / xxxx</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Kuota</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>36738</td>
                    <td>100</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formajuanModal">Ajukan</button></td>
                  </tr>
                  {{-- Modal --}}
                  <div class="modal fade" id="formajuanModal" tabindex="-1" aria-labelledby="formajuanModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="formajuanModalLabel">Formulir Pengajuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label for="nama_mhs">Nama Mahasiswa</label>
                              <input name="nama_mhs" type="text" class="form-control" id="nama_mhs" placeholder="Nama Lengkap ...">
                            </div>
                            <div class="form-group">
                              <label for="nim">NIM</label>
                              <input name="nim" type="text" class="form-control" id="nim" placeholder="A11.20xx.xxxxx ...">
                            </div>
                            <div class="form-group">
                              <label for="nama_dsn">Nama Dosen</label>
                              <input name="nama_dsn" type="text" class="form-control" id="nama_dsn" placeholder="Otomatis sesuai dengan yg diajukan">
                            </div>
                            Surat Permohonan
                            <input type="file" class="form-control" name="suratpermohonan"/>
                            Bukti Pendukung
                            <input type="file" class="form-control" name="buktipendukung" multiple/>
                            <div class="form-group">
                            <label for="alasan">Alasan Pemilihan</label>
                              <textarea name="alasan" class="form-control" id="alasan" rows="3" placeholder="Alasan Anda memilih dosen tersebut"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary">Kirim</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
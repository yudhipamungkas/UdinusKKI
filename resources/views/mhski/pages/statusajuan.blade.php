@extends('mhski.layouts.app', ['activePage' => 'statusajuan', 'titlePage' => __('Status Ajuan')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Status Ajuan Dosbim KKI</h4>
              <p class="card-category">Tahun Akademik xxxx / xxxx</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Nama Dosbim</th>
                  <th>Status</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>A11.2017.10160</td>
                    <td>Yudhi</td>
                    <td>Eko</td>
                    <td>Diterima</td>
                  </tr>
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
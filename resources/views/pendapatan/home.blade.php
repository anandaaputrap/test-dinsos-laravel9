@extends('admin/panel')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="modal fade" id="modalTambahBarang" tabindex="-1" aria-labelledby="modalTambahBarang" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
      <!--FORM TAMBAH BARANG-->
            <form action="{{ route('pendapatan.index') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="">Jurnal No</label>
                <input type="text" class="form-control" id="tambahno" name="no_jurnal" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="">Jurnal Tanggal</label>
                <input type="date" class="form-control" id="tambahtanggal" name="tgl_jurnal">
              </div>
              <div class="form-group">
                <label for="">Dokumen Sumber</label>
                <input type="text" class="form-control" id="tambahdok" name="dokumen_sumber">
              </div>
              <div class="form-group">
                <label for="">No Dokumen</label>
                <input type="text" class="form-control" id="tambahtanggal2" name="no_dokumen">
              </div>
              <div class="form-group">
                <label for="">Tanggal Dokumen</label>
                <input type="date" class="form-control" id="tambahtanggal2" name="tgl_dokumen">
              </div>
              <div class="form-group">
                <label for="">Uraian</label>
                <input type="text" class="form-control" id="uraian" name="uraian">
              </div>
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
      <!--END FORM TAMBAH BARANG-->
          </div>
      </div>
      </div>
    </div>

    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
      <!--FORM TAMBAH BARANG-->
            <form action="{{ $pendapatan->id }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="">Jurnal No</label>
                <input type="text" class="form-control" id="tambahno" value="{{ $pendapatan->no_jurnal }}" name="no_jurnal" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="">Jurnal Tanggal</label>
                <input type="date" class="form-control" id="tambahtanggal" value="{{ $pendapatan->tgl_jurnal }}" name="tgl_jurnal">
              </div>
              <div class="form-group">
                <label for="">Dokumen Sumber</label>
                <input type="text" class="form-control" id="tambahdok" value="{{ $pendapatan->dokumen_sumber }}" name="dokumen_sumber">
              </div>
              <div class="form-group">
                <label for="">No Dokumen</label>
                <input type="text" class="form-control" id="no_dokumen" name="no_dokumen" value="{{ $pendapatan->no_dokumen }}">
              </div>
              <div class="form-group">
                <label for="">Tanggal Dokumen</label>
                <input type="date" class="form-control" id="tambahtanggal2" name="tgl_dokumen" value="{{ $pendapatan->tgl_dokumen }}">
              </div>
              <div class="form-group">
                <label for="">Uraian</label>
                <input type="text" class="form-control" id="uraian" name="uraian" value="{{ $pendapatan->uraian }}">
              </div>
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
      <!--END FORM TAMBAH BARANG-->
          </div>
      </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pendapatan LRA</h3>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambahBarang">Tambah Data</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">No Jurnal</th>
                      <th scope="col">Jurnal Tanggal</th>
                      <th scope="col">Dokumen Sumber</th>
                      <th scope="col">No Dokumen</th>
                      <th scope="col">Tanggal Dokumen</th>
                      <th scope="col">Uraian</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($pendapatan->count()>0)
                    @foreach ($pendapatan as $no => $hasil)
                    <tr>
                        <th>{{ $no+1 }}</th>
                        <td>{{ $hasil->no_jurnal }}</td>
                        <td>{{ $hasil->tgl_jurnal }}</td>
                        <td>{{ $hasil->dokumen_sumber }}</td>
                        <td>{{ $hasil->no_dokumen }}</td>
                        <td>{{ $hasil->tgl_dokumen }}</td>
                        <td>{{ $hasil->uraian }}</td>
                        <td>
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEdit">Edit</button>
                          
                            <form action="{{ route('pendapatan.destroy', $hasil->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                    @else
                    <tr>
                        <td colspan="10" align="center">Tidak Ada Data</td>
                    </tr>
                    @endif
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('js')
{{-- <script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('pendapatan.list') }}",
        columns: [
          {data: 'id', name: 'id', width: '5%'},
          {data: 'no_jurnal', name: 'no_jurnal'},
          {data: 'tgl_jurnal', name: 'tgl_jurnal'},
          {data: 'dokumen_sumber', name: 'dokumen_sumber'},
          {data: 'no_dokumen', name: 'no_dokumen'},
          {data: 'tgl_dokumen', name: 'tgl_dokumen'},
          {data: 'uraian', name: 'uraian'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
  });
</script> --}}
@endpush


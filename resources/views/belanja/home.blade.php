@extends('admin/panel')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Belanja</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Belanja</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Belanja LRA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No Jurnal</th>
                      <th scope="col">Jurnal Tanggal</th>
                      <th scope="col">Dokumen Sumber</th>
                      <th scope="col">No Dokumen</th>
                      <th scope="col">Uraian</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($belanja->count()>0)
                    @foreach ($belanja as $no => $hasil)
                    <tr>
                        <th>{{ $no+1 }}</th>
                        <td>{{ $hasil->no_jurnal }}</td>
                        <td>{{ $hasil->tgl_jurnal }}</td>
                        <td>{{ $hasil->dokumen_sumber }}</td>
                        <td>{{ $hasil->no_dokumen }}</td>
                        <td>{{ $hasil->uraian }}</td>
                        <td>
                            <form action="{{ route('belanja.destroy', $hasil->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('belanja.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
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


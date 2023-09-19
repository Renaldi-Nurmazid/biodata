@extends('adminlte')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Guru Page</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Guru</h3>
      </div>
      <div class="card-body">
        <a href="{{ route('guru.index') }}" class="btn btn-default mb-2">Kembali</a>
        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" name="nip" placeholder="...">
                @error('nip')
                <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="namaguru">Nama Guru</label>
                <input type="text" class="form-control" name="namaguru" placeholder="...">
              </div>
              @error('namaguru')
                <p>{{ $message }}</p>
                @enderror
              <div class="form-group">
                <label for="mapel">Mapel</label>
                <input type="text" class="form-control" name="mapel" placeholder="...">
              </div>
              @error('mapel')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-success" value="tambah">Tambah</button>
            </div>
        </form>
      </div>
      <div class="card-footer">
        {{-- footer --}}
      </div>
    </div>

  </section>
  @endsection
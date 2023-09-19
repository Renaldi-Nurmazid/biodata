@extends('adminlte')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Peserta Didik Page</h1>
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
        <h3 class="card-title">Tambah Data Peserta Didik</h3>
      </div>
      <div class="card-body">
        <a href="{{ route('pesertadidik.index') }}" class="btn btn-default mb-2">Kembali</a>
        <form action="{{ route('pesertadidik.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="number" class="form-control" name="nis" placeholder="...">
                @error('nis')
                <p>{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="namalengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="namalengkap" placeholder="...">
              </div>
              @error('namalengkap')
                <p>{{ $message }}</p>
                @enderror
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option value="">PIlih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
              @error('jk')
                <p>{{ $message }}</p>
                @enderror
              <div class="form-group">
                <label for="nilai">Nilai</label>
                <input type="number" class="form-control" name="nilai" placeholder="...">
              </div>
              @error('nilai')
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
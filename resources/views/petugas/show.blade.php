@extends('master')
@section('title', 'detail petugas')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Petugas/li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama" value="{{ $petugas[0]->nama_petugas }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan_petugas" id="judul" placeholder="Jabatan Petugas" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="tlp_petugas" name="tlp_petugas">Telepon Petugas</label>
                                    <input class="form-control" type="text" name="tlp_petugas" id="tlp_petugas" placeholder="Telepon Petugas" value="{{ $petugas[0]->tlp_petugas }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_petugas" name="alamat_petugas">Alamat Petugas</label>
                                    <input class="form-control" type="text" name="alamat_petugas" id="alamat_petugas" placeholder="Alamat" value="{{ $petugas[0]->alamat_petugas }}" disabled>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('petugas.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection

</html>

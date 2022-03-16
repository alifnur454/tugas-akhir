@extends('appadmin.main')
@section('content')
<div class="container">
    <div class=" form-row">
        <div class="col-lg-12">
            <h3>Tambah</h3>
        </div>
    </div>
    <br>

    @if ($errors->all())
    <div class="alert alert-danger">
        <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="tema" class="col-sm-2 col-form-label">Tema</label>
            <div class="col-sm-10">
                <input type="text" name="tema" class="form-control" id="tema" placeholder="Tema">
            </div>
        </div>
        <div class="form-group row">
            <label for="penokohan" class="col-sm-2 col-form-label">Penokohan</label>
            <div class="col-sm-10">
                <input type="text" name="penokohan" class="form-control" id="penokohan" placeholder="Penokohan">
            </div>
        </div>
        <div class="form-group row">
            <label for="latar" class="col-sm-2 col-form-label">Latar</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="latar" rows="8" cols="80" placeholder="Latar"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="latar" class="col-sm-2 col-form-label">Latar</label>
            <div class="col-sm-10">
                <input type="text" name="latar" class="form-control" id="latar" placeholder="Latar">
            </div>
        </div>
        <!--<div class="form-group row">
                <label for="gambarMahasiswa" class="col-sm-2 col-form-label">Pilih gambar</label>
                <div class="col-sm-10">
                    <input type="file" name="gambarMahasiswa">
                <p class="text-danger">{{ $errors->first('gambarMahasiswa') }}</p>
                </div>
            </div>-->

        <hr>
        <div class="form-group">
            <a href="#" class="btn btn-success">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>

</div>

@endsection
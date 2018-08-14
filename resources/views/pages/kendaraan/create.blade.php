@extends('layouts.app')
@section('content')
    <h5>Tambah Kendaraan</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ action('KendaraanController@store') }}">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="form-group">
                                <label>Nama</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="nama" id="nama" type="text" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Jenis</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <select name="jenis" class="form-control" >
                                    <option value="Roda 2">Roda 2</option>
                                    <option value="Roda 3">Roda 3</option>
                                    <option value="Roda 4">Roda 4</option>
                                    <option value="Bus">Bus</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Warna</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="warna" id="warna" type="text" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Nomor polisi</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="nopol" id="nopol" type="text" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Detail</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <textarea name="detail" id="detail" class="form-control" required=""> </textarea>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="harga" id="harga" type="number" class="form-control" required="">
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

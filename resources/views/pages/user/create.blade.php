@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ action('UserController@store') }}">
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
                                <input name="name" id="name" type="text" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="email" id="email" type="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="password" id="password" type="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <textarea name="alamat" id="alamat" class="form-control" required=""> </textarea>
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

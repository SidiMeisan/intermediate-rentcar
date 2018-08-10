@extends('layouts.app')
@section('content')
    <h5>Data User</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="{{route('user.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>

                                        <th style="width:10%">#</th>
                                        <th style="">Nama</th>
                                        <th style="">Email</th>
                                        <th style="">Alamat</th>
                                        <th style="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $hitung=1 ?>
                                  <?php foreach ($users as $key => $data): ?>
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$hitung}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->name}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{$data->email}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{$data->alamat}}</p>
                                        </td>
                                        <td class="v-align-middle"><a href="#" class="btn">Edit</a> <a href="#" class="btn">Hapus</a>
                                        </td>
                                        <?php $hitung=$hitung+1; ?>
                                    </tr>
                                  <?php endforeach; ?>

                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>2</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>Ko Marvel</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>yahoo@marvel.com</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>Nusa Dua</p>
                                        </td>
                                        <td class="v-align-middle"><a href="#" class="btn">Edit</a> <a href="#" class="btn">Hapus</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection

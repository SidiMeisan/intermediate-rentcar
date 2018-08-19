@extends('layouts.app')
@section('content')
    <h5>Data Kendaraan</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
              <?php if (Auth::user()->status!=0): ?>
                <a href="{{route('kendaraan.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
              <?php endif; ?>
                <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>

                                        <th style="width:10%">#</th>
                                        <th style="">Nama</th>
                                        <th style="">Jenis</th>
                                        <th style="">Warna</th>
                                        <th style="">Harga</th
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $hitung=1 ?>
                                  <?php foreach ($kendaraan as $key => $data): ?>
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$hitung}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->nama}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{$data->jenis}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{{$data->warna}}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>Rp. {{format_uang($data->harga)}} / day</p>
                                        </td>
                                        <?php if (Auth::user()->id==$data->id or Auth::user()->status!=0): ?>
                                          <td class="v-align-middle">
                                            <a href="#" class="btn">Edit</a>
                                            <a href="#" class="btn">Hapus</a>
                                          </td>
                                        <?php endif; ?>
                                        <td class="v-align-middle">
                                          <a href="#" class="btn">Pesan ini</a>
                                        </td>
                                        <?php $hitung=$hitung+1; ?>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection

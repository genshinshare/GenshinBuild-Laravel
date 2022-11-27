@extends('templateadmin')
@section('head')
    <title>Opsi</title>
    <style>
        .judul-tabel {
            margin-top: 10px;
        }
        #tombol-tambah {
            margin-top: 10px;
        }
        #tombol {
            margin-left: 15px;
            margin-bottom: 10px;
            margin-top: -5px;
        }
    </style>
@endsection
@section('body')
<a href="/dashboard/karakter/tambah"><button type="button" class="btn btn-outline-dark" id="tombol-tambah">Tambah Karakter</button></a>
<h3 class="judul-tabel"">Karakter</h3>
<div class="form-group">
    <form action="/dashboard/karakter" method="GET">
        @csrf
    <div class="col-sm-5">
        <input type="search" class="form-control" id="inputPassword3" placeholder="Cari Karakter menggunakan Nama" name="cari_nama_karakter">
    </div>
</div>
<button type="submit" name="submit" value="Save" class="btn btn-success" id="tombol">Cari</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Alias</th>
        <th scope="col">Vision</th>
        <th scope="col">Asal</th>
        <th scope="col">Tipe Senjata</th>
        <th scope="col">Tipe Model</th>
        <th scope="col">Tanggal Rilis</th>
        <th scope="col">Opsi</th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
        @foreach($karakter as $k) 
            <tr>
                <td>{{$k->id_karakter}}</td>
                <td>{{$k->nama_karakter}}</td>
                <td>{{$k->alias}}</td>
                <td>
                    @if ($k->vision == 'Pyro') Pyro
                    @elseif ($k->vision == 'Cryo') Cryo
                    @elseif ($k->vision == 'Hydro') Hydro
                    @elseif ($k->vision == 'Electro') Electro
                    @elseif ($k->vision == 'Dendro') Dendro
                    @elseif ($k->vision == 'Anemo') Anemo
                    @elseif ($k->vision == 'Geo') Geo
                    @endif
                </td>
                <td>
                    @if ($k->asal == 'Monstadt') Monstadt
                    @elseif ($k->asal == 'Liyue') Liyue
                    @elseif ($k->asal == 'Inazuma') Inazuma
                    @elseif ($k->asal == 'Sumeru') Sumeru
                    @elseif ($k->asal == 'Fontaine') Fontaine
                    @elseif ($k->asal == 'Natlan') Natlan
                    @elseif ($k->asal == 'Snezhnaya') Snezhnaya
                    @elseif ($k->asal == 'Khaenriah') Khaenriah
                    @elseif ($k->asal == 'Unknown') Unknown
                    @endif
                </td>
                <td>
                    @if ($k->tipe_senjata == 'Sword') Sword
                    @elseif ($k->tipe_senjata == 'Claymore') Claymore
                    @elseif ($k->tipe_senjata == 'Polearm') Polearm
                    @elseif ($k->tipe_senjata == 'Bow') Bow
                    @elseif ($k->tipe_senjata == 'Catalyst') Catalyst
                    @endif
                </td>
                <td>
                    @if ($k->tipe_model == 'L_pendek') Laki-laki Pendek
                    @elseif ($k->tipe_model == 'L_sedang') Laki-laki Sedang
                    @elseif ($k->tipe_model == 'L_tinggi') Laki-laki Tinggi
                    @elseif ($k->tipe_model == 'P_pendek') Perempuan Pendek
                    @elseif ($k->tipe_model == 'P_sedang') Perempuan Sedang
                    @elseif ($k->tipe_model == 'P_tinggi') Perempuan Tinggi
                    @endif
                </td>
                <td>{{$k->tanggal_rilis}}</td>
                <td><a href="/dashboard/karakter/edit={{$k->id_karakter}}"><button type="button" class="btn btn-outline-dark">Edit</button></a></td>
                <td>
                    <form action="/dashboard/karakter/hapus={{$k->id_karakter}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>
@endsection
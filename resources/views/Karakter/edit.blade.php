@extends('templateadmin')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit Karakter {{$karakter->nama_karakter}}</title>
    <style>
      .custom-select {
        margin-bottom: 15px;
        margin-left: 15px;
      }
      h2 {
        margin-top: 10px;
        margin-left: 15px;
        color: black;
      }
    </style>
@endsection
@section('body')
  <h2>Edit {{$karakter->nama_karakter}}</h2>
    <form action="/dashboard/karakter/{{$karakter->id_karakter}}" method="POST">
    @method('put')
      @csrf
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Karakter</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Nama" name="nama_karakter" value="{{$karakter->nama_karakter}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Alias</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Alias" name="alias" value="{{$karakter->alias}}">
          </div>
        </div>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Vision</label>
        <select class="custom-select w-50" name="vision">
          <option selected>Pilih Vision Karakter</option>
          <option @if ($karakter->vision == 'Pyro') selected @endif value="Pyro">Pyro</option>
          <option @if ($karakter->vision == 'Cryo') selected @endif value="Cryo">Cryo</option>
          <option @if ($karakter->vision == 'Hydro') selected @endif value="Hydro">Hydro</option>
          <option @if ($karakter->vision == 'Electro') selected @endif value="Electro">Electro</option>
          <option @if ($karakter->vision == 'Dendro') selected @endif value="Dendro">Dendro</option>
          <option @if ($karakter->vision == 'Anemo') selected @endif value="Anemo">Anemo</option>
          <option @if ($karakter->vision == 'Geo') selected @endif value="Geo">Geo</option>
        </select>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Asal</label>
        <select class="custom-select w-50" name="asal">
          <option>Pilih Asal</option>
          <option @if ($karakter->asal == 'Monstadt') selected @endif value="Monstadt">Monstadt</option>
          <option @if ($karakter->asal == 'Liyue') selected @endif value="Liyue">Liyue</option>
          <option @if ($karakter->asal == 'Inazuma') selected @endif value="Inazuma">Inazuma</option>
          <option @if ($karakter->asal == 'Sumeru') selected @endif value="Sumeru">Sumeru</option>
          <option @if ($karakter->asal == 'Fontaine') selected @endif value="Fontaine">Fontaine</option>
          <option @if ($karakter->asal == 'Natlan') selected @endif value="Natlan">Natlan</option>
          <option @if ($karakter->asal == 'Snezhnaya') selected @endif value="Snezhnaya">Snezhnaya</option>
          <option @if ($karakter->asal == 'Khaenriah') selected @endif value="Khaenriah">Khaenriah</option>
          <option @if ($karakter->asal == 'Unknown') selected @endif value="Unknown">Unknown</option>
        </select>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Tipe Senjata</label>
        <select class="custom-select w-50" name="tipe_senjata">
          <option>Pilih Tipe Senjata</option>
          <option @if ($karakter->tipe_senjata == 'Sword') selected @endif value="Sword">Sword</option>
          <option @if ($karakter->tipe_senjata == 'Claymore') selected @endif value="Claymore">Claymore</option>
          <option @if ($karakter->tipe_senjata == 'Polearm') selected @endif value="Polearm">Polearm</option>
          <option @if ($karakter->tipe_senjata == 'Bow') selected @endif value="Bow">Bow</option>
          <option @if ($karakter->tipe_senjata == 'Catalyst') selected @endif value="Catalyst">Catalyst</option>
        </select>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Tipe Model</label>
        <select class="custom-select w-50" name="tipe_model">
          <option selected>Pilih Tipe Model</option>
          <option @if ($karakter->tipe_model == 'L_pendek') selected @endif value="L_pendek">Laki-laki Pendek</option>
          <option @if ($karakter->tipe_model == 'L_sedang') selected @endif value="L_sedang">Laki-laki Sedang</option>
          <option @if ($karakter->tipe_model == 'L_tinggi') selected @endif value="L_tinggi">Laki-laki Tinggi</option>
          <option @if ($karakter->tipe_model == 'P_pendek') selected @endif value="P_pendek">Perempuan Pendek</option>
          <option @if ($karakter->tipe_model == 'P_sedang') selected @endif value="P_sedang">Perempuan Sedang</option>
          <option @if ($karakter->tipe_model == 'P_tinggi') selected @endif value="P_tinggi">Perempuan Tinggi</option>
        </select>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Rilis</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="inputPassword3" placeholder="Masukkan Tanggal Rilis" name="tanggal_rilis" value="{{$karakter->tanggal_rilis}}">
            </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Lore</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Lore" name="lore" value="{{$karakter->lore}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Karakter</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi Karakter" name="deskripsi_karakter" value="{{$karakter->deskripsi_karakter}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Talenta Normal</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Talenta Normal" name="nama_talenta_normal" value="{{$karakter->nama_talenta_normal}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi" name="deskripsi_talenta_normal" value="{{$karakter->deskripsi_talenta_normal}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_normal" value="{{$karakter->anjuran_normal}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Talenta Skill</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Talenta Skill" name="nama_talenta_skill" value="{{$karakter->nama_talenta_skill}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi" name="deskripsi_talenta_skill" value="{{$karakter->deskripsi_talenta_skill}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_skill" value="{{$karakter->anjuran_skill}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Talenta Burst</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Talenta Burst" name="nama_talenta_burst" value="{{$karakter->nama_talenta_burst}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi" name="deskripsi_talenta_burst" value="{{$karakter->deskripsi_talenta_burst}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_burst" value="{{$karakter->anjuran_burst}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Set Artefak</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Set Artefak" name="set_artefak" value="{{$karakter->set_artefak}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_artefak" value="{{$karakter->anjuran_artefak}}">
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-sm-5">
            <button type="submit" name="submit" value="Save" class="btn btn-dark">Selesai</button>
            <a href="/dashboard/karakter"><button type="button" class="btn btn-outline-dark" id="tombol">Batal</button></a>
          </div>
        </div>
    </form>
@endsection
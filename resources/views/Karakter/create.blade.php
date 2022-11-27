@extends('templateadmin')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tambah Karakter</title>
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
  <h2>Tambah Karakter</h2>
    <form action="/dashboard/karakter/store" method="POST">
      @csrf
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Karakter</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Nama" name="nama_karakter">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Alias</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Alias" name="alias">
          </div>
        </div>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Vision</label>
        <select class="custom-select w-50" name="vision">
          <option selected>Pilih Vision Karakter</option>
          <option value="Pyro">Pyro</option>
          <option value="Cryo">Cryo</option>
          <option value="Hydro">Hydro</option>
          <option value="Electro">Electro</option>
          <option value="Dendro">Dendro</option>
          <option value="Anemo">Anemo</option>
          <option value="Geo">Geo</option>
        </select>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Asal</label>
        <select class="custom-select w-50" name="asal">
          <option selected>Pilih Asal</option>
          <option value="Monstadt">Monstadt</option>
          <option value="Liyue">Liyue</option>
          <option value="Inazuma">Inazuma</option>
          <option value="Sumeru">Sumeru</option>
          <option value="Fontaine">Fontaine</option>
          <option value="Natlan">Natlan</option>
          <option value="Snezhnaya">Snezhnaya</option>
          <option value="Khaenriah">Khaenriah</option>
          <option value="Unknown">Unknown</option>
        </select>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Tipe Senjata</label>
        <select class="custom-select w-50" name="tipe_senjata">
          <option selected>Pilih Tipe Senjata</option>
          <option value="Sword">Sword</option>
          <option value="Claymore">Claymore</option>
          <option value="Polearm">Polearm</option>
          <option value="Bow">Bow</option>
          <option value="Catalyst">Catalyst</option>
        </select>
        <label for="inputEmail3" class="col-sm-6 col-form-label">Tipe Model</label>
        <select class="custom-select w-50" name="tipe_model">
          <option selected>Pilih Tipe Model</option>
          <option value="L_pendek">Laki-laki Pendek</option>
          <option value="L_sedang">Laki-laki Sedang</option>
          <option value="L_tinggi">Laki-laki Tinggi</option>
          <option value="P_pendek">Perempuan Pendek</option>
          <option value="P_sedang">Perempuan Sedang</option>
          <option value="P_tinggi">Perempuan Tinggi</option>
        </select>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Rilis</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="inputPassword3" placeholder="Masukkan Tanggal Rilis" name="tanggal_rilis">
            </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Lore</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Lore" name="lore">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Karakter</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi Karakter" name="deskripsi_karakter">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Talenta Normal</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Talenta Normal" name="nama_talenta_normal">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi" name="deskripsi_talenta_normal">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_normal">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Talenta Skill</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Talenta Skill" name="nama_talenta_skill">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi" name="deskripsi_talenta_skill">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_skill">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Talenta Burst</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Talenta Burst" name="nama_talenta_burst">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi" name="deskripsi_talenta_burst">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_burst">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Set Artefak</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Set Artefak" name="set_artefak">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Anjuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Anjuran" name="anjuran_artefak">
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-sm-5">
            <button type="submit" name="submit" value="Save" class="btn btn-dark">Tambah</button>
            <a href="/dashboard/karakter"><button type="button" class="btn btn-outline-dark" id="tombol">Batal</button></a>
          </div>
        </div>
      </div>
    </form>
@endsection
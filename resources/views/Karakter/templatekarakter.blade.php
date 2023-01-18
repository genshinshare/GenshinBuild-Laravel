@extends('template')
@section('head')
    <link rel="stylesheet" href="css/style.css">
    <title>{{$karakter->nama_karakter}} - GenshinBuild</title>
    <link rel="icon" href="{{ asset('logo.PNG')}}">
    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #f3eaea;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #211146;
        }
    </style>
@endsection
@section('body')
    <div class="container">
        <div class="kotak-karakter">
            <h1 class="text-center">{{$karakter->nama_karakter}}</h1>
            <hr style="border-width: 5px;" id="{{$karakter->vision}}Border">
            <div class="bagi2">
                <div class="bagi2-sisi-kiri">
                    <div class="lore-karakter-inggris font-italic text-center">
                        <p>"{{$karakter->lore}}"</p>
                    </div>
                    <div class="deskripsi-karakter">
                        <p>{{$karakter->deskripsi_karakter}}</p>
                    </div>
                    <div class="talenta" id="{{$karakter->vision}}Background">
                        <div class="bagi2">
                            <div class="bagi2rata-sisi-kiri">
                                <h4>{{$karakter->nama_talenta_normal}}</h4>
                                <p>{{$karakter->deskripsi_talenta_normal}}</p>
                            </div>
                            <div class="bagi2rata-sisi-kanan text-center">
                                <img src="gambar/{{$karakter->nama_karakter}}/Normal_{{$karakter->nama_karakter}}.webp" class="img-fluid" alt="{{$karakter->nama_talenta_normal}}" style="height:6rem;">
                            </div>
                        </div>
                        <p style="margin: 10px;">{{$karakter->anjuran_normal}}</p>
                    </div>
                    <br>
                    <div class="talenta" id="{{$karakter->vision}}Background">
                        <div class="bagi2">
                            <div class="bagi2rata-sisi-kiri">
                                <h4>{{$karakter->nama_talenta_skill}}</h4>
                                <p>{{$karakter->deskripsi_talenta_skill}}</p>
                            </div>
                            <div class="bagi2rata-sisi-kanan text-center">
                                <img src="gambar/{{$karakter->nama_karakter}}/Skill_{{$karakter->nama_karakter}}.webp" class="img-fluid" alt="{{$karakter->nama_talenta_skill}}" style="height:6rem;">
                            </div>
                        </div>
                        <p style="margin: 10px;">{{$karakter->anjuran_skill}}</p>
                    </div>
                    <br>
                    <div class="talenta" id="{{$karakter->vision}}Background">
                        <div class="bagi2">
                            <div class="bagi2rata-sisi-kiri">
                                <h4>{{$karakter->nama_talenta_burst}}</h4>
                                <p>{{$karakter->deskripsi_talenta_burst}}</p>
                            </div>
                            <div class="bagi2rata-sisi-kanan text-center">
                                <img src="gambar/{{$karakter->nama_karakter}}/Burst_{{$karakter->nama_karakter}}.webp" class="img-fluid" alt="{{$karakter->nama_talenta_burst}}" style="height:6rem;">
                            </div>
                        </div>
                        <p style="margin: 10px;">{{$karakter->anjuran_burst}}</p>
                    </div>
                    <br>
                    <div class="artefak">
                        <h4 style="margin: 10px;">Rekomendasi Artefak</h4>
                        <p style="margin: 10px;" class="font-weight-bold">{{$karakter->set_artefak}}</p>
                        <p style="margin: 10px;">{{$karakter->anjuran_artefak}}</p>
                    </div>
                </div>
                <div class="bagi2-sisi-kanan text-center">
                    <img src="gambar/{{$karakter->nama_karakter}}/Character_{{$karakter->nama_karakter}}_Card.webp" class="img-fluid" alt="{{$karakter->nama_karakter}}" style="width: 17rem;">
                    <div id="{{$karakter->vision}}Background" class="detail-karakter">
                        <p><p class="font-weight-bold">Alias</p>{{$karakter->alias}}</p>
                        <p><p class="font-weight-bold">Vision</p>{{$karakter->vision}}</p>
                        <p><p class="font-weight-bold">Asal</p>{{$karakter->asal}}</p>
                        <p><p class="font-weight-bold">Tipe Senjata</p>{{$karakter->tipe_senjata}}</p>
                        <p><p class="font-weight-bold">Tipe Model</p>
                            @if ($karakter->tipe_model == 'L_pendek') Laki-laki Pendek
                            @elseif ($karakter->tipe_model == 'L_sedang') Laki-laki Sedang
                            @elseif ($karakter->tipe_model == 'L_tinggi') Laki-laki Tinggi
                            @elseif ($karakter->tipe_model == 'P_pendek') Perempuan Pendek
                            @elseif ($karakter->tipe_model == 'P_sedang') Perempuan Sedang
                            @elseif ($karakter->tipe_model == 'P_tinggi') Perempuan Tinggi
                            @endif
                        </p>
                        <p><p class="font-weight-bold">Tanggal Rilis</p>{{$karakter->tanggal_rilis}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
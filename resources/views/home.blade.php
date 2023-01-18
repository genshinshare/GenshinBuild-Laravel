@extends('template')
@section('head')
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="{{ asset('logo.PNG')}}">
@endsection
@section('body')
    <div class="container" style="margin-top:10px; margin-bottom:10px;">
        <div class="judul-home">
            <h2 class="text-center">Genshin Build</h2>
            <h4 class="text-center">Tempatnya informasi mengenai karakter Genshin Impact</h4>
        </div>
        <div class="kotak-karakter">
            <h1 class="text-center">Karakter</h1>
            <br>
            <div class="container">
                <div class="row row-cols-4">
                  @foreach ($karakter as $k)
                    <div class="col zum">
                        <a href="/karakter={{$k->id_karakter}}" class="karakter-link-card">
                            <div class="card" style="width: 15rem;">
                                <img src="gambar/{{$k->nama_karakter}}/Character_{{$k->nama_karakter}}_Thumb.webp" class="card-img-top" alt="{{$k->nama_karakter}}">
                                <div class="card-body">
                                    <p class="card-text text-center" id="{{$k->vision}}Text">{{$k->nama_karakter}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
    </script>
@endsection
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <div id="app">
                <app></app>
            </div>
        @endauth

        @guest
            <h1>Anasayfa</h1>
            <p class="lead">Uygulamayı kullanmak için lütfen giriş yapınız.</p>
        @endguest
    </div>
    <script src="{{mix('js/app.js')}}">

    </script>
@endsection

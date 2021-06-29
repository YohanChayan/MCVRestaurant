<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="{{{ asset('img/favicon.png')}}}" rel="icon">
    <link href="{{{ asset('img/apple-touch-icon.png')}}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <style> .user_icon{height: 50px; width: 50px;} </style>

  <link href="{{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/icofont/icofont.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/boxicons/css/boxicons.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/animate.css/animate.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/venobox/venobox.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('css/style.css')}}}" rel="stylesheet">
   
@can('manager-Gerente')

    <h2 class="text-center">Bienvenido al Sistema MCV Gerente {{ Auth::user()->name }}</h2>
    <img src="{{ url('img/welcome-gerente.png') }}" class="mx-auto d-block"/>
                    
@endcan

@can('manager-JefeMesero')

    <h2 class="text-center">Bienvenido al Sistema MCV Jefe de Meseros {{ Auth::user()->name }}</h2>
    <img src="{{ url('img/welcome-jefemesero.png') }}" class="mx-auto d-block"/>            
    
@endcan

<!-- @can('manager-Mesero')

                <h1>Ambito Mesero</h1>
@endcan -->

        </div>
    </div>
</x-app-layout>

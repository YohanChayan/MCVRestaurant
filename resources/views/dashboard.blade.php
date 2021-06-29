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
            <!-- <section id="testimonials" class="testimonials"> -->
                <div class="container">
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <img src="{{{ asset('img/user_icon.png')}}}" class="user_icon" alt="">
                            <h4>Mesero: Saul Goodman</h4>
                            <p>Se encuentra atendiendo a las mesas:</p>
                            <ul>
                                <li> ID: 1</li>
                                <li> ID: 3</li>
                                <li> ID: 9</li>
                            </ul>
                        </div>

                        <div class="testimonial-item">
                            <img src="{{{ asset('img/user_icon.png')}}}" class="user_icon" alt="">
                            <h4>Mesero: Sara Wilsson</h4>
                            <p>Se encuentra atendiendo a las mesas:</p>
                            <ul>
                                <li> ID: 2</li>
                                <li> ID: 13</li>
                                <li> ID: 4</li>
                            </ul>
                            
                        </div>

                        <div class="testimonial-item">
                            <img src="{{{ asset('img/user_icon.png')}}}" class="user_icon" alt="">
                            <h4>Mesero: Jena Karlis</h4>
                            <p>Se encuentra atendiendo a las mesas: </p>
                            <ul>
                                <li> ID: 10</li>
                                <li> ID: 8</li>
                                <li> ID: 6</li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            <!-- </section> -->
      
@endcan

<!-- @can('manager-Mesero')

                <h1>Ambito Mesero</h1>
@endcan -->

        </div>
    </div>
</x-app-layout>

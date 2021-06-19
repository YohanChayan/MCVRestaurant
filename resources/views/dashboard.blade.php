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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <style> .user_icon{height: 50px; width: 50px;} </style>

  <link href="{{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/icofont/icofont.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/boxicons/css/boxicons.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/animate.css/animate.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/venobox/venobox.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('css/style.css')}}}" rel="stylesheet">
   
@can('manager-Gerente')


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <section id="why-us" class="why-us">
                    <div class="container">
                        <div class="section-title">
                            <h2>Informacion general</h2>
                        </div>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="box">
                                <span>Estadistica de Jefes de meseros</span>
                                <h3>Porcentajes:</h3>
                                <ul>
                                    <li><h4> Jefe de meseros 1:  <span>80%</span> </h4></li>
                                    <li><h4> Jefe de meseros 2: <span>50%</span> </h4></li>
                                    <li><h4> Jefe de meseros 3: <span>75%</span> </h4></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>Estadistica de calidad por parte de los Jefes de meseros</span>
                                <h4>Porcentajes General: 81%</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>Sucursal: Guadalajara</span>
                                <h4>Direccion: </h4>
                                <h5>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</h5>
                                <p>Centro Universitario de Ciencias Exactas e Ingenierías, dirección</p>
                            </div>
                        </div>
                    </div>
                </div>
                </section><!-- End Why Us Section -->
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

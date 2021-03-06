<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
         <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
           <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
        <title>Digidata</title>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div>
        <img src="{{ asset('images/logo.png')}}" class="logo" loading="lazy">    
        </div>
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Digidata</font></font></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Navegación de palanca">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <!-- boton mmodal-->
                <div>
                    <button class="btn btn-secondary" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><font><font>Iniciar sesion</font></font></button>
                </div>
                
                <div class="antialiased">
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                           <div class="flex justify-center pt-8 sm:justify-start sm:pt-0"></div>
                                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                 <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Iniciar Sesion</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-12">
                                                                <div class="card-body">
                                                                    <form method="POST" action="{{ route('login') }}">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>
                                                                                <div class="col-md">
                                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                                        @error('email')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                </div>
                                                                        </div>        
                                                                        <div class="form-group row mt-2">
                                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                                                                <div class="col-md">
                                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                                                        @error('password')
                                                                                           <span class="invalid-feedback" role="alert">
                                                                                               <strong>{{ $message }}</strong>
                                                                                           </span>
                                                                                        @enderror
                                                                                </div>
                                                                        </div>                
                                                                        <div class="container mt-4">
                                                                            <div class="row">
                                                                            <div class="container" >
                                                                                <button type ="submit" class=" btn btn-outline-primary ">
                                                                                    {{ __('Acseso') }}    </button>
                                                                                <a class="btn btn-outline-primary"  href="{{ route('register') }}">
                                                                                {{ __('Registrarse') }}
                                                                            </a>
                                                                           </div>
                                                                                                                                                       
                                                                           </div>
                                                                            
                                                                        </div>   
                                                                        <div class="row" >
                                                                             @if (Route::has('password.request'))
                                                                                <div class="container col-6 b" >
                                                                                    <a class="btn btn-link  mt-2" href="{{ route('password.request') }}">
                                                                                        {{ __('Olvide mi contraseña') }}
                                                                                    </a>
                                                                                </div>    
                                                                            @endif        
                                                                        </div>                                                               
                         
                                                                    </form>                                                                       
                                                                </div>  
                                                            </div>           
                                                        </div>               
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
     </nav>
<div class="card  mb-3  " id="fondo">
  
</div> 

    
</html>


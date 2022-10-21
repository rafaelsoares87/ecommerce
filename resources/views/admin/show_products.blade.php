<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smart Games</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



</head>

<body class="">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-xl bg-light">
            <div class="container">
                <a class="navbar-brand text-success " href="{{route('home')}}" style="font-weight: bold">SMART GAMES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="search" class="form-control" placeholder="Buscar games" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            <li class="nav-item">
                                @auth
                                    <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Minha
                                        Área</a>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('register') }}">Cadastrar</a>
                                    @endif
                                </li>
                            @endauth
                            </li>
                        @endif

                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <!-- Main - Products-->
    <main class="pt-5">
        <div class="container card border-white ">
           
            <!-- Products/Catgories -->
            <div class="row">
               
                <div class="col-md-10">
                    <div class="row m-3">
                        <div class="col-lg-6">
                            <div class="card border-success" >
                                <img src="{{ url("storage/{$products->image}")}}" class="img-fluid" alt=""  >
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body">
                                <h2>{{$products->title_product}}</h2>
                                <h2 class="text-success">R${{$products->price_production}}</h2>
                                <h3 class="card-text mb-3"><small class="text-muted">A vista</small></h3>
                                <p class="card-text mb-3"><p>{{$products->description_product}}</p></p>
                                <div >
                                    <div class="d-grid gap-2 ">
                                        <a href="" class="btn btn-lg btn-success" type="button">  COMPRAR AGORA</a>
                                        <a href="" class="btn btn-lg btn-dark" type="button"> <i class="fa-solid fa-cart-shopping"></i> ADICIONAR NO CARRINHO</a>
                                       
        
                                    </div>
                                    
        
                                </div>
    
                            </div>
                        </div>
                       
                    </div>

                </div>

                


            </div>

        </div>
    </main>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d113113a6e.js" crossorigin="anonymous"></script>
</body>

</html>
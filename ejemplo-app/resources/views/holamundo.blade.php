<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilos.css')}}">

</head>
<body>
    @extends('layout')
    <!-- @include('components/navbar') -->
    <!-- <div class="container"> -->
        @section('contenido')
        <div class='row mt-3'>
            <h2>
                <!-- <?=e($titulo)?> -->
                {{$titulo}}   
                <hr>  
            </h2>
        </div>
        <div class='row mt-3'>
            <div class ='col-6 border'>
          <img src="{{asset('assets/img/short.jpg')}}">
        </div>
        <div class ='col-6 border'>
             <ul>
            @forelse($usuarios as $usuario)
            <li>{{$usuario}}</li>
            @empty
            <p>No hay usuarios</p>
            
            @endforelse
            </ul>
        </div>
        <div class='row mt-3'>
            <div class ='col-12'>
            <hr>
            {{date('d-m-y')}}
            </div>
        </div>
 
    </div>

    <!-- @include('components/footer') -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
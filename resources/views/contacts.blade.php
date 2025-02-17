@extends('layouts.main_layout')
@section('content') 
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="display-6 text-info">
                    Esta pagina pode ser vista mesmo sem login
                </p>
                <hr>

                @auth
                    voce esta autenticado                

                @endauth
            </div>
        </div>
    </div>
@endsection
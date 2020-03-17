@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <b> Selamat Datang...</b><br>
                    You are logged in! <br><br>



                     <a href="{{ url('/registeradmin') }}">Register Admin |</a>
                      <a href="{{ url('/loginadmin') }}">| Login Admin</a><br><br>


                    <table border="2">

                    <td> <a href="https://laravel.com/docs">Docs</a> </td>  
                    <td> <a href="https://laracasts.com">Laracasts</a> </td> 
                    <td> <a href="https://laravel-news.com">News</a> </td> 
                    <td> <a href="https://blog.laravel.com">Blog</a> </td> 
                    <td> <a href="https://nova.laravel.com">Nova</a> </td> 
                    <td> <a href="https://forge.laravel.com">Forge</a> </td> 
                    <td> <a href="https://vapor.laravel.com">Vapor</a> </td> 
                    <td> <a href="https://github.com/laravel/laravel">GitHub</a> </td> 
            
                     
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="panel panel-success">
                                    <div class="panel-heading">List of Game of Thrones Characters</div>

                                        @if(Auth::check())

                                             <!-- Table -->
                                            <table class="table">
                                                <tr>
                                                    <th>Character</th>
                                                    <th>Real Name</th>
                                                </tr>

                                                @foreach($characters as $key => $value)
                                                    <tr>
                                                        <td></td><td></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        @endif
                                </div>

                                @if(Auth::guest())
                                    <a href="/login" class="btn btn-info">You need to login to see the list 😜😜 >></a>
                                @endif
                            </div>
                        </div>
                    </div>
        </div>
@endsection

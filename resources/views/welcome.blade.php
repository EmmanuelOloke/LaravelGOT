@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
                    <div class="container">
                        <div class="row" style="padding-top: 20px;">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="panel panel-success">
                                    <div class="panel-heading" style="text-align: center;">List of Game of Thrones Characters</div>

                                        @if(Auth::check())

                                             <!-- Table -->
                                            <table class="table">
                                                <tr>
                                                    <th><div style="text-align: center; text-transform: uppercase;">Character</div></th>
                                                    <th><div style="text-align: center; text-transform: uppercase;">Real Name</div></th>
                                                </tr>

                                                @foreach($characters as $key => $value)
                                                    <tr>
                                                        <td><div style="text-align: center; text-transform: uppercase;">{{$key}}</div></td><td><div style="text-align: center; text-transform: uppercase;">{{$value}}</div></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        @endif
                                </div>

                                @if(Auth::guest())
                                    <a href="{{ url('/login') }}" class="btn btn-info">You need to login to see the list 😜😜</a>
                                @endif
                            </div>
                        </div>
                    </div>
        </div>
@endsection

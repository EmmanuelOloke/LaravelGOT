@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    
                    <div style="padding-top: 10px;">
                        <a href="{{ url('/') }}" class="btn btn-success">
                            SEE LIST
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

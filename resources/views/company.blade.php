@extends('layouts.app', ['authgroup'=>'company'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">企業 Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <h3>{{ Auth::user()->name }}さん！</h3><br>
                    <h4>ログアウトしますか？</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログイン成功</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  ログインが成功しました！
                  
                  <form method="GET" action="{{route('contact.index')}}">
                    @csrf  
                  <input class="btn btn-info" type="submit" value="一覧に戻る">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

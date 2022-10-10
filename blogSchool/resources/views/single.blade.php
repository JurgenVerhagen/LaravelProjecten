@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card card-header">{{ __( $posts->title ) }}</div>
                <div class="card-body">
                    <h5>{{ $posts->slug }}</h5></br>
                    <p>{{ $posts->artikel }}</p>
                    <i>Geplaatst door: {{ $posts->name }} op {{ $posts->created_at }}</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
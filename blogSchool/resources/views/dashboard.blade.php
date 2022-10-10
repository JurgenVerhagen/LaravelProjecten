@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <div class="card card-header">{{ __('Blogs') }}</div>
                                @include('partials._read', [ 'posts' => $posts])
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @include('partials._create')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card card-header">{{ __( $post->title ) }}</div>
                <div class="card-body">
                    <a href="{{ route('single', ['slug'=>$post->slug])}}">
                        <h5>{{ $post->slug }}</h5>
                    </a></br>
                    <i>Geplaatst door: {{ $post->name }} op {{ $post->created_at }}</i>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row justify-content-center">
    {{ $posts->links() }}
</div>
@endsection
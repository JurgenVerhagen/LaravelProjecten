@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div class="card card-primary">
                <div class="card card-header">{{ __('Edit') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update', ['post'=>$post->id]) }}">
                        @csrf
                        @method('PUT')
                        <table class="table">
                            <tr>
                                <td>{{ __('Title') }}</td>
                                <td><input type="text" class="input-field" name="title" value="{{ $post->title }}" /></td>
                            </tr>
                            <tr>
                                <td>{{ __('Slug') }}</td>
                                <td><input type="text" class="input-field" name="slug" value="{{ $post->slug }}" /></td>
                            </tr>
                            <tr>
                                <td>{{ __('Article') }}</td>
                                <td><textarea type="text" name="artikel" class="input-field" cols="50" rows="10" value="{{ $post->artikel }}"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan='2'>
                                    <input type="submit" class="btn btn-colour-primary" value="{{ __('Update Blog') }}" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
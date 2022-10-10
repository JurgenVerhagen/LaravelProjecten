<div class="card-body">
    <table class="table">
        <tr>
            <th>{{ __('User') }}</th>
            <th>{{ __('Title') }}</th>
            <th>{{ __('Slug') }}</th>
            <th>{{ __('Created_at') }}</th>
            <th>{{ __('Updated_at') }}</th>
            <th>{{ __('Edit') }}</th>
            <th>{{ __('Delete') }}</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->name }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            <td>
                <a href="{{ route('edit', ['post'=>$post->id])}}" class="btn btn-colour-primary"> {{ __('Edit') }} </a>
            </td>
            <form method="POST" action="{{ route('destroy', ['post'=>$post->id])}}" id="delete-post-form">
                @csrf
                @method('delete')
                <td>
                    <button class="btn btn-colour-primary"> {{ __('Delete') }} </button>
                </td>
            </form>
        </tr>
        @endforeach
    </table>
</div>
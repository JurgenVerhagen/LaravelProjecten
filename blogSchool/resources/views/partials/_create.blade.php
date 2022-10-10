<div class="card card-primary">
    <div class="card card-header">{{ __('Add Blog') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('save') }}">
            @csrf
            <table class="table">
                <tr>
                    <td>{{ __('Title') }}</td>
                    <td><input type="text" class="input-field" name="title" placeholder="{{ __('Title') }}" /></td>
                </tr>
                <tr>
                    <td>{{ __('Slug') }}</td>
                    <td><input type="text" class="input-field" name="slug" placeholder="{{ __('Slug') }}" /></td>
                </tr>
                <tr>
                    <td>{{ __('Article') }}</td>
                    <td><textarea type="text" name="artikel" class="input-field" cols="50" rows="10" placeholder="{{ __('Article') }}"></textarea></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <input type="submit" class="btn btn-colour-primary" value="{{ __('Add Blog') }}" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
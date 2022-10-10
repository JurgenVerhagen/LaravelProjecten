@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">

                    <form method = "POST" action = "{{action('App\Http\Controllers\StorageUpdateController@update', ['id'=>$data->id])}}">
                        @csrf
                        <table>
                        <tr>
                        <td>Product</td>
                        <td><input type="text" name="product" value="{{ $data->product }}"/></td>
                        </tr>
                        <tr>
                        <td>Aantal</td>
                        <td><input type="number" name="amount" value="{{ $data->amount }}"/></td>
                        </tr>

                        <td colspan = '2'>
                        {{ method_field('PUT') }}
                        <input type = "submit" value = "Update"/>
                        </td>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

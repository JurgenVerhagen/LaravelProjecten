@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Voorraad') }}</div>

                <div class="card-body">
                    <tabel>
                        <tr>
                            <th> product </th>
                            <th> aantal </th>
                            <th> update </th>
                            <th> verwijderen </th>
                        </tr></br>
                        @foreach($storageProduct as $value => $data)
                        <tr>   
                            <td> {{$data->product}} </td>
                            <td> {{$data->amount}} </td> 
                            <td>
                                <a href="{{action('App\Http\Controllers\StorageUpdateController@edit', ['id'=>$data->id])}}" class="btn btn-success"> Edit </a>
                            </td>
                            <td>
                                <a href="{{action('App\Http\Controllers\StorageUpdateController@delete', ['id'=>$data->id])}}" class="btn btn-secondary"> Delete </a> 
                            </td>
                            </br>       
                        </tr>
                        @endforeach
                    </table>
                </div>
                

                <div class="card-header">{{ __('Toevoegen') }}</div>

                <div class="card-body">

                    <form action = "submit" method = "POST">
                        @csrf
                        <table>
                        <tr>
                        <td>Product</td>
                        <td><input type="text" name="product" placeholder="product"/></td>
                        </tr>
                        <tr>
                        <td>Aantal</td>
                        <td><input type="number" name="amount" placeholder="aantal"/></td>
                        </tr>

                        <tr>
                        <td colspan = '2'>
                        <input type = "submit" class="btn btn-primary" value = "Add product"/>
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

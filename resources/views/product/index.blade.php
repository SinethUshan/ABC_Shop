@extends('layouts.app')

@section('content')

    <div class="container px-4">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <br><br>
                    <div class="pull-center">
                        <a class="btn btn-outline-success" href="{{route('product.create')}}"> Add New Product</a>
                        <a class="btn btn-outline-danger" href="{{ url('/') }}"> Back</a>
                    </div>
                </div>

            </div>
            <br>

            <table class="table table-dark">
                <tr>
                    <th>Product</th>
                    <th>Product Price</th>
                    <th>Category</th>
                    <th>Edit</th>


                </tr>

                @foreach($data as $data)

                    <tr>
                        <td>{{$data->product_name}}</td>
                        <td>{{$data->product_price}}</td>
                        <td>{{$data->category?->cat_name}}</td>

                        <td>
                            <form action="{{route('product.destroy',$data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-primary" href="{{route('product.edit',$data->id) }}">Edit</a>

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>


                        </td>

                    </tr>
                @endforeach

            </table>
    </div>

@endsection

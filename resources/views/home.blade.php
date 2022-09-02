@extends('layouts.app')

@section('content')


        <div class="col-11">
            <div class="card">
                <h5 class="card-header">Manage Products
                    <a href="{{ url('product') }}" class="btn btn-primary" title="Add New Contact" style="margin-left: 40px">
                     Manage Products 
                    </a></h5>

                    <h5 class="card-header">Manage Categories
                    <a href="{{ url('category') }}" class="btn btn-warning" title="Add New Contact" style="margin-left: 25px">
                    Manage Category 
                    </a></h5>

                    <br>

                <table class="table table-dark">
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Category</th>

                    </tr>

                    @foreach($product as $data)

                        <tr>
                            <td>{{$data->product_name}}</td>
                            <td>{{$data->product_price}}</td>
                            <td>{{$data->category?->cat_name}}</td>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container px-4">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    
                    <a href="{{route('category.create') }}" class="btn btn-outline-success" title="Add New Contact" style="margin-left: 25px">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Category
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-outline-danger" title="Add New Contact" style="margin-left: 25px">
                        <i class="fa fa-plus" aria-hidden="true"></i>  Back
                    </a>
                    </div>
                    </div>
                          <br>
              
                   
                        <table class="table table-dark">
                       
                            <tr>
                                <th>Id </th>
                                <th>Category Name</th>
                            </tr>
                            </thead>

                            @foreach($data as $data)

                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->cat_name}}</td>
                                </tr>
                            @endforeach


                        </table>
                    </div>
                </div>
            </div>
            
                
                 
      
@endsection

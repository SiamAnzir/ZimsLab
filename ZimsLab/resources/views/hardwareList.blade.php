@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br> 
                    

                    <h1>Hardware Lists </h1>
                    <ul>
                        @foreach($hardwares as $hardware)
                            <li>
                                <h3>Hardware name: {{$hardware->hardware_name}}</h3>
                                @foreach($subCategories as $subCategory)
                                    @if($hardware->sub_category_id == $subCategory->id)
                                        <h4>Sub Category: {{$subCategory->sub_category_name}}</h4>
                                    @endif
                                @endforeach
                                @foreach($catagories as $category)
                                    @if($hardware->category_id == $category->id)
                                        <h4>Category: {{$category->category_name}}</h4>
                                    @endif
                                @endforeach
                                <h4>Quantity: {{$hardware->quantity}}</h4>
                            </li>
                        @endforeach
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
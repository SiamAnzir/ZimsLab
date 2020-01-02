@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @endauth
        </div>
    @endif
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome to Zims Lab</div>
                <div class="card-body">
                <form method="get" action="{{route('search')}}">
                <label>Category Name:</label>
                <select name="category_id" class="col-form-label text-md-right">
                    <option value=""> </option>
                        @foreach($categories as $category)
                            <option value = "{{$category->id}}"> {{$category->category_name}}
                            </option>
                        @endforeach
                </select>
                <br>
                <label>Sub-Category Name : </label>
                <select name="sub_category_id" class="col-form-label text-md-right">
                    <option value=""> </option>
                        @foreach($subcategories as $Subcategory)
                            <option value = "{{$Subcategory->id}}"> {{$Subcategory->sub_category_name}}
                            </option>
                        @endforeach
                </select>
                <button type="submit">Filter</button>
                </form>
                <div>
                    <li>
                        @foreach($searchedHardwares as $searchedHardware)
                            <h5>Hardware Name: {{$searchedHardware->hardware_name}}</h5>
                            @foreach($searchedSubcategories as $searchedSubcategory)
                            Sub Category: {{$searchedSubcategory->sub_category_name}} 
                            @endforeach
                            <br>
                            Quantity: {{$searchedHardware->quantity}}
                        @endforeach
                    </li>
                </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

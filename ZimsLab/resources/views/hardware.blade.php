@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">Done</button>
                            <strong>{{ $message }} </strong>
                        </div>
                    @endif

                    @if($errors->any()) 
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <br>
                    <a href="{{route('hardwareList')}}">Hardware Lists</a>
                    <br>
                    <a href="{{route('home')}}">Home</a>
                    <br>
                    <h1>Add Hardware </h1>
                    <form method='post'>
                    @csrf
                    <label>Hardware name</label>
                    <input type="text" name="hardware_name" value="">
                    <br>
                    <label>Sub-Category : </label>
                    <select name="sub_category_id" class="col-form-label text-md-right">
                    <option value="">
                        @foreach($Subcategories as $Subcategory)
                            <option value = "{{$Subcategory->id}}"> {{$Subcategory->sub_category_name}}
                            </option>
                        @endforeach
                    </option>
                    </select>
                    <br>
                    <label> Category : </label>
                    <select name="category_id" class="col-form-label text-md-right">
                    <option value="">
                        @foreach($categories as $category)
                            <option value = "{{$category->id}}"> {{$category->category_name}}
                            </option>
                        @endforeach
                    </option>
                    </select>
                    <br>
                    <label>Quantity </label>
                    <input type="number" name="quantity" value="">
                    <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
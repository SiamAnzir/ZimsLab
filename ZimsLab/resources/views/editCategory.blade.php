@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    
                    <h1> Edit Category </h1>
                    <form method="post" action="{{route('updateCategory',[$category->id])}}">
                        @method('PUT')
                        @csrf
                        <label>Category Name</label>
                        <input type="text" name="category_name" value="{{$category->category_name}}">
                        <br>
                        <label>Category Description</label>
                        <input type="text" name="category_description" value="{{$category->category_description}}">
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
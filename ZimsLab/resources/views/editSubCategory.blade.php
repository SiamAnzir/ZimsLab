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
                    <h1> Edit Sub-Category </h1>
                    <form method="post" action="{{route('updateSubCategory',[$subcategory->id])}}">
                        @method('PUT')
                        @csrf
                        <label>Sub Category Name</label>
                        <input type="text" name="sub_category_name" value="{{$subcategory->sub_category_name}}">
                        <br>
                        <label>Category Name</label>
                        <input type="text" name="category_id" value="{{$subcategory->category_id}}">
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
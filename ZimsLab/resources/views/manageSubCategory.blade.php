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
                    <h1> Edit or Delete Sub-Category </h1>
                    <ul>
                        @foreach($subcategories as $subcategory)
                            <li>
                                <h4> Sub Category Name: {{$subcategory->sub_category_name}} </h4>
                                @foreach($categories as $category)
                                    @if($subcategory->category_id == $category->id)
                                        <h4>Category Name: {{$category->category_name}}</h4>
                                    @endif
                                @endforeach
                                <form method="post" action="{{route('deleteSubCategory',[$subcategory->id])}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                                </form>
                                <button><a href="{{route('editSubCategory',[$subcategory->id])}}">Edit</a></button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
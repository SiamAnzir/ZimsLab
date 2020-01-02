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
                    
                    <h2>Add Hardwares with Category and Sub Category</h2>
                    <h3>Which one you want to add??</h3>
                    <h4><a href="{{route('category')}}">Category</a></h4>
                    <h4><a href="{{route('subCategory')}}">Sub-Category</a></h4>
                    <h4><a href="{{route('hardware')}}">HardWare</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

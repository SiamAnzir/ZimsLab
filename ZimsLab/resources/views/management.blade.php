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
                    <h2>Which one you want to Edit/Delete?</h2>
                    <h4><a href="{{route('manageCategory')}}">Category</a></h4>
                    <h4><a href="{{route('manageSubCategory')}}">Sub-Category</a></h4>
                    <h4><a href="{{route('manageCategory')}}">Hardware</a></h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
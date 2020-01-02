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

                    <a href="{{route('hardwareList')}}">Hardware Lists</a>
                    <br>
                    <a href="{{route('home')}}">Home</a>
                    <br>
                    <h1>Add Category </h1>
                    <form method='post'>
                    @csrf
                    <label>Category</label>
                    <input type="text" name="category_name" value="">
                    <br>
                    <label>Category Description</label>
                    <input type="textarea" name="category_description" value="">
                    <button type="submit">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
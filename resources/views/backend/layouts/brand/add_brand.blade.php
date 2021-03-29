@extends('backend.master')
@section('main')


<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-plus" aria-hidden="true"></i> Insert Brand</h1>
        <br><br>

        @if($errors->any())
        @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif

        <form action="#" method="post">

            @csrf

            <div class="form-group">
                <label for="name">Brand Name</label>
                <input type="string" class="form-control" id="name" placeholder="Enter Brand name" name="name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="string" class="form-control" id="location" placeholder="Enter Description" name="description">
            </div>


             
            <button type="submit" class="btn btn-primary">Add Brand</button>
        </form>
    </div>

</div>



@stop
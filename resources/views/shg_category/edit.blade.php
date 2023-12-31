@extends('shg_category.layout')

   

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Categories</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('shg_category.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('shg_category.update',$shg_category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category Name:</strong>
                    <input type="text" name="category_name" class="form-control" placeholder="Category Name" value=" {{old('category_name', $shg_category->category_name)}} ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <input type="text" class="form-control" name="description" placeholder="Description" value=" {{old('description', $shg_category->description) }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Created by</strong>
                    <input type="text" name="created_by" class="form-control" placeholder="Created By" value="  {{old('created_by', $shg_category->created_by) }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Updated By:</strong>
                    <input type="text" name="updated_by" class="form-control" placeholder="Updated By" value=" {{old('updated_by', $shg_category->updated_by)}} ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection
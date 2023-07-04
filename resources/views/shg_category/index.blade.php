@extends('shg_category.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel CRUD </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('shg_category.create') }}"> Create New Category</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Category Name</th>
            <th> Category Description</th>
            <th width="280px">Action</th>

        </tr>

        @foreach ($ShgCategory as $category)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->category_name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <form action="{{ route('shg_category.destroy',$category->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('shg_category.show',$category->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('shg_category.edit',$category->id) }}">Edit</a>  
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $ShgCategory->links() !!}

@endsection
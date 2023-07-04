@extends('shg_category.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel CRUD </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('shg_category.create') }}"> Create New Product</a>

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

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($shg_category as $category)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $category->name }}</td>

            <td>{{ $category->detail }}</td>

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

  

    {!! $shg_category->links() !!}

      

@endsection
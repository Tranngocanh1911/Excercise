@extends('admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Book list</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a class="btn btn-success" href="">Add book</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        </tfoot>
                       <tbody>
                       @forelse($books as $book)
                           <ttr>
                               <td>{{ $book->name }}</td>
                               <td><img src="{{ $book->image }}" alt=""></td>
                               <td>{{ $book->price }}</td>
                               <td>
                                   <a href="" class="btn btn-danger">Delete</a>
                               </td>
                           </ttr>
                       @empty
                       <tr>
                           <td colspan="4">No data</td>
                       </tr>
                       @endforelse
                       </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

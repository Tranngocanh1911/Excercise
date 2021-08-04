@extends('admin.master')
@section('content')
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <h3>ADD BOOK</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required class="form-control" id="first-name" name="name">
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Price</label>
                <input type="number" required class="form-control" id="last-name" name="price">
            </div>
            <div class="mb-3">
                <label for="avt" class="form-label">Picture</label>
                <input type="file" class="form-control" id="avt" name="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

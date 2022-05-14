@extends('layouts.main')

@section('container')

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Name</td>
            <td scope="col">Category</td>
            <td scope="col">Size</td>
            <td scope="col">Color</td>
            <td scope="col">Edit</td>
            <td scope="col">Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td> {{ $user->Id }}</td>
            <td>{{ $user->Name }}</td>
            <td>{{ $user->Category }}</td>
            <td>{{ $user->Size }}</td>
            <td>{{ $user->Color }}</td>
            <td><a role="button" class="btn btn-primary" href = 'edit/{{ $user->Id }}'>Edit</a></td>
            <td><a data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    {{ $users->links() }}

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Confirm to Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Are you sure you want to delete this product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a role="button" class="btn btn-danger" href = 'delete/{{ $user->Id }}'>Confirm</a>
            </div>
        </div>
    </div>
</div>
</table>


@endsection
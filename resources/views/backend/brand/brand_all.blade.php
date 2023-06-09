@extends('admin.dashboard')
@section('admin')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Brand Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
                <a href="{{route('add.brand')}}" class="btn btn-primary">Add Brand</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($brands as $key => $item)
                       <tr>
                            <td>{{$key++}}</td>
                            <td>{{$item->brand_name}}</td>
                            <td><img src="{{asset($item->brand_image)}}" alt="brand image" width="60px"></td>
                            <td>
                                <a href="{{route('edit.brand',$item->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('delete.brand',$item->id)}}" id="delete" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

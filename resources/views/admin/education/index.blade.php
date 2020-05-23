@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="c-grey-900 mB-20">Education</h4>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Education</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sub Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($education as $k => $edu)
                            <tr>
                                <th scope="row">{{ $education->firstItem() + $k }}</th>
                                <td>{{ $edu->name }}</td>
                                <td>{{ $edu->category }}</td>
                                <td>{{ $edu->sub_category }}</td>
                                <td>
                                    <a href="{{ route('education.edit', $edu) }}">Edit</a>     /
                                    <a href="{{ route('education.edit', $edu) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">
                @include('admin.education.add')
            </div>
        </div>
    </div>
@endsection

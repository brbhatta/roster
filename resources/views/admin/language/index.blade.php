@extends('layouts.admin')

@section('content')
    <div class="container-fluid"><h4 class="c-grey-900 mT-10 mB-30">Basic Tables</h4>
        <div class="row">
            <div class="col-md-8">
                <div class="bgc-white bd bdrs-3 p-20 mB-20"><h4 class="c-grey-900 mB-20">Simple Table</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Language</th>
                                <th scope="col">Code</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($languages as $lang)
                            <tr>
                                <th scope="row">{{ $lang->id }}</th>
                                <td>{{ $lang->name }}</td>
                                <td>{{ $lang->iso_code }}</td>
                                <td>
                                    <a href="{{ route('languages.edit', $lang) }}">Edit</a>     /
                                    <a href="{{ route('languages.edit', $lang) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                @include('admin.language.add')
            </div>
        </div>
    </div>
@endsection

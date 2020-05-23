@extends('layouts.admin')

@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd"><h6 class="c-grey-900">Edit Education</h6>
                <a href="{{ route('education.create') }}">Add</a>
                <div class="mT-30">
                    <form action="{{ route('education.update', $education) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')

                        @include('admin.education.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

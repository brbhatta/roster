@extends('layouts.admin')

@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd"><h6 class="c-grey-900">Add Language</h6>
                <div class="mT-30">
                    <form action="{{ route('languages.update', $language) }}" method="POST">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputAddress">Name</label>
                            <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name" value="{{ $language->name }}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Code</label>
                            <input type="text"  name="iso_code" class="form-control" id="inputAddress2" placeholder="Code" value="{{ $language->iso_code }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

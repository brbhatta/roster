@extends('layouts.admin')

@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd"><h6 class="c-grey-900">Profile</h6>
                <div class="mT-30">
                    <form action="{{ route('profile.profile.post') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="text-normal text-dark">@lang('auth.introduction')</label>
                            <textarea name="bio" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-normal text-dark">@lang('profile.secondary_email')</label>
                            <input type="text" class="form-control"  name="secondary_email">
                        </div>
                        <div class="form-group">
                            <label class="text-normal text-dark">@lang('profile.sex')</label>
                            <select name="gender" class="form-control">
                                @foreach(['m' => trans('profile.male'),'f' => trans('profile.female')] as $key => $gender)
                                    <option value="{{ $key }}">{{ $gender }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-normal text-dark">@lang('profile.dob')</label>
                            <input type="date" class="form-control"  name="dob">
                        </div>
                        <div>
                            <label class="text-normal text-dark">@lang('profile.image')</label>
                            <input type="file" class="form-control"  name="image" accept="image/*">
                        </div>
                        <div class="peer">
                            <button class="btn btn-primary">@lang('profile.save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('layouts.admin')

@section('content')
    <div id="mainContent">
        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-6"></div>
            <div class="masonry-item w-100">
                <div class="row gap-20">
                    <div class="col-md-3">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">
                                    <i class="ti-flag-alt c-green-500"></i> कुल तालिम
                                </h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">
                                            200
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">
                                    <i class="ti-user c-blue-500"></i>
                                    कुल कार्यकर्ता
                                </h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">
                                    <i class="ti-user c-blue-500"></i>
                                    कुल कार्यकर्ता
                                </h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">
                                    <i class="ti-user c-blue-500"></i>
                                    कुल कार्यकर्ता
                                </h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">
                                    <i class="ti-user c-blue-500"></i>
                                    कुल कार्यकर्ता
                                </h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="masonry-item col-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="bd bgc-white p-20">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Education</label>
                                        <div class="form-check">
                                                <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Bachelors
                                                </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Masters
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                +2
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                SLC
                                            </label>
                                        </div>

                                        <hr>

                                        <label for="inputEmail4">Experience</label>
                                        <div class="form-check">
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                1-2 Years
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                2-5 Years
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                More than 5 Years
                                            </label>
                                        </div>

                                        <hr>

                                        <label for="inputEmail4">Domain</label>
                                        <div class="form-check">
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Education
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Health
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Engineering
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Public Service
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="layers">
                            <div class="layer w-100">
                                <img src="{{ asset('assets/static/images/municipality-map.png') }}"
                                     alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bd bgc-white p-20">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Availability</label>
                                        <div class="form-check">
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Yes
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Any
                                            </label>
                                        </div>

                                        <hr>

                                        <label for="inputEmail4">Role</label>
                                        <div class="form-check">
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Role 1
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Role 2
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Role 3
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Role 4
                                            </label>
                                        </div>

                                        <hr>

                                        <label for="inputEmail4">Wards</label>
                                        <div class="form-check">
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Ward 1
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Ward 2
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Ward 3
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Ward 4
                                            </label>
                                            <label class="form-check-label d-block"><input class="form-check-input" type="checkbox">
                                                Ward 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="masonry-item col-md-6">
                    <div class="bd bgc-white">
                        <div class="layers">
                            <div class="layer w-100 pX-20 pT-20"><h6 class="lh-1">नयाँ कार्यकर्ता पर्ती महिना</h6></div>
                            <div class="layer w-100 p-20">
                                <canvas id="bar-chart" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="masonry-item col-md-6">
                    <div class="bd bgc-white p-20">
                        <div class="layers">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">सकृय कार्यकर्ता</h6>
                                <p>This should be some subtitle here</p>
                            </div>
                            <div class="layer w-100">
                                <div class="user-group p-1">
                                    <div class="row">
                                        @for($i = 0; $i < 12; $i++)
                                            <div class="col-md-2 mt-1">
                                                <div class="bdrs-50p">
                                                    <img src="{{ asset('assets/static/images/no-avatar.png') }}" alt=""
                                                         class="w-100">
                                                    <p>
                                                        राम न्यौपाने
                                                        <br>
                                                        Male 26 Years Old
                                                    </p>
                                                </div>
                                            </div>
                                        @endfor
                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            Footer Notes here with some news ticker or <br />something important that can be used.
                                            <br>
                                            Other Line to have better CSS View
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
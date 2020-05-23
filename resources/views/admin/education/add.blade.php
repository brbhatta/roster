<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-12"></div>
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd"><h6 class="c-grey-900">
                <i class="c-green-500 ti-book"></i>
                Add Education
            </h6>
            <div class="mT-30">
                <form action="{{ route('education.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputAddress">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Category</label>
                        <input type="text"  name="category" class="form-control" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Sub Category</label>
                        <input type="text"  name="sub_category" class="form-control" placeholder="Sub Category">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

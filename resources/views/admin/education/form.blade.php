<div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $education->name }}">
</div>
<div class="form-group">
    <label for="inputAddress2">Category</label>
    <input type="text"  name="category" class="form-control" placeholder="Category" value="{{ $education->category }}">
</div>
<div class="form-group">
    <label for="inputAddress2">Sub Category</label>
    <input type="text"  name="sub_category" class="form-control" placeholder="Sub Category" value="{{ $education->sub_category }}">
</div>

<button type="submit" class="btn btn-primary">Save</button>
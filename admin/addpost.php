<div class="col-xl-12 " id="add-post-form">
    <div class="card">
        <div class="card-body ">
            <h4 class="box-title d-inline-block ml-3 ">Add Post -</h4>
        </div>
        <!-- ------------------App-Post-Form---------- -->
        <div class="card-body">
            <div class="form ">
                <form class="form-horizontal" id="post-form">
                    <!-- ------------------Title-Input---------- -->
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="form-label">Title *</label>
                            <input type="text" class="form-control" id="post_title" name="post_title" required>
                        </div>
                    </div>
                    <!-- ------------------Description-Input---------- -->
                    <div class="form-group">
                        <div class="col-sm-12 ">
                            <label class="form-label">Meta Description *</label>
                            <textarea class="form-control" id="post_desc" name="post_desc" rows="4" required></textarea>
                        </div>
                    </div>
                    <!-- ------------------Tags-Input---------- -->
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="col-sm-12">
                                <label class="form-label">Tags *</label>
                                <input type="text" class="form-control " id="tags" name="tags" data-role="tagsinput" required placeholder="EX:- marketing, god, building, Raksha Badhan, etc.."></input>
                                <div id="" class="form-text text-warning">All tags are must be separated by ',' or Enter Button :</div>
                            </div>
                        </div>
                        <!-- ------------------Sub-Categories---------- -->
                        <div class="form-group col-sm-6">
                            <label class="form-label">Select Category *</label>
                            <select id="post-category" name="post_category" data-placeholder="Select a Category..." class="form-control" required>
                                <option>Select Category</option>

                            </select>
                            <br> <br>
                            <!-- ------------------Sub-Categories---------- -->
                            <label class="form-label">Select Sub-Category *</label>
                            <select id="post-subCategory" name="post_subCategory" data-placeholder="Select a Sub-Category..." class="form-control" required>
                                <option>Select Sub-Category</option>
                            </select>
                        </div>
                    </div>
                    <!-- ------------------Image Uploads---------- -->
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group float-left col-sm-6">
                                <label class="form-label"> Upload Image *</label>
                                <input type="file" class="form-control " id="image" name="image" accept="image/png" required />
                                <div id="" class="form-text text-warning">Only .PNG file is allowed.</div>
                            </div>
                            <div class=" col-sm-6 float-right">
                                <div id="image-preview" style="max-width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------Submit Button---------- -->
                    <div class="col-sm-12"><input type="submit" id="post-submit-btn" style="cursor: pointer;" name="post-submit-btn" value="Add Post" class="btn btn-primary"></input></div>
                </form>
            </div>
        </div>
    </div>
</div>
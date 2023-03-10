<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Product</h2>
                <div>
                    <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                    <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-4">
                        <label class="form-label" for="product_title">Product title</label>
                        <input class="form-control" id="product_title" type="text" placeholder="Type here">
                    </div>
                    <div class="row gx-3">
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="product_sku">SKU</label>
                            <input class="form-control" id="product_sku" type="text" placeholder="Type here">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="product_color">Color</label>
                            <input class="form-control" id="product_color" type="text" placeholder="Type here">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="product_size">Size</label>
                            <input class="form-control" id="product_size" type="text" placeholder="Type here">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="product_brand">Brand</label>
                        <input class="form-control" id="product_brand" type="text" placeholder="Type here">
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <label class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Type here" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <label class="form-label">Images</label>
                        <input class="form-control" type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-4">
                        <label class="form-label">Price</label>
                        <input class="form-control" type="text" placeholder="Type here">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option>Published</option>
                            <option>Draft</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Tags</label>
                        <input class="form-control" type="text" placeholder="Type here">
                    </div><a class="font-xs hover-up mr-15" href="#"><i class="font-xs material-icons md-close text-body"></i> Tech</a><a class="font-xs hover-up mr-15" href="#"><i class="font-xs material-icons md-close text-body"></i> Mobile</a><a class="font-xs hover-up mr-15" href="#"><i class="font-xs material-icons md-close text-body"></i> Apple</a>
                    <hr>
                    <h5 class="mb-3">Categories</h5>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat"> Shirt</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat-1" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat-1"> T-Shirt</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat-2" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat-2"> Sneakers</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat-3" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat-3"> Joggers</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat-4" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat-4"> Vests</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat-5" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat-5"> Knitwear</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="product-cat-8" type="checkbox" value="">
                        <label class="form-check-label" for="product-cat-8"> Shorts</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

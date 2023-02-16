<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Categories</h2>
            <p>Add, edit or delete a category</p>
        </div>
        <div>
            <input class="form-control bg-white" type="text" placeholder="Search Categories">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form></form>
                    <div class="mb-4">
                        <label class="form-label" for="product_name">Name</label>
                        <input class="form-control" id="product_name" type="text" placeholder="Type here">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="product_slug">Slug</label>
                        <input class="form-control" id="product_slug" type="text" placeholder="Type here">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Parent</label>
                        <select class="form-select">
                            <option>Clothes</option>
                            <option>T-Shirts</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Type here"></textarea>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Create category</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Slug</th>
                                <th>Order</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>21</td>
                                <td><b>Men clothes</b></td>
                                <td>Men clothes</td>
                                <td>/men</td>
                                <td>1</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#" data-bs-toggle="dropdown"><i class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a class="dropdown-item" href="#">Edit info</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

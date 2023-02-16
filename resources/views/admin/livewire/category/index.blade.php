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
                    <form wire:submit.prevent="saveCategory(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="local">@lang('form-labels.category-local')</label>
                            <select class="form-select @error('local') error-input-border @enderror" name="local" id="local">
                                @foreach($errors->get('local') as $message)
                                    <sapan wire:loading.remove class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option>select language</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="name">@lang('form-labels.category-name')</label>
                            <input class="form-control  @error('name') error-input-border @enderror" name="name"
                                   id="name" type="text">
                            @foreach ($errors->get('name') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="slug">@lang('form-labels.category-slug')</label>
                            <input class="form-control  @error('slug') error-input-border @enderror" name="slug" id="slug" type="text">
                            @foreach ($errors->get('slug') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="icon">@lang('form-labels.category-icon')</label>
                            <select class="form-select @error('icon') error-input-border @enderror" name="icon" id="icon">
                                @foreach($errors->get('icon') as $message)
                                    <sapan wire:loading.remove class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option>select icon</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label"
                                   for="category_id">@lang('form-labels.category-category_id')</label>
                            <select class="form-select @error('category_id') error-input-border @enderror"
                                    name="category_id" id="category_id">
                                @foreach($errors->get('category_id') as $message)
                                    <sapan wire:loading.remove
                                           class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option>parent</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">@lang('btn.submit')</button>
                        </div>
                    </form>
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
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>2</td>
                                <td><b>Women fashion</b></td>
                                <td>Fashions for Women</td>
                                <td>/women</td>
                                <td>2</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>3</td>
                                <td><b>Kids clothes</b></td>
                                <td>Clothes for kids</td>
                                <td>/kids</td>
                                <td>3</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><i
                                        class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                <td>4</td>
                                <td><b>Hot Gifts</b></td>
                                <td>Hot Gifts</td>
                                <td>/gifts</td>
                                <td>4</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><i
                                        class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                <td>5</td>
                                <td><b>Electronics</b></td>
                                <td>Electronics</td>
                                <td>/electr</td>
                                <td>5</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>6</td>
                                <td><b>Accessories</b></td>
                                <td>Accessories</td>
                                <td>/accessories</td>
                                <td>6</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>7</td>
                                <td><b>Jewellery</b></td>
                                <td>Jewellery</td>
                                <td>/jewel</td>
                                <td>7</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>8</td>
                                <td><b>Interiors</b></td>
                                <td>Interiors</td>
                                <td>/interior</td>
                                <td>8</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                             data-bs-toggle="dropdown"><i
                                                class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
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

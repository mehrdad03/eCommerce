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
                    <form wire:submit.prevent="save">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="name">نام رنگ</label>
                            <input wire:model="name" class="form-control" id="name" type="text"
                                   placeholder="نام رنگ را تایپ کنید">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="color">انتخاب رنگ</label>
                            <input wire:model="code" class="form-control-color" id="color" type="color">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">ثبت</button>
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
                                <th>نام رنگ</th>
                                <th>کد رنگ</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>

                            <tbody>
@foreach($colors as $color)
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>

                                </td>
                                <td>{{$color->id}}</td>
                                <td>{{$color->name}}</td>
                                <td>{{$color->code}}</td>

                                <td class="text-end">
                                    <div class="dropdown">
                                        <a class="btn btn-light rounded btn-sm font-sm" href="#" data-bs-toggle="dropdown"><i class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                                class="dropdown-item" href="#">Edit info</a><a
                                                class="dropdown-item text-danger" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
@endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

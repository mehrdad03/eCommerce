<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">انتخاب سایز</h2>
        </div>
        <div>
            <input class="form-control bg-white" type="text" placeholder="Search Categories">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveSize(Object.fromEntries(new FormData($event.target)))">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="text">سایز</label>
                            <input  class="form-control" name="size" id="size" type="text"
                                   placeholder="سایز را تایپ کنید">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">انتخاب دسته بندی</label>
                            <select  class="form-select"
                            name="category_id" id="category_id">
                                <option>دسته والد</option>
                                @foreach($localizations as $localization)
                                <option value="{{$localization->property_id}}">{{$localization->name}}</option>
                                @endforeach
                            </select>
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
                                <th>نام سایز</th>
{{--                                <th>نام دسته بندی</th>--}}
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($sizes as $size)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>

                                    </td>
                                    <td>{{$size->id}}</td>
                                    <td>{{$size->size}}</td>
{{--                                    <td>{{$size->size}}</td>--}}

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

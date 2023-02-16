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

                        <div class="mb-4">
                            <label class="form-label" for="size">@lang('form-labels.size-size')</label>
                            <input class="form-control" @error('size') error-input-border @enderror name="size"
                                   id="size" type="text" placeholder="سایز را تایپ کنید">
                            @foreach($errors->get('$size') as $message)
                                <sapan wire:loading.remove class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="category_id">@lang('form-labels.size-category_id')</label>
                            <select class="form-select"
                                    name="category_id" id="category_id">
                                <option>دسته والد</option>
                                @foreach($localizations as $localization)
                                    <option value="{{$localization->property_id}}">{{$localization->name}}</option>
                                @endforeach
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
                                <th>#</th>
                                <th>@lang('form-labels.size-size')</th>
                                <th>@lang('form-labels.size-category_id')</th>
                                <th class="text-end">@lang('form-labels.action')</th>
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

                                    <td>{{optional($size->localization)->name}}</td>

                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a class="btn btn-light rounded btn-sm font-sm" href="#"
                                               data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
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

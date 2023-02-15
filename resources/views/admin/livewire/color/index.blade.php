<section class="content-main">
    <div class="content-header">
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveColor(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="name">@lang('form-labels.color-name')</label>
                            <input class="form-control" name="name" id="name" type="text">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="code">@lang('form-labels.color-code')</label>
                            <input class="form-control" name="code" id="code" type="color">
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
                                <th>@lang('form-labels.color-name')</th>
                                <th>@lang('form-labels.color-code')</th>
                                <th class="text-end">@lang('form-labels.action')</th>
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

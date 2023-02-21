<section class="content-main">
    <div class="content-header">
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveColor(Object.fromEntries(new FormData($event.target)))">
                        @foreach(config('app.languages') as $lang)
                            <div class="mb-4">
                                <label class="form-label" for="name">@lang('form-labels.color-name') {{$lang}}</label>
                                <input value="{{@$names[$lang]}}"
                                       class="form-control @error('name') error-input-border  @enderror"
                                       name="{{$lang}}"
                                       id="name_{{$lang}}" type="text">
                                @foreach ($errors->get($lang) as $message)
                                    <span wire:loading.remove
                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                @endforeach
                            </div>
                        @endforeach

                        <div class="mb-4">
                            <label class="form-label" for="code">@lang('form-labels.color-code')</label>
                            <input value="{{$code}}" class="form-control" name="code" id="code" type="color">
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
                                @foreach(config('app.languages') as $lang)
                                    <th>@lang('form-labels.color-name')</th>
                                @endforeach
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
                                    <td>{{$loop->index+1}}</td>
                                    @foreach($color->locales as $lang)
                                        <td>{{$lang->name}}</td>
                                    @endforeach
                                    <td><span class="d-block p-1 w-50"
                                              style="border: 1px solid;background:{{$color->code}};height: 20px;"></span>{{$color->code}}
                                    </td>

                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a class="btn btn-light rounded btn-sm font-sm" href="#"
                                               data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                                          wire:click="editColor('{{$color->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteColor('{{$color->id}}')">Delete</a></div>
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

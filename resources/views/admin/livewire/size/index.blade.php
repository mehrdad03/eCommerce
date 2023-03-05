<section class="content-main">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveSize(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="name">@lang('form-labels.size-name')</label>
                            <input value="{{$name}}"
                                   class="form-control @error('name') error-input-border @enderror "
                                   name="name"
                                   id="name" type="text" placeholder="type size">
                            @foreach($errors->get('name') as $message)
                                <span wire:loading.remove
                                      class="text-danger w-100 d-block mt-2">{{$message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="category_id">@lang('form-labels.size-category_id')</label>
                            <select class="form-select @error('category_id') error-input-border @enderror"
                                    name="category_id" id="category_id" wire:model.defer="category_id">
                                <option selected disabled value="">choose parent category</option>
                                @foreach($localizations as $localization)
                                    <option
                                        value="{{$localization->id}}">
                                        {{$localization->name}}
                                    </option>
                                @endforeach
                            </select>
                            @foreach($errors->get('category_id') as $message)
                                <span wire:loading.remove
                                      class="text-danger w-100 d-block mt-2">{{$message}}</span>
                            @endforeach
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
                                <th>@lang('form-labels.size-name')</th>
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
                                    <td>{{$loop->index+1}}</td>
                                    @foreach($size->locales as $lang)
                                        <td>{{$lang->name}}</td>
                                    @endforeach

                                    <td>{{optional($size->parent)->name}}</td>

                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a class="btn btn-light rounded btn-sm font-sm" href="#"
                                               data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editSize('{{$size->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm('{{$size->id}}')">Delete</a>
                                            </div>
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

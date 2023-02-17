<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Create Brand</h2>
            <p>Add, edit or delete a Brand</p>
        </div>
        <div>
            <input class="form-control bg-white" type="text" placeholder="Search Categories">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveBrand(Object.fromEntries(new FormData($event.target)))">
                        <div class="mb-4">
                            <label class="form-label" for="local">@lang('form-labels.brand-local')</label>
                            <select value="{{$local}}" class="form-select @error('local') error-input-border @enderror"
                                    name="local" id="local">
                                @foreach($errors->get('local') as $message)
                                    <sapan wire:loading.remove
                                           class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option>select language</option>
                                @foreach($localizations as $localization)
                                    <option
                                        @if($category_id==$localization->property_id)
                                            selected="selected"
                                        @endif
                                        value="{{$localization->local}}">{{$localization->local}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="name">@lang('form-labels.brand-name')</label>
                            <input value="{{$name}}" class="form-control  @error('name') error-input-border @enderror"
                                   name="name"
                                   id="name" type="text">
                            @foreach ($errors->get('name') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="slug">@lang('form-labels.brand-slug')</label>
                            <input value="{{$slug}}" class="form-control  @error('slug') error-input-border @enderror"
                                   name="slug"
                                   id="slug" type="text">
                            @foreach ($errors->get('slug') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label"
                                   for="category_id">@lang('form-labels.brand-category_id')</label>
                            <select value="{{$category_id}}"
                                    class="form-select @error('category_id') error-input-border @enderror"
                                    name="category_id" id="category_id">
                                @foreach($errors->get('category_id') as $message)
                                    <sapan wire:loading.remove
                                           class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option>parent</option>
                                <option
                                    @if($category_id==$localization->property_id)
                                        selected="selected"
                                    @endif
                                    value="{{$localization->property_id}}">{{$localization->name}}
                                </option>
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
                                <th>@lang('form-labels.brand-name')</th>
                                <th>@lang('form-labels.brand-slug')</th>
                                <th>@lang('form-labels.brand-local')</th>
                                <th>@lang('form-labels.brand-category_id')</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>#</td>
                                <td><b>{{$brand->id}}</b></td>
                                <td>Men clothes</td>
                                <td>/men</td>
                                <td>1</td>
                                <td class="text-end">
                                    <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#" data-bs-toggle="dropdown"><i class="material-icons md-more_horiz"></i></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" wire:click="editBrand('{{$brand->id}}')">Edit info</a>
                                            <a class="dropdown-item text-danger" wire:click="deleteBrand('{{$brand->id}}')">Delete</a>
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

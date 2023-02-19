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
                            <label class="form-label" for="name">@lang('form-labels.category-name')</label>
                            <input value="{{$name}}" class="form-control  @error('name') error-input-border @enderror"
                                   name="name"
                                   id="name" type="text">
                            @foreach ($errors->get('name') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="icon">@lang('form-labels.category-icon')</label>
                            <select class="form-select @error('icon') error-input-border @enderror"
                                    name="icon"
                                    id="icon">
                                @foreach($errors->get('icon') as $message)
                                    <sapan wire:loading.remove
                                           class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option>select icon</option>
                                <option
                                    @if($category_id==$localization->property_id)
                                        selected="selected"
                                    @endif
                                    value="{{$localization->property_id}}">{{$localization->name}}
                                </option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label"
                                   for="category_id">@lang('form-labels.category-category_id')</label>
                            <select
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
                                <th>@lang('form-labels.category-name')</th>
                                <th>@lang('form-labels.category-local')</th>
                                <th>@lang('form-labels.category-icon')</th>
{{--                                <th>@lang('form-labels.category-category_id')</th>--}}
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>#</td>
                                    <td>{{optional($category->parent)->name}}</td>
                                    <td>{{optional($category->parent)->local}}</td>
                                    <td>{{$category->icon}}</td>
                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a class="btn btn-light rounded btn-sm font-sm"  data-bs-toggle="dropdown">
                                                <i class="material-icons md-more_horiz"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editCategory('{{$category->id}}')">Edit info</a>
                                                <a class="dropdown-item text-danger" wire:click="deleteCategory('{{$category->id}}')">Delete</a>
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

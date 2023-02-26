<section class="content-main">
    <div class="content-header">
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveBrand(Object.fromEntries(new FormData($event.target)))">
                        @foreach(config('app.languages') as $lang)
                            <div class="mb-4">
                                <label class="form-label" for="name">@lang('form-labels.brand-name') {{$lang}} </label>
                                <input value="{{@$names[$lang]}}"
                                       class="form-control @error('name') error-input-border @enderror"
                                       name="{{$lang}}"
                                       id="name_{{$lang}}" type="text">
                                @foreach ($errors->get($lang) as $message)
                                    <span wire:loading.remove
                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                @endforeach
                            </div>
                        @endforeach
                        @foreach($brands as $brand)
                        @endforeach
                        <div class="mb-4">
                            <label class="form-label" for="category_id">@lang('form-labels.brand-category_id')</label>
                            <select class="form-select @error('category_id') error-input-border @enderror"
                                    name="category_id" id="category_id">
                                @foreach($errors->get('category_id') as $message)
                                    <sapan wire:loading.remove
                                           class="text-danger w-100 d-block mt-2">{{$message}}</sapan>
                                @endforeach
                                <option  selected disabled value="">choose parent category</option>
                                @foreach($localizations as $localization)
                                    <option
                                        value="{{$localization->id}}">
                                        {{$localization->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="image">@lang('form-labels.brand-image')</label>
                            <input wire:model="image" class="form-control" id="image" type="file" >
                            <div wire:loading wire:target="image">Uploading...</div>
                        </div>
                        @error('image') <span class="error">{{ $message }}</span> @enderror

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
                                    <th>@lang('form-labels.brand-name') {{$lang}}  </th>
                                @endforeach
                                <th>@lang('form-labels.brand-category_id')</th>
                                <th style="width: 10%;">@lang('form-labels.brand-image')</th>
                                <th class="text-end">@lang('form-labels.action')</th>
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
                                    <td>{{$loop->index+1}}</td>

                                    @foreach($brand->locales as $lang)
                                        <td>{{$lang->name}}</td>
                                    @endforeach

                                    <td>{{optional($brand->parent)->name}}</td>
                                    <td>
                                        <img style=" width: 153px; height: 100px;"  src="/storage/photos/brands/{{$brand->image}}" alt="">
                                    </td>

                                    <td class="text-end">
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                                 data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>


                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editBrand('{{$brand->id}}')">Edit
                                                    info</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm({{$brand->id}})">Delete</a>
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

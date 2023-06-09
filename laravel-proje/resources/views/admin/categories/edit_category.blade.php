@extends("admin.shared.theme")
@section("content")
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="d-flex justify-content-between ">
                        <h6 class="mb-4">Kategoriyi Güncelle</h6>
                        <a href="/categories" type="button"
                           class="btn btn-lg btn-lg-square btn-outline-light m-2"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                    <form action="{{url("/categories/$category->category_id")}}" method="POST" autocomplete="off"
                          novalidate>
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="category_id" value="{{$category->category_id}}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Kategori Ad</label>
                            <input name="name" type="text" class="form-control" id="city"
                                   value="{{old("name",$category->name)}}">
                            @error("name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input name="slug" type="text" class="form-control" id="slug"
                                   value="{{old("slug",$category->slug)}}">
                            @error("slug")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-check form-switch">
                            <input name="is_active" class="form-check-input" type="checkbox" role="switch"
                                   id="is_activeSwitchCheckDefault" {{$category->is_active == 1 ? "checked":""}}>
                            <label class="form-check-label" for="is_activeSwitchCheckDefault">Aktif Kategori
                            </label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="is_favorite" class="form-check-input" type="checkbox" role="switch"
                                   id="is_favoriteSwitchCheckDefault" {{$category->is_favorite == 1 ? "checked":""}}>
                            <label class="form-check-label" for="is_favoriteSwitchCheckDefault">Favori Kategori
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-danger">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

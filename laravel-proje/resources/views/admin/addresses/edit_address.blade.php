@extends("admin.shared.theme")
@section("content")
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="d-flex justify-content-between ">
                        <h6 class="mb-4">Adresi Güncelle</h6>
                        <a href="{{url("/users/$user->user_id/address")}}" type="button"
                           class="btn btn-lg btn-lg-square btn-outline-light m-2"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                    <form action="{{url("/users/$user->user_id/address/$address->address_id")}}" method="POST"
                          autocomplete="off">
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="user_id" value="{{$user->user_id}}">
                        <input type="hidden" name="address_id" value="{{$address->address_id}}">
                        <div class="mb-3">
                            <label for="tittle" class="form-label">Başlık</label>
                            <input name="tittle" type="text" class="form-control" id="tittle"
                                   value="{{old("tittle",$address->tittle)}}">
                            @error("tittle")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">İl</label>
                            <input name="city" type="text" class="form-control" id="city"
                                   value="{{old("city",$address->city)}}">
                            @error("city")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="district" class="form-label">İlçe</label>
                            <input name="district" type="text" class="form-control" id="district"
                                   value="{{old("district",$address->district)}}">
                            @error("district")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="zipcode" class="form-label">Posta Kodu</label>
                            <input name="zipcode" type="text" class="form-control" id="zipcode"
                                   value="{{old("zipcode",$address->zipcode)}}">
                            @error("zipcode")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address_description" class="form-label">Adres</label>
                            <textarea name="address_description" type="text" class="form-control"
                                      id="address_description">{{old("address_description",$address->address_description)}}</textarea>
                            @error("address_description")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-check form-switch">
                            <input name="is_default" class="form-check-input" type="checkbox" role="switch"
                                   id="is_defaultSwitchCheckDefault"
                                   {{$address->is_default == 1 ? "checked":""}}
                            <label class="form-check-label" for="is_defaultSwitchCheckDefault">Varsayılan Adres
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

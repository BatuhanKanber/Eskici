<div class="col-lg-3 d-none d-lg-block">
    <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
       data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
        <h6 class="m-0">Kategoriler</h6>
        <i class="fa fa-angle-down text-dark"></i>
    </a>
    <nav
        class="collapse navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
        id="navbar-vertical">
        <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
            <a href="/products-page" class="nav-item nav-link">Hepsi</a>
            @if(count($categories)>0)
                @foreach($categories as $category)
                    <a href="/products-page/category/{{$category->slug}}"
                       class="nav-item nav-link">{{$category->name}}</a>
                @endforeach
            @endif
        </div>
    </nav>
</div>

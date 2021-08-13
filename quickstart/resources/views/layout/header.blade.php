<div class="container my-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <div class="d-flex flex-row align-items-center">
                <div class="col-2 pl-0">
                    <form action="{{route('categories.index')}}" method="get">
                        <button class="btn btn-primary rounded-0 font-weight-bold">{{ __('home_category') }}</button>
                    </form>
                </div>
                <div class="col-2 pl-0">
                    <form action="{{route('products.index')}}" method="get">
                        <button class="btn btn-primary rounded-0 font-weight-bold">{{ __('home_product') }}</button>
                    </form>
                </div>
                <div class="col-8">
                    <h1 class="text-center font-weight-bold text-uppercase">{{ __('crud_laravel') }}</h1>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
</div>

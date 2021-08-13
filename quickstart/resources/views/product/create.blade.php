@extends('layout.master')

@section('content')
@component('layout.components.title')
    {{ __('create_page') }}
@endcomponent
<div class="container mt-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">{{ __('name') }}</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="{{ __('name') }}" name="name">
                </div>
                <div class="form-group ">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('category') }}:</label>
                    <select class="form-control" name="category_id" id="">
                        {{ GetCategory($categories, 0, '', 0) }}
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('product_code') }}:</label>
                    <input  type="text" name="product_code" class="form-control">
                </div>
                <div class="form-group">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('price') }}:</label>
                    <input  type="number" name="price" class="form-control">
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="/img/import-img.png">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                        {{ __('confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{  asset('js/myJs.js')  }}"></script>
@endsection

@extends('layout.master')
@section('script_product')

@endsection
@section('content')
@component('layout.components.title')
{{ __('edit_page') }}
@endcomponent
<div class="container mt-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="put" />
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">{{ __('name') }}</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="{{ __('name') }}" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group ">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('category') }}:</label>
                    <select class="form-control" name="category_id" id="">
                        {{ GetCategory($categories, 0, '', $product->category_id) }}
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('product_code') }}:</label>
                    <input  type="text" name="product_code" class="form-control" value="{{ $product->product_code }}">
                </div>
                <div class="form-group">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('price') }}:</label>
                    <input  type="number" name="price" class="form-control" value="{{ $product->price }}">
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="/storage/{{ $product->img }}">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
                        {{ __('save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{  asset('bower_components/jquery.min/index.js')  }}"></script>
<script src="{{  asset('js/myJs.js')  }}"></script>
@endsection

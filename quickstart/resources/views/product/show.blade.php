@extends('layout.master')
@section('content')
@component('layout.components.title')
    {{ __('show_page') }}
@endcomponent
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="">#</th>
                        <th scope="col" class="">{{ __('name') }}</th>
                        <th scope="col" class="">{{ __('product_code') }}</th>
                        <th scope="col" class="">{{ __('price') }}</th>
                        <th scope="col" class="">{{ __('category') }}</th>
                        <th scope="col" class="">{{ __('img') }}</th>
                        <th scope="col" class="">{{ __('action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->categories->name }}</td>
                        <td><img src="/img/{{  $product->img  }}" alt="Áo đẹp" width="100px" class="thumbnail"></td>
                        <td class="d-flex align-items-center justify-content-around">
                            <form action="{{ route('products.edit', $product->id) }}" method="get">
                                <button class="btn btn-sm btn-warning rounded-0">
                                    {{ __('edit') }}
                                </button>
                            </form>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-sm btn-danger rounded-0">
                                    {{ __('delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends('layout.master')
@section('content')
@component('layout.components.title')
    {{ __('show_page') }}
@endcomponent
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead class="">
                    <tr class="text-center">
                        <th scope="col" class="">#</th>
                        <th scope="col" class="">{{ __('name') }}</th>
                        <th scope="col" class="">{{ __('parent') }}</th>
                        <th scope="col" class="">{{ __('action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->parent }}</td>
                        
                        <td class="d-flex border-0 align-items-center">
                            <form action="{{ route('categories.edit', $category->id) }}" method="get">
                                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                                {{ __('edit') }}
                                </button>
                            </form>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-sm btn-danger mx-2 rounded-0">
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

@extends('layout.master')
@section('content')
@component('layout.components.title')
    {{ __('category_page') }}
@endcomponent
<div class="container mt-3">
    <form action="{{ route('categories.create') }}" method="get">
        <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
            {{ __('create_a_new_category') }}
        </button>
    </form>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="">#</th>
                        <th scope="col" class="">{{ __('name') }}</th>
                        <th scope="col" class="">{{ __('parent') }}</th>
                        <th scope="col" class="">{{ __('action') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr class="text-center">
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->parent }}</td>
                        <td class="d-flex align-items-center justify-content-around">
                            <form action="{{ route('categories.show', $category->id) }}" method="get">
                                <button class="btn btn-sm btn-primary rounded-0">
                                {{ __('show') }}
                                </button>
                            </form>
                            <form action="{{ route('categories.edit', $category->id) }}" method="get">
                                <button class="btn btn-sm btn-warning rounded-0">
                                {{ __('edit') }}
                                </button>
                            </form>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-sm btn-danger rounded-0">
                                {{ __('delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
        </div>
    </div>
</div>
@endsection

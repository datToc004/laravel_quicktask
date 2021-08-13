@extends('layout.master')
@section('content')
@component('layout.components.title')
    {{ __('edit_page') }}
@endcomponent
<div class="container mt-3">
    <div class="row">
        <div class="col-12 ">
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="put" />
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">{{ __('name') }}</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="{{ __('name') }}" name="name" value="{{ $category->name }}">
                </div>
                <div class="form-group ">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('parent') }}:</label>
                    <select class="form-control" name="parent" id="">
                        <option value="0">----ROOT----</option>
                        {{ getCategory($categories, 0, '', $category->parent) }}
                    </select>
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
@endsection

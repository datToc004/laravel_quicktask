@extends('layout.master')
@section('content')
@component('layout.components.title')
    {{ __('create_page') }}
@endcomponent
<div class="container mt-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <form action="{{ route('categories.store') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">{{ __('name') }}</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="{{ __('name') }}" name="name">
                </div>
                <div class="form-group ">
                    <label for="parent" class="text-uppercase font-weight-bold">{{ __('parent') }}:</label>
                    <select class="form-control" name="parent" id="">
                        <option value="0">----ROOT----</option>
                        {{ getCategory($categories, 0, '', 0) }}
                    </select>
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
@endsection

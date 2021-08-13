<div class="container">
    <div class="row">
        <div class="col-12">
            <span class="badge badge-success text-uppercase text-left">{{$slot}}</span>
            <a href="{{ route('change-language', ['en']) }}">{{ __('English') }}</a>
            <a href="{{ route('change-language', ['vi']) }}">{{ __('Vietnamese') }}</a>
        </div>
    </div>
</div>

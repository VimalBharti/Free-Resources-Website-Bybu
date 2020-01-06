
@extends('layouts.blank')

@section('content')
    <div>
        <div class="back-btn" style="position:absolute;right:20px;z-index:999;top:10px">
            <a style="padding:12px;border-radius:0 0 6px 6px;background:#E84E89;border-color:#E84E89;color:#fff;font-weight:bold;font-size:16px;text-decoration:none;" href="{{route('free-templates.index')}}">Close Preview</a>
        </div>
        {!!$template->code!!}
    </div>
@endsection
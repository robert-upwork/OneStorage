@extends('layouts.app')

@section('title')
<title>{{__('Forgot Password')}}</title>
@endsection

@section('styles')
<link href="{{ asset('css/common.css') }}" rel="stylesheet">
@endsection


@section('content')
<div class="px-4 mx-auto w-1/5 py-52">

    <p class="subheader-title">忘記密碼</p>
    <form action="{{route('password.request')}}" method="post">
        @csrf
        @if(Session::has('errors'))
            <p class="my-2 text-red-700">{{Session::get('errors')->first('email')}}</p>
        @endif
        @if(Session::has('status'))
            <p class="my-2 text-green-700">{{Session::get('status')}}</p>
        @endif
        <div class="input-group mb-8">
            <img class="form-control-icon" src="{{asset('images/contactUs/icons8-email-50@2x.png')}}" alt="Mobile">
            <input class="form-control" type="email" name="email" placeholder="電子郵件" required>
        </div>

        <button class="submit-btn hover:bg-purple-400">
            送出
        </button>
    </form>
</div>
@endsection

@section('scripts')
@endsection


@section('footer')
@endsection

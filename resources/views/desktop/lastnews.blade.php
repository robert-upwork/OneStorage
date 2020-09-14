@extends('layouts.app')

@section('title')
<title>{{__('最新資訊')}}</title>
@endsection

@section('styles')
<style>
    #main-content {
        font-family: "RobertBlack";
    }
</style>

@endsection

@section('accessory')
@include('partials.accessory')
@endsection

@section('content')

<img class="w-full" src="{{asset('images/latest_news/bg_lastnews.jpg')}}" />

<div class="bg-white mx-auto w-3/5 mb-10 floating-panel">
    <div class=" text-center text-5xl py-10">
        <h1 class="font_36">最新資訊</h1>
    </div>
    @if(count($users)>0)
    <?php
    $index = 0;
    ?>
    @foreach($users as $user)
    <a href="{{url('/news')}}" class="lg:flex rounded-lg mt-2 lg:py-3 lg:px-10">
        <img class="h-24 md:h-32 mr-10 md:mb-4" src="{{asset('images/latest_news/Image 35.png')}}">
        <div class="w-full text-center">
            <div class="flex justify-between">
                <p class="font_19 md:text-center lg:text-left leading-normal px-10 lg:px-0">【搬屋冇煩惱】搬屋前一定要知嘅小貼士</p>
                <p class="font_16 robert-regular">Published Date:12-02-2020</p>
            </div>

            <p class="font_16 w-2/3 text-justify mt-8 mb-4 leading-normal ml-3">因應最近新型肺炎疫情，至尊迷你倉 <b>ONE Storage</b> 為保障各客戶及職員的健康，由即日起將採取以下防疫措施。
            </p>
        </div>
    </a>
    <?php
    $index++;
    if ($index != count($users)) {
    ?>
        <div class="rounded-lg lg:px-10 px-10 md:px-20 mb-3">
            <hr>
        </div>
    <?php
    }
    ?>
    @endforeach
    @endif
</div>
@endsection


@section('scripts')

@endsection


@section('footer')
@include('layouts.footer')
@endsection
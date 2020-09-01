@extends('layouts.app')

@section('title')
<title>{{__('最新資訊')}}</title>
@endsection

@section('styles')

@endsection

@section('content')
<div class="bg-white sm:mx-30  lg:mx-56 md:mx-40 mx-20 mt-32 mb-10">
    <div class=" text-center text-5xl pt-5 pb-5">
        <h1 class="font_49">最新資訊</h1>
    </div>
    @if(count($users)>0)
    <?php
    $index = 0;
    ?>
    @foreach($users as $user)
    <a href="{{url('/news')}}" class="lg:flex rounded-lg mt-2 lg:py-3 lg:px-10">
        <img class="h-24 md:h-32 mx-auto md:mx-auto md:mb-4" src="{{asset('images/latest_news/Image 35.png')}}">
        <div class="text-center lg:text-left md:px-10">
            <p class="font_25 md:text-center lg:text-left leading-normal px-10 lg:px-0">
                【搬屋冇煩惱】搬屋前一定要知嘅小貼士
            </p>
            <p class="font_19 text-justify my-4 leading-normal px-10 lg:px-0 ">
                因應最近新型肺炎疫情，至尊迷你倉 <b>ONE Storage</b> 為保障各客戶及職員的健康，由即日起將採取以下防疫措施。
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
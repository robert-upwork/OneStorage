﻿@extends('mobile.layouts.app')

@section('title')
<title>{{__('Location')}}</title>
@endsection

@section('styles')
<style>
    .accordion {
        background-color: #E0CBF6;
        color: #444;
        cursor: pointer;
        padding: 12px;
        margin-top:10px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        font-weight:600;
    }

    .accordion:hover {
        background-color: #E0CB00;
    }

    .panel-other {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    li {
        color:#9A9CA2;
    }
    li.active {
        color:#4D5567
    }

    .maintitle-wrapper-m {
        padding-top:32px;
    }
    .maintitle-left-m {
        padding-top:20px; 
        /* margin-left:163px;  */
        margin-right:33px;
        font-size:28px;
    }
    .maintitle-divider-m {
        height:65px; 
        background-color:#707070;
    }
    .maintitle-right-m {
        padding-top:20px; 
        margin-left:27.5px;
        font-size:29px;
    }
    .maintitle-right-aboutus-english-m {
        font-family:'Roboto';
    }
    .maintitle-right-bottom-m {
        font-size:11px; 
        color:#B2B5BD;
        transform:translate(0, 50%);
    }
    .color-primary {
        color:#4D5567;
    }

    .category-title {
        font-size:19px;
        font-weight:600;
    }
    .content-area {
        min-height:500px;
    }

    .color-primary {
        color:#4D5567;
    }

</style>

<link rel="stylesheet" href="{{ asset('web-icons/web-icons.min.css') }}" />

@endsection
@section('content')
<div class="relative block bg-white">

    <div class="flex maintitle-wrapper-m color-primary text-center mx-auto w-max-content">
        <span class="uppercase maintitle-left-m">one</span>
        <div class="w-px maintitle-divider-m"></div>
        <div class="relative maintitle-right-m">
            <div class="flex items-center">
                <span>常見問題</span>
            </div>
            <div class="capitalize absolute bottom-0 left-0 maintitle-right-bottom-m">解答關於迷你倉的疑難</div>
        </div>
    </div>
    <div class="flex pt-10">
        <ul class="w-max-content pr-2 mx-auto">
            <li id="item0" class="p-3 cursor-pointer item category-title text-left active">尺寸選擇</li>
            <li id="item1" class="p-3 cursor-pointer item category-title text-left">環境設施
                <ul class="w-max-content pl-2 ">
                    <li id="item2" class="p-3 item cursor-pointer category-title text-left">睇倉</li>
                    <li id="item3" class="p-3 item cursor-pointer category-title text-left">消防安保</li>
                    <li id="item4" class="p-3 item cursor-pointer category-title text-left">增值服務</li>
                </ul>
            </li>
            <li id="item5" class="p-3 cursor-pointer item category-title text-left">合約與條款
                <ul class="w-max-content pl-2 ">
                    <li id="item6" class="p-3 item cursor-pointer category-title text-left">合約與條款</li>
                    <li id="item7" class="p-3 item cursor-pointer category-title text-left">合約與條款</li>
                    <li id="item8" class="p-3 item cursor-pointer category-title text-left">合約與條款</li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="content" class="bg-gray content-area">
        <div class="pl-6 py-7 category-title color-primary active">尺寸選擇</div>
        <div class="px-6">
            <div class="accordion relative appearance-none">我該選用多大的倉儲單位?
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> --}}
                        {{-- <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg> --}}
                        <i class="icon wb-chevron-down"></i>
                </div>
            </div>
            <div class="panel-other">
                <p class="leading-normal px-5 py-4 color-primary">您可以自行使用空間計算器以確認計算所需倉庫尺寸，請點擊以下按鈕查詢所需尺寸。  您亦可以點擊以下按鈕，填寫相關聯繫資料，由我們的客戶服務員聯絡您為您推薦合適的倉儲單位以及相關的優惠。 </p>
            </div>
            <div class="accordion relative appearance-none">我該選用多大的倉儲單位?
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> --}}
                        {{-- <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg> --}}
                        <i class="icon wb-chevron-down"></i>
                </div>
            </div>
            <div class="panel-other">
                <p class="leading-normal px-5 py-4 color-primary">您可以自行使用空間計算器以確認計算所需倉庫尺寸，請點擊以下按鈕查詢所需尺寸。  您亦可以點擊以下按鈕，填寫相關聯繫資料，由我們的客戶服務員聯絡您為您推薦合適的倉儲單位以及相關的優惠。 </p>
            </div>
            <div class="accordion relative appearance-none">我該選用多大的倉儲單位?
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> --}}
                        {{-- <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg> --}}
                        <i class="icon wb-chevron-down"></i>
                </div>
            </div>
            <div class="panel-other">
                <p class="leading-normal px-5 py-4 color-primary">您可以自行使用空間計算器以確認計算所需倉庫尺寸，請點擊以下按鈕查詢所需尺寸。  您亦可以點擊以下按鈕，填寫相關聯繫資料，由我們的客戶服務員聯絡您為您推薦合適的倉儲單位以及相關的優惠。 </p>
            </div>
            <div class="accordion relative appearance-none">我該選用多大的倉儲單位?
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> --}}
                        {{-- <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg> --}}
                        <i class="icon wb-chevron-down"></i>
                </div>
            </div>
            <div class="panel-other">
                <p class="leading-normal px-5 py-4 color-primary">您可以自行使用空間計算器以確認計算所需倉庫尺寸，請點擊以下按鈕查詢所需尺寸。  您亦可以點擊以下按鈕，填寫相關聯繫資料，由我們的客戶服務員聯絡您為您推薦合適的倉儲單位以及相關的優惠。 </p>
            </div>                      
        </div>
        <div class="pl-6 py-7 category-title color-primary active">睇倉</div>
        <div class="px-6">
            <div class="accordion relative appearance-none">我該選用多大的倉儲單位?
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> --}}
                        {{-- <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg> --}}
                        <i class="icon wb-chevron-down"></i>
                </div>
            </div>
            <div class="panel-other">
                <p class="leading-normal px-5 py-4 color-primary">您可以自行使用空間計算器以確認計算所需倉庫尺寸，請點擊以下按鈕查詢所需尺寸。  您亦可以點擊以下按鈕，填寫相關聯繫資料，由我們的客戶服務員聯絡您為您推薦合適的倉儲單位以及相關的優惠。 </p>
            </div>
            <div class="accordion relative appearance-none">我該選用多大的倉儲單位?
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center px-2 text-gray-700">
                    {{-- <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> --}}
                        {{-- <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg> --}}
                        <i class="icon wb-chevron-down"></i>
                </div>
            </div>
            <div class="panel-other">
                <p class="leading-normal px-5 py-4 color-primary">您可以自行使用空間計算器以確認計算所需倉庫尺寸，請點擊以下按鈕查詢所需尺寸。  您亦可以點擊以下按鈕，填寫相關聯繫資料，由我們的客戶服務員聯絡您為您推薦合適的倉儲單位以及相關的優惠。 </p>
            </div>                       
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    // Script For Accordion
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            // this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                panel.style.border = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.style.border = "1px solid #DCDCDC";
            }

            if(panel.style.maxHeight) {
                console.log(this.childNodes[1].childNodes[1].className);
                this.childNodes[1].childNodes[1].className = this.childNodes[1].childNodes[1].className.replace("wb-chevron-down", "wb-chevron-up");
            } else {
                this.childNodes[1].childNodes[1].className = this.childNodes[1].childNodes[1].className.replace("wb-chevron-up", "wb-chevron-down");

            }
        });
    }

    var items = document.getElementsByTagName("li");
    var content = document.getElementById("content");


    for (var i = 0; i < items.length ; i ++) {

        items[i].addEventListener("click", function(event) {

            if (event.target.id == "item0") {
                window.location.reload();
            }

            event.cancelBubble = true;

            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");

            this.className += " active";

            content.innerHTML = "<div style='color:blue;font-size:50px;'>Page : " + this.id + "</div>";

            console.log(event);

        });
    }
</script>
@endsection

@section('footer')
@include('mobile.layouts.footer1')
@endsection

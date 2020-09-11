@extends('layouts.app')

@section('title')
<title>{{__('Contact Us')}}</title>
@endsection

@section('styles')
<style>
    .main-wrapper {
        /* margin-top:-80px;
        margin-right:200px;
        margin-left:200px; */
    }

    .color-primary {
        color: #4D5567;
    }

    .content-title {
        font-size: 25px;
        font-weight: 800;
        padding-top: 66px;
        padding-bottom: 22px;
    }

    .content-description {
        margin-left: 173px;
        margin-right: 173px;
        font-size: 16px;
    }

    .content-image-wrapper-1 {
        padding: 56px;
    }

    /* .content-image-wrapper-2 {
        padding-top:56px;
        padding-left:121px;
        padding-right:121px;
        margin-bottom:80px;
    
    } */

    .calculator-content-title-m {
        font-size: 21px;
        padding-left: 36px;
        padding-top: 30px;
        padding-bottom: 20px;
    }

    .calculator-item-title {
        font-size: 17px;
        padding: 15px;
        text-align: center;
        background-color: #E5E5E5;
    }

    div .calculator-item-title.active {
        background-color: #E0CBF6;
    }

    /* .calculator-items-wrapper {
        margin-left:100px;
        margin-right:100px;
        margin-top:80px;
    } */
    .calculator-item-element {
        padding: 10px;
        height: 80px;
        margin: 5px;
    }

    .calculator-item-element-m {
        padding: 10px;
        height: 30px;
        margin: 5px;
    }

    .calculator-item-element-title {
        font-size: 19px;

    }

    .calculator-item-element-title-m {
        font-size: 15px;

    }

    .calculator-elements-wrapper {
        background-color: #E0CBF6;
        padding: 5px;
    }

    .calculator-item-element-input {
        background-color: #E0CBF6;
        border-bottom: 1px solid #4D5567;
        font-size: 65px;
        width: 40px;
    }

    .calculator-item-element-input-m {
        background-color: #E0CBF6;
        border-bottom: 1px solid #4D5567;
        font-size: 21px;
        width: 31px;
    }

    /* Remove Spinners in input type number */

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .room-card-wrapper {
        min-width: 120px;
        height: 280px;
        padding-top: 40px;
    }

    .room-card-wrapper-m {
        min-width: 160px;
        height: 245px;
        padding-top: 40px;
    }

    .room-card-image {

        width: 100px;
        height: 80px;

    }

    .room-card-title {
        font-size: 22px;
        /* color:#B2B5BD; */
    }

    .room-footer {
        font-size: 29px;
    }

    .room-footer-image {
        width: 30px;
        height: 30px;
    }

    div .room-card-wrapper-m {
        background: white;
        color: #B2B5BD;
    }

    div .room-card-wrapper-m div>button {
        background-color: white;
    }

    div .room-card-wrapper-m.active {
        background: #56628C;
        color: white;
    }

    div .room-card-wrapper-m.active div>button {
        background-color: #E0CBF6;
    }

    .main-screen {
        max-width: 375px;
    }

    .maintitle-wrapper-m {
        padding-top: 32px;
    }

    .maintitle-left-m {
        padding-top: 20px;
        /* margin-left:163px;  */
        margin-right: 33px;
        font-size: 28px;
    }

    .maintitle-divider-m {
        height: 65px;
        background-color: #707070;
    }

    .maintitle-right-m {
        padding-top: 20px;
        margin-left: 27.5px;
        font-size: 30px;
    }

    .maintitle-right-aboutus-english-m {
        font-family: 'Roboto';
    }

    .maintitle-right-bottom-m {
        font-size: 10px;
        color: #B2B5BD;
        transform: translate(0, 50%);
    }

    .calculator-others-title-m {
        font-size: 21px;
        padding-left: 26px;
        padding-top: 20px;
        padding-bottom: 20px;
        font-weight: 600;
    }

    .calculator-others-item-image {
        width: 124px;
    }

    .calculator-others-item-divider {
        margin-left: 25px;
        margin-right: 25px;
        height: 1px;
        background-color: #707070;
    }

    .accordion {
        /* background-color: #E0CBF6; */
        color: #444;
        cursor: pointer;
        padding: 8px;
        margin-top: 2px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        font-weight: 600;
    }
</style>
@endsection

@section('accessory')
@include('partials.accessory')
@endsection

@section('content')

<!-- <div class="w-full mx-auto main-image" style="margin-top: 0px;">
    <img class="p-0 m-0" src="{{asset('images/contact_us/shutterstock_1224334369.png')}}" />
</div> -->

<div class="relative block bg-white main-wrapper">
    <div class="flex maintitle-wrapper-m color-primary text-center mx-auto w-max-content">
        <span class="uppercase maintitle-left-m">one</span>
        <div class="w-px maintitle-divider-m"></div>
        <div class="relative maintitle-right-m">
            <div class="flex items-center">
                <span>聯絡我們</span>
            </div>
            <div class="capitalize absolute bottom-0 left-0 maintitle-right-bottom-m">我們會在24小時內回覆</div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 pb-10">
        <div class="col-span-2">
            <div class="mt-2 ml-10">
                <p class=" form_header my-8">連絡我們</p>
                <div class="grid grid-cols-6 gap-4">
                    <a href="Tel: 852-21112636" class="flex col-span-6">
                        <img class="fill-current mr-4" src="{{asset('images/footer/icons8-phone-50@2x.png')}}" />
                        <span class="self-center text-primary font_19">(852) 2111 2636</span>
                    </a>
                    <a href="mailto:cs@onestorage.com.hk" class="flex col-span-6 ">
                        <img class="fill-current mr-4" src="{{asset('images/footer/icons8-email-open-50@2x.png')}}" />
                        <span class="self-center text-primary font_19">cs@onestorage.com.hk</span>
                    </a>
                    <a href="https://wa.me/85251188503" class="flex col-span-6 ">
                        <img class="fill-current mr-4" src="{{asset('images/footer/icons8-whatsapp-50@2x.png')}}" />
                        <span class="self-center text-primary font_19">(852) 5118 8503</span>
                    </a>
                    <a href="http://maps.google.com/?q=新界屯門新益里3號通明工業大廈+4/5樓" class="flex col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-5 xl:col-span-2...">
                        <img class="fill-current mr-4" src="{{asset('images/footer/icons8-home-50@2x.png')}}" />
                        <span class="self-center text-primary font_19">查看分店地址</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2  mt-8 ml-5">
                <div class="col-span-2">
                    <p class="font_21 pl-10 pb-5">新界</p>
                </div>
                <div class="col-span-2">
                    <?php
                    $contactInfos = App\ContactInfo::get1();
                    ?>
                    @foreach($contactInfos as $contact)
                    <div class="accordion relative appearance-none items-center">
                        <div class="flex">
                            <img class="fill-current mr-4" src="{{asset('images/footer/Group 22.png')}}" />
                            <span class="self-center text-primary">{{$contact['name']}}</span>
                        </div>
                    </div>
                    <div class="panel flex">
                        <img class="fill-current" style="height: 50px;" src="{{asset('images/footer/Artboard 1@72x-8@2x.png')}}" />
                        <div class=" leading-5">
                            <p class="font_14">
                                電話 :<span>{{$contact['phone']}}</span>
                            </p>
                            <a href="mailto:cs@onestorage.com.hk" class="font_14">
                                電郵 : <span>{{$contact['email']}}</span>
                            </a>
                            <p class="font_14">
                                <a href="{{'http://maps.google.com/?q='.$contact['address']}}" target="_blank" rel="noopener noreferrer">
                                    地址 : {{$contact['address']}}
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-2 mt-8  ml-5">
                <div class="col-span-2">
                    <p class="font_21 pl-10 pb-5">九龍</p>
                </div>
                <div class="col-span-2">
                    <?php
                    $contactInfos = App\ContactInfo::get2();
                    ?>
                    @foreach($contactInfos as $contact)
                    <div class="accordion relative appearance-none items-center">
                        <div class="flex">
                            <img class="fill-current mr-4" src="{{asset('images/footer/Group 22.png')}}" />
                            <span class="self-center text-primary">{{$contact['name']}}</span>
                        </div>
                    </div>
                    <div class="panel flex">
                        <img class="fill-current" style="height: 50px;" src="{{asset('images/footer/Artboard 1@72x-8@2x.png')}}" />
                        <div class=" leading-5">
                            <p class="font_14">
                                電話 :<span>{{$contact['phone']}}</span>
                            </p>
                            <a href="mailto:cs@onestorage.com.hk" class="font_14">
                                電郵 : <span>{{$contact['email']}}</span>
                            </a>
                            <p class="font_14">
                                <a href="{{'http://maps.google.com/?q='.$contact['address']}}" target="_blank" rel="noopener noreferrer">
                                    地址 : {{$contact['address']}}
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-2 mt-8  ml-5">
                <div class="col-span-2">
                    <p class="font_21 pl-10 pb-5">香港島</p>
                </div>
                <div class="col-span-2">
                    <?php
                    $contactInfos = App\ContactInfo::get3();
                    ?>
                    @foreach($contactInfos as $contact)
                    <div class="accordion relative appearance-none items-center">
                        <div class="flex">
                            <img class="fill-current mr-4" src="{{asset('images/footer/Group 22.png')}}" />
                            <span class="self-center text-primary">{{$contact['name']}}</span>
                        </div>
                    </div>
                    <div class="panel flex">
                        <img class="fill-current" style="height: 50px;" src="{{asset('images/footer/Artboard 1@72x-8@2x.png')}}" />
                        <div class=" leading-5">
                            <p class="font_14">
                                電話 :<span>{{$contact['phone']}}</span>
                            </p>
                            <a href="mailto:cs@onestorage.com.hk" class="font_14">
                                電郵 : <span>{{$contact['email']}}</span>
                            </a>
                            <p class="font_14">
                                <a href="{{'http://maps.google.com/?q='.$contact['address']}}" target="_blank" rel="noopener noreferrer">
                                    地址 : {{$contact['address']}}
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-span-2 px-2 mt-6">
            <form class="form-enquiry" method="post" action="{{url('/enquiry')}}">
                @csrf
                <input type="hidden" name="page" value="Contact us">
                <p class="text2 mb-8">給我們留言</p>
                <div class="flex mb-4 w-full">
                    <div class="flex w-1/2 input-group">
                        <img class="form-control-icon" src="{{asset('images/contactUs/icons8-account-50@2x.png')}}" alt="Mobile">
                        <input class="w-full form-control" type="text" placeholder="姓" name="firstName" required>
                    </div>
                    <div class="w-1/2 flex input-group">
                        <input class="w-full form-control" style="margin-left: 4px;padding-left:12px" type="text" placeholder="名" name="lastName" required>
                    </div>
                </div>

                <div class="input-group mb-4">
                    <img class="form-control-icon" src="{{asset('images/contactUs/icons8-phone-50@2x.png')}}" alt="Mobile">
                    <input class="form-control" type="text" placeholder="" name="phoneNumber">
                </div>

                <div class="w-full inline-block relative mb-6">
                    <select class="block appearance-none w-full bg-white border border-gray-200 px-4 py-2 pr-8 leading-tight focus:outline-none" style="color:#76838f" name="branchName">
                        <option value="" selected disabled>分店</option>
                        <?php
                        $branches = App\Store::select('branch')->get();
                        ?>
                        @foreach($branches as $branch)
                        <option value="{{$branch->branch}}">{{$branch->branch}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-6 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                    </div>
                </div>

                <div class="w-full inline-block relative mb-6">
                    <select class="block appearance-none w-full bg-white border border-gray-200 px-4 py-2 pr-8 leading-tight focus:outline-none" style="color:#76838f" name="question">
                        <option value="" selected>查詢問題</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-6 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                    </div>
                </div>

                <textarea class="w-full border placeholder-gray-600 px-3 py-2 border-gray-200 mb-6" style="padding-left:16px;color:#76838f" type="text" placeholder="你的信息" rows="3" name="message"></textarea>

                <button class="submit-btn hover:bg-purple-400">
                    送出
                </button>
            </form>
        </div>
    </div>

</div>
@endsection


@section('scripts')
<script>
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
                // panel.style.border = "1px solid #DCDCDC";
            }
        });
    }
</script>
@endsection

@section('footer')
@include('layouts.footer1')
@endsection
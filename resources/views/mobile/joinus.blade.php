<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Booking') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/common.css')}}" rel="stylesheet">
    <link href="{{ asset('css/mobileCss.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('web-icons/web-icons.min.css') }}"/>
</head>

<body class=" bg-white">
    <main className="w-full mx-auto">

        <p class=" heading-font">職位空缺</p>
        <div class="horizontal-line">
        </div>

        <div class="flex mt-16 bg-grey p-3">
            <img class="mr-4 w-40 h-40" src="{{asset('images/contactUs/contactUs.png')}}" alt="Avatar of Jonathan Reinink">
            <div class="body-content lg:rounded-b-none lg:rounded-r">
                <div class="mb-8">
                    <div class=" subtitle-font">客戶服務主任</div>
                    <p class="content-font">處理迷你倉銷售﹑客戶查詢﹑透過電郵及電話處理客戶要求﹑為客戶提供高水平服務﹑負責日常事務﹑
                        文書處理﹑協助租務及市場部運作。 </p>
                </div>

                <div class="mb-4">
                    <div class=" subtitle-font">入職要求</div>
                    <p class="after-list content-font">中六或以上程度及一年或以上的客戶服務工作經驗</p>
                    <p class="after-list content-font">有客戶服務或銷售經驗者優先</p>
                    <p class="after-list content-font">需自律﹑獨立﹑有責任心 </p>
                    <p class="after-list content-font">懂基本電腦操作</p>
                </div>

                <div class="mb-4">
                    <div class=" subtitle-font">員工福利</div>
                    <p class="after-list content-font">銀行假期 </p>
                    <p class="after-list content-font">有薪年假 </p>
                    <p class="after-list content-font">醫療福利 </p>
                    <p class="after-list content-font">年尾獎金 </p>
                    <p class="after-list content-font">營業獎金 </p>
                    <p class="after-list content-font">員工優惠 </p>
                    <p class="after-list content-font">在職培訓 </p>
                    <p class="after-list content-font">晉升機會 </p>
                </div>
                <p class="content-font contentfont-color">請電郵履歷至 swhr@soundwill.com.hk </p>
                <p class="content-font contentfont-color">(申請人提供之全部資料絕對保密及只作招聘之用) </p>
            </div>
        </div>

        <form class=" contact-form">
            <p class="content-font mb-10">立即申請 </p>

            <div class="flex mb-4 w-full">
                <div class="flex w-1/2 input-group">
                    <img class="form-control-icon" src="{{asset('images/contactUs/icons8-account-50@2x.png')}}" alt="Mobile">
                    <input class="w-full form-control" type="text" placeholder="姓">
                </div>
                <div class="w-1/2 flex input-group">
                    <input class="w-full form-control" style="margin-left: 4px;padding-left:12px" type="text" placeholder="名">

                </div>
            </div>


            <div class="input-group mb-4">
                <img class="form-control-icon" src="{{asset('images/contactUs/icons8-phone-50@2x.png')}}" alt="Mobile">
                <input class="form-control" type="text" placeholder="電話號碼">
            </div>

            <div class="input-group mb-8">
                <img class="form-control-icon" src="{{asset('images/contactUs/icons8-email-50@2x.png')}}" alt="Mobile">
                <input class="form-control" type="text" placeholder="電子郵件">
            </div>

            <div class="flex flex-wrap -mx-3 px-3 mb-8">
                <p class="md:w-1/4 upload-label">上傳 CV</p>
                <button class="md:w-1/4 fileupload-btn">選擇檔案</button>
                <p class="md:w-1/4 upload-label">上傳 Cover letter</p>
                <button class="md:w-1/4 fileupload-btn">選擇檔案</button>
            </div>

            <button class="submit-btn hover:bg-purple-400">
                送出
            </button>
        </form>
        
    </main>
</body>

</html>
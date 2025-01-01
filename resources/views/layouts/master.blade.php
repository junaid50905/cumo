<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <title> @yield('title') | CUMO - Admin & Dashboard Panel</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @include('layouts.head-css')
    @livewireStyles()
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  /> --}}
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"
    integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />


    <title></title>
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{--                    @include('elements.breadcrumb') --}}
                    @include('elements.errors')
                    @include('elements.flash')
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.right-sidebar')
    @include('layouts.vendor-scripts')
    @livewireScripts()
    <!-- jquery step -->
    <script src="{{ asset('assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/toastr.init.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script> --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"
    integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
    @stack('bottomJsStack')

<script>
$(".ch").chosen();
 let observer = new MutationObserver((mutations) => {
  mutations.forEach((mutation) => {
    let oldValue = mutation.oldValue;
    let newValue = mutation.target.textContent;
    if (oldValue !== newValue) {
        for(let select of $('.ch')){
            $(".ch").chosen();
    }
    }
  });
});

observer.observe(document.body, {
  characterDataOldValue: true,
  subtree: true,
  childList: true,
  characterData: true
});
</script>

<!-- This is for session alert function -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        let countdownElement = document.getElementById('countdown');
        let alertMessageElement = document.getElementById('alert-message');
        let timeLeft = 15; // 15 seconds countdown
       
        let countdownInterval = setInterval(() => {
            if (timeLeft <= 0) {
                clearInterval(countdownInterval); 
                alertMessageElement.style.display = 'none'; 
            } else {
                timeLeft -= 1; 
                countdownElement.textContent = timeLeft;
            }
        }, 1000);
    });
</script>
</body>
</html>

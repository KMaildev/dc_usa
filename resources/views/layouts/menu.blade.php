<header>
    <div id="header-sticky" class="main-header transparent-header" style="background-color: white;">
        <div class="container-fulid header-container-p">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 col-md-2">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('data/weblogo.jpg') }}" class="mobile-logo logo-sticky-none" alt="Logo"
                            style="width: 78%">
                    </a>

                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('data/weblogo.jpg') }}" class="mobile-logo s-logo-none" alt="Logo"
                            style="width: 78%">
                    </a>
                </div>

                <div class="col-lg-10 col-md-10">
                    <div class="menu-area">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>

                                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                                        <a href="{{ route('welcome') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ပင်မစာမျက်နှာ
                                            @else
                                                Home
                                            @endif
                                        </a>
                                    </li>


                                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                                        <a href="javascript:void(0)" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ကုမ္ပဏီအကြောင်း
                                            @else
                                                About Us
                                            @endif
                                        </a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    @if (session('key') == 'mm')
                                                        ကျွန်ုပ်တို့၏ကုမ္ပဏီအကြောင်း
                                                    @else
                                                        About of Our Company
                                                    @endif
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team.index') }}">
                                                    @if (session('key') == 'mm')
                                                        ကျွန်ုပ်တို့၏အဖွဲ့သားများ
                                                    @else
                                                        Our Team Members
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="{{ request()->is('services') ? 'active' : '' }}">
                                        <a href="{{ route('services.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ဝန်ဆောင်မှုများ
                                            @else
                                                Our Services
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('price_calculator') ? 'active' : '' }}">
                                        <a href="{{ route('price_calculator.index') }}" style="color: #E93F33;"
                                            data-toggle="modal" data-target="#exampleModalLong">
                                            @if (session('key') == 'mm')
                                                စျေးနှုန်းတွက်ရန်
                                            @else
                                                Calculator
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('news') ? 'active' : '' }}">
                                        <a href="{{ route('news.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                သတင်း
                                            @else
                                                News
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('activities') ? 'active' : '' }}">
                                        <a href="{{ route('activities.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                လှုပ်ရှားမှုများ
                                            @else
                                                Activities
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ဆက်သွယ်ရန်
                                            @else
                                                Contact Us
                                            @endif
                                        </a>
                                    </li>

                                    <span style="padding-left: 20px">
                                        <a href="{{ route('set_eng') }}">
                                            <img src="{{ asset('data/us.png') }}" alt=""
                                                style="width: 45px; height: 40px; padding: 2px;">
                                        </a>

                                        <a href="{{ route('set_mm') }}">
                                            <img src="{{ asset('data/myanmar.png') }}" alt=""
                                                style="width: 50px; height: 49px; padding: 2px;">
                                        </a>
                                    </span>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>


            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="container-fluid">
                    <div class="row">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content fare-rate-modal">
                                <ul class="nav nav-tabs setup-panel">
                                    <li class="nav-item single-steps">
                                        <a class="nav-link btn-amber" href="#step-1">
                                            Myanmar to United States
                                        </a>
                                    </li>
                                    <li class="nav-item single-steps">
                                        <a class="nav-link btn-blue-grey" href="#step-2">
                                            United States to Myanmar
                                        </a>
                                    </li>
                                </ul>

                                <div class="single-setup" id="step-1">
                                    <div class="fare-rate-tab-content">
                                        <div class="modal-shipping-details">
                                            <div class="modal-shipping-title">
                                                <h2>Price <span>Calculator</span></h2>
                                            </div>
                                            <div class="f-left pr-20">
                                                <div class="shipping-details-info shipping-tracking-info">
                                                    <div class="modal-tracking-info">
                                                        <label for="invoice-id">
                                                            Weight (အလေးချိန်) Lb
                                                        </label>
                                                        <input type="text" placeholder="Enter Weight"
                                                            oninput="weightMMtoUS()" id="enterWeightMMtoUS">
                                                    </div>
                                                </div>

                                                <div class="modal-shipping-more-list">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-map"></i>
                                                                Myanmar to United States
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="flaticon-sings"></i>
                                                                <span id="totalLbMMTOUS">0</span>
                                                                Lb =
                                                                <span id="totalPriceMMTOUS">0</span>
                                                                USD
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div class="tracking-quots-board">
                                                    <label>
                                                        Remark:
                                                    </label>
                                                    <div class="tracking-quots-board-info"
                                                        style="background-color: white; padding: 20px;">
                                                        <ul>
                                                            <li>
                                                                * ၁ ပေါင်ကနေ ပေါင် ၂၀ ထိ တစ်ပေါင်လျှင် - US $ 6.50
                                                            </li>
                                                            <li>
                                                                * ပေါင် ၂၀ အထက် တစ်ပေါင်လျှင် - US $ 6.00
                                                            </li>
                                                            <li>
                                                                * ရွှေထည် စိန်ထည်နှင့် Electric Device’s များသည် Boucher
                                                                ၏
                                                                10%
                                                                ဖြင့်တွက်ပါသည်
                                                            </li>

                                                            <li style="color: red;">
                                                                * ဤစျေးနှုန်းများသည် အချိန်နှင့်အမျှ
                                                                အပြောင်းအလဲရှိနိုင်ပါသည်
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tracking-modal-map">
                                                <img src="https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/336023812_770989490789662_3320025172782887295_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=WOOeKxVJm94AX-I7RFc&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAxwJgMy6t0ssH8zVARhSEQTs5hq-HA6Gz6Bje24M2sVw&oe=642688AF"
                                                    alt="" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-setup" id="step-2">
                                    <div class="fare-rate-tab-content">
                                        <div class="modal-shipping-details">
                                            <div class="modal-shipping-title">
                                                <h2>Price <span>Calculator</span></h2>
                                            </div>
                                            <div class="f-left pr-20">
                                                <div class="shipping-details-info shipping-tracking-info">
                                                    <div class="modal-tracking-info">
                                                        <label for="invoice-id">
                                                            Weight (အလေးချိန်) Lb
                                                        </label>
                                                        <input type="text" placeholder="Enter Weight"
                                                            oninput="weightUStoMM()" id="enterWeightUStoMM">
                                                    </div>
                                                </div>

                                                <div class="modal-shipping-more-list">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-map"></i>
                                                                United States to Myanmar
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="flaticon-sings"></i>
                                                                <span id="totalLbUSTOMM">0</span>
                                                                Lb =
                                                                <span id="totalPriceUSTOMM">0</span>
                                                                USD
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div class="tracking-quots-board">
                                                    <label>
                                                        Remark:
                                                    </label>
                                                    <div class="tracking-quots-board-info"
                                                        style="background-color: white; padding: 20px;">
                                                        <ul>
                                                            <li>
                                                                * ၁ ပေါင်ကနေ ပေါင် ၂၀ ထိ တစ်ပေါင်လျှင် - US $ 6.50
                                                            </li>
                                                            <li>
                                                                * ပေါင် ၂၀ အထက် တစ်ပေါင်လျှင် - US $ 6.00
                                                            </li>
                                                            <li>
                                                                * ရွှေထည် စိန်ထည်နှင့် Electric Device’s များသည် Boucher
                                                                ၏
                                                                10%
                                                                ဖြင့်တွက်ပါသည်
                                                            </li>

                                                            <li style="color: red;">
                                                                * ဤစျေးနှုန်းများသည် အချိန်နှင့်အမျှ
                                                                အပြောင်းအလဲရှိနိုင်ပါသည်
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tracking-modal-map">
                                                <img src="https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/336023812_770989490789662_3320025172782887295_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=WOOeKxVJm94AX-I7RFc&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAxwJgMy6t0ssH8zVARhSEQTs5hq-HA6Gz6Bje24M2sVw&oe=642688AF"
                                                    alt="" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<script>
    function weightMMtoUS() {
        var enterWeightMMtoUSLb = document.getElementById("enterWeightMMtoUS").value;
        document.getElementById('totalLbMMTOUS').innerHTML = enterWeightMMtoUSLb;
        if (enterWeightMMtoUSLb <= 20) {
            var total = enterWeightMMtoUSLb * 6.5;
        } else {
            var total = enterWeightMMtoUSLb * 6;
        }
        document.getElementById('totalPriceMMTOUS').innerHTML = total;
    }

    function weightUStoMM() {
        var enterWeightUSTOMM = document.getElementById("enterWeightUStoMM").value;
        document.getElementById('totalLbUSTOMM').innerHTML = enterWeightUSTOMM;
        var total = enterWeightUSTOMM * 6;
        document.getElementById('totalPriceUSTOMM').innerHTML = total;
    }
</script>

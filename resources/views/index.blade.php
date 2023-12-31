<x-layout>
    <!-- intro Sec -->
    <section class="intro-sec inner clearFix wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
        <div class="intro-img wow fadeInRight" data-wow-delay="3s">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <span><img src="img/img_profile_pic.png" alt="Profile Pic"></span>
                    </div>
                    <div class="back">
                        <img src="img/img_profile03.JPG" alt="Profile Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-txt">
            <ul class="social-link d-none">
                <li class="wow fadeInDown" data-wow-delay="3s"><a
                        href="https://www.facebook.com/profile.php?id=100011055373606&mibextid=LQQJ4d"><i
                            class="fa-brands fa-facebook icn"></i></a></li>
                <li class="wow fadeIn" data-wow-delay="4s"><a href="https://www.instagram.com/yu_n_moee/"><i
                            class="fa-brands fa-instagram icn"></i></a></li>
                <li class="wow fadeIn" data-wow-delay="4s"><a href="https://line.me/en/"><i
                            class="fa-brands fa-line icn"></i></a></li>
                <li class="wow fadeInUp" data-wow-delay="5s"><a href="https://www.skype.com/en/"><i
                            class="fa-brands fa-skype icn"></i></a></li>
            </ul>
            <div class="about-me">
                <h2 class="sec-title wow bounce" data-wow-duration="2s" data-wow-delay="1s">
                    Welcome to my portfolio
                </h2>
                <p class="sec-txt">
                    {{ __('Name') }}<br>
                    {{ __('Place') }}<br>
                    {{ __('Favorite') }}<br>
                    "{{ __('Quote') }}"
                </p>
            </div>
        </div>
    </section>

    <!-- about Sec -->
    {{-- <x-about /> --}}
    @include('pages.about-page')

    <!-- educaiton Sec -->
    <x-education class="sp" />

    <!-- services Sec -->
    <x-services />

    <!-- experiences Sec -->
    <x-experiences />
</x-layout>

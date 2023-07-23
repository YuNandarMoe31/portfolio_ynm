<!-- about sec -->
<section id="about" class="about-sec">
    <div class="inner">
        <h2 class="sec-title02">About Me</h2>
        <form action="{{ route('about.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="about-inner">
                <div class="about-img wow fadeInLeft" data-wow-duration="2s">
                    <div class="profile-card text-center">
                        <a href="#" class="profile-cover-link">
                            <img class="profile-cover" src="img/img_cover.jpg" alt="Profil Cover">
                            {{-- <i class="fa-solid fa-camera"></i> --}}
                        </a>
                        <div class="profile-info clearFix">
                            <a href="javascript:void(0)" class="profile-photo modal-toggle">
                                @if($imageData)
                                <img class="profile-pic" src="{{ url('upload/image/'. $imageData->image) }}" alt="Profile Image">
                                <i class="fa-solid fa-camera"></i>
                                @else
                                <img class="profile-pic" src="img/img_profile01.JPG" alt="Profile Image">
                                <i class="fa-solid fa-camera"></i>
                                @endif
                            </a>
                            <h2>
                                <span class="name">Yu Nandar Moe</span>
                                {{-- @if()
                                    <span class="position">{{ __('Yu Nandar Moe') }}</span>
                                @endif --}}
                            </h2>
                            <ul class="profile-txt">
                                <li>
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <span class="profile-icn">Studied Enlish at YUFL</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <span class="profile-icn">Worked at ARTIC (2020-2021)</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-briefcase"></i>
                                    <span class="profile-icn">Worked at Metateam (2021-2023)</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-house"></i>
                                    <span class="profile-icn">Lives in Yangon, Myanmar</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-heart"></i>
                                    <span class="profile-icn">Single</span>
                                </li>
                                <li>
                                    <a href="https://twitter.com/haru_ko_chan31?s=20">
                                        <i class="fa-brands fa-twitter"></i>
                                        <span class="profile-icn">haru_ko_chan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/yu_n_moee/">
                                        <i class="fa-brands fa-instagram icn"></i>
                                        <span class="profile-icn">yu_n_moee</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="about-txt pc wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
                    <ul>
                        <li>
                            <p class="title">{{ __('Name Title') }}</p>
                            <p class="data">{{ __('Yu Nandar Moe') }}</p>
                        </li>
                        <li>
                            <p class="title">{{ __('Birthdate') }}</p>
                            <p class="data">1998/12/31</p>
                        </li>
                        <li>
                            <p class="title">{{ __('Email') }}</p>
                            <p class="data"><a href="mailto:yunandarmoe31@gmail.com">yunandarmoe31@gmail.com</a></p>
                        </li>
                        <li>
                            <p class="title">{{ __('Phone') }}</p>
                            <p class="data"><a href="tel:+95943184522">+95943184522</a></p>
                        </li>
                    </ul>
                    <ul id="education" class="education" class="sp">
                        <li>
                            <p class="title">Jul, 2018</p>
                            <p class="data">Certificate in Japanese Language Proficiency Test N2 </p>
                        </li>
                        <li>
                            <p class="title">Jan, 2020</p>
                            <p class="data">Bachelor of English<br>Yangon University of Foreign Languages (English)
                            </p>
                        </li>
                        <li>
                            <p class="title">Jan, 2020</p>
                            <p class="data">Professional Diploma in Business Management<br>Myanmar Management
                                Institute,
                                Yangon
                            </p>
                        </li>
                        <li>
                            <p class="title">Sep, 2022</p>
                            <p class="data">Certificate in Business Japanese Proficiency Test (Score:397, J3)</p>
                        </li>
                        <li>
                            <p class="title">Nov, 2022</p>
                            <p class="data">Certificate of Java SE Online Course </p>
                        </li>
                        <li>
                            <p class="title">Apr, 2023</p>
                            <p class="data">Certificate of IP (Information Technology Passport Examination)</p>
                        </li>
                    </ul>
                </div>
                <div class="modal">
                    <div class="modal-overlay modal-toggle"></div>
                    <div class="modal-wrapper modal-transition">
                        <label class="label">
                            <img id="image-preview" src="#" alt="Preview" style="display: none">
                            <input type="file" id="image-input" name="image" multiple required />
                            <span class="select-txt">Select a file</span>
                        </label>
                        <button type="submit" class="update-btn">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <script src="js/menu.js"></script>
</section>

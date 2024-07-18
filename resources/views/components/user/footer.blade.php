<footer class="site-footer" id="contact">
    <div class="top-footer section">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="footer-info">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{asset("user/logo.png")}}" alt="">
                                </a>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, tenetur.
                            </p>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="uil uil-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="uil uil-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="uil uil-github-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="uil uil-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-8">
                        <div class="footer-flex-box">
                            {{-- <div class="footer-table-info">
                                <h3 class="h3-title">open hours</h3>
                                <ul>
                                    <li><i class="uil uil-clock"></i> Mon-Thurs : 9am - 22pm</li>
                                    <li><i class="uil uil-clock"></i> Fri-Sun : 11am - 22pm</li>
                                </ul>
                            </div> --}}
                            {{-- <div class="footer-menu food-nav-menu">
                                <h3 class="h3-title">Links</h3>
                                <ul class="column-2">
                                    <li><a href="{{route('main.index')}}">Home</a></li>
                                    <li><a href="{{route('main.restaurant.index')}}">Restaurants</a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="footer-menu">
                                <h3 class="h3-title">Company</h3>
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>Copyright &copy; <span id="copy-year">2023</span> {{__("translate.All Rights Reserved")}}.
                        </p>
                    </div>
                </div>
            </div>
            <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
        </div>
    </div>
</footer>
<script>
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("copy-year").innerHTML = year;
</script>

@extends('guests.layout')
@section('title', 'Home')
@section('content')
    <!-- Home Banner -->
    <section class=" home-slide-two home-slide-search d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="home-slide-face aos" data-aos="fade-up">
                        <div class="hometwo-slide-text">
                            <a href="dashboard.html" class="btn bg-stop-learn">Never Stop Learning</a>
                            <h1>Online Courses <br>to Learn</h1>
                            <p>Own your future learning new skills online</p>
                        </div>
                        <!-- Search -->
                        <div class="search-box ">
                            <form action="{{ route('appointments.book') }}">
                                <div class="form-group search-info location-search ">
                                    <input type="text" class="form-control text-truncate" name="q"
                                        placeholder=" Search School, Online educational centers, etc">
                                    <button type="submit"
                                        class="btn bg-search search-btn align-items-center d-flex justify-content-center"><i
                                            class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- /Search -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="object-slide-img aos " data-aos="fade-up">
                        <img src="assets/user/img/object-three.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Most popular Categories -->
    <section class="most-popular most-popular-two">
        <div class="container">
            <div class="section-top-head">
                <div class="section-header aos " data-aos="fade-up">
                    <h2>Most Populer Categories</h2>
                    <p class="sub-title">We're working to turn our passion for Online courses into a booming online
                        website. We hope you enjoy our Online courses as much as we enjoy offering them to you.</p>
                </div>
            </div>
            <div class="popular-categories aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-2 col-md-4">
                        <a href="search.html">
                            <div class="sub-categories bg-design align-items-center">
                                <div class="categories-img d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/user/img/categories/cate-1.svg') }}" alt="">
                                </div>
                                <div class="categories-text text-center">
                                    <h4>Design</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="search.html">
                            <div class="sub-categories bg-development align-items-center">
                                <div class="categories-img d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/user/img/categories/cate-2.svg') }}" alt="">
                                </div>
                                <div class="categories-text text-center">
                                    <h4>Development</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <a href="search.html">
                            <div class="sub-categories bg-software align-items-center">
                                <div class="categories-img d-flex justify-content-center align-items-center">
                                    <img src="assets/user/img/categories/cate-3.svg" alt="">
                                </div>
                                <div class="categories-text text-center">
                                    <h4>IT & Software</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="search.html">
                            <div class="sub-categories bg-business align-items-center">
                                <div class="categories-img d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/user/img/categories/cate-4.svg') }}" alt="">
                                </div>
                                <div class="categories-text text-center">
                                    <h4>Business</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <a href="search.html">
                            <div class="sub-categories bg-marketing align-items-center">
                                <div class="categories-img d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/user/img/categories/cate-5.svg') }}" alt="">
                                </div>
                                <div class="categories-text text-center">
                                    <h4>Marketing</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Most popular Categories -->

    <!-- Most trending course -->
    <section class="section trending-courses trending-courses-two">
        <div class="container">
            <div class="section-top-head">
                <div class="section-header aos " data-aos="fade-up">
                    <h2>Most Trending Courses</h2>
                    <p class="sub-title">Here we will provide you only interesting content, which you will like
                        very much. We're dedicated to providing you the best of Online courses, with a focus on
                        dependability and Learning. </p>
                </div>
            </div>
            <div class="course-two-all aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="search.html">
                                        <img class="img-fluid" alt=""
                                            src="{{ asset('assets/user/img/trend-img3.png') }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating rating-star">
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-rating rate-point ">4.3<span
                                                    class="rate-star-point">(15)</span></span>
                                        </div>
                                        <div class="course-view">
                                            <i class="fas fa-file-alt file-pink"></i>
                                            <div class="course-point">
                                                <span>80</span>
                                            </div>
                                        </div>
                                        <div class="course-view">
                                            <i class="fas fa-user-graduate"></i>
                                            <div class="graduate-point">
                                                <span>80</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="search.html">Email & Affiliate Marketing
                                            Mastermind</a></h3>
                                    <div class="rating rating-star rating-two align-items-center">
                                        <div class="rating-img">
                                            <img src="{{ asset('assets/user/img/user/user5.jpg') }}" alt="">
                                        </div>
                                        <h5>Bina Patel</h5>
                                        <div class="course-price">
                                            <h4><span>₹999.00</span>₹700</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="search.html">
                                        <img class="img-fluid" alt=""
                                            src="{{ asset('assets/user/img/trend-img4.png') }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating rating-star">
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-rating rate-point ">4.4<span
                                                    class="rate-star-point">(15)</span></span>
                                        </div>
                                        <div class="course-view">
                                            <i class="fas fa-file-alt file-pink"></i>
                                            <div class="course-point">
                                                <span>75</span>
                                            </div>
                                        </div>
                                        <div class="course-view">
                                            <i class="fas fa-user-graduate"></i>
                                            <div class="graduate-point">
                                                <span>75</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="search.html">Java (Beginner) Programming
                                            Tutorials</a></h3>
                                    <div class="rating rating-star rating-two align-items-center">
                                        <div class="rating-img">
                                            <img src="{{ asset('/img/user/user6.jpg') }}" alt="">
                                        </div>
                                        <h5>Anjali William</h5>
                                        <div class="course-price">
                                            <h4><span>₹999.00</span>₹600</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="search.html">
                                        <img class="img-fluid" alt=""
                                            src="{{ asset('assets/user/img/trend-img5.png') }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating rating-star">
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-rating rate-point ">4.2<span
                                                    class="rate-star-point">(15)</span></span>
                                        </div>
                                        <div class="course-view">
                                            <i class="fas fa-file-alt file-pink"></i>
                                            <div class="course-point">
                                                <span>90</span>
                                            </div>
                                        </div>
                                        <div class="course-view">
                                            <i class="fas fa-user-graduate"></i>
                                            <div class="graduate-point">
                                                <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="search.html">Php (Beginner) Programming
                                            Tutorials</a></h3>
                                    <div class="rating rating-star rating-two align-items-center">
                                        <div class="rating-img">
                                            <img src="{{ asset('assets/user/img/user/user2.jpg') }}" alt="">
                                        </div>
                                        <h5>Jatin Rawal</h5>
                                        <div class="course-price">
                                            <h4><span>₹999.00</span>₹400</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Most trending course -->
    <!-- Top Rating Instructor -->
    <section class="rating-instructor same-dots">
        <div class="container">
            <div class="section-top-head">
                <div class="section-header aos " data-aos="fade-up">
                    <h2>Top Rating Instructor</h2>
                    <p class="sub-title">Best Tutor of Mentor, Please check details.</p>
                </div>
            </div>
            <div class="course-two-all aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="profile.html">
                                        <img class="img-fluid" alt=""
                                            src="{{ asset('assets/user/img/user/user22.png') }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="profile.html"><b>Jenny Patel</b></a></h3>
                                    <span class="designation">Developer</span>
                                    <div class="rating rating-star rating-two align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="profile.html">
                                        <img class="img-fluid" alt=""
                                            src="{{ asset('assets/user/img/user/user23.png') }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="profile.html"><b>Ajay Kumar</b></a></h3>
                                    <span class="designation">Developer</span>
                                    <div class="rating rating-star rating-two align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="profile.html">
                                        <img class="img-fluid" alt=""
                                            src="{{ asset('assets/user/img/user/user24.png') }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="profile.html"><b>Komal Parmar</b></a></h3>
                                    <span class="designation">Developer</span>
                                    <div class="rating rating-star rating-two align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user25.png" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Kristen Pala</a>
    </h4>
    <span class="designation">UI Designer</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user16.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Daziy Millar</a>
    </h4>
    <span class="designation">PHP Expert</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user17.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Stan Ritter</a>
    </h4>
    <span class="designation">Java Developer</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user18.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Kozlowski</a>
    </h4>
    <span class="designation">UI Developer</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user19.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Michael Guzman</a>
    </h4>
    <span class="designation">Angular Expert</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user20.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Christian Floyd</a>
    </h4>
    <span class="designation">.Net Developer</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user21.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Shawn Howe</a>
    </h4>
    <span class="designation">Python Expert</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user22.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Robert Clayton</a>
    </h4>
    <span class="designation">UX Designer</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user24.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Trevor Davis</a>
    </h4>
    <span class="designation">Js Expert</span>
    </div>
    </div>
    <div class="large-team">
    <div class="student-img">
    <a href="profile.html"><img src="assets/img/user/user18.jpg" alt=""></a>
    </div>
    <div class="team-name ">
    <h4>
     <a href="profile.html">Payal Dotson</a>
    </h4>
    <span class="designation">React Developer</span>
    </div>
    </div>-->
        </div>
        </div>
    </section>
    <!-- Top Rating Instructor -->

    <!-- Most Popular Courses
    <section class="trending-courses trending-courses-two popular-course-two same-dots ">
    <div class="container">
    <div class="section-top-head">
    <div class="section-header aos " data-aos="fade-up">
    <h2>Most Popular Courses</h2>
    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
    </div>
    <div class="section-btn align-items-center aos " data-aos="fade-up">
    <a href="search.html" class="btn btn-primary">View All</a>
    </div>
    </div>
    <div class="owl-carousel popular-course-slide-two owl-theme aos " data-aos="fade-up">
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.6<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>85</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>95</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Information About UI/UX Design Degree</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user2.jpg" alt="">
      </div>
      <h5>Ridhhi Brown</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹700</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img1.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>85</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>85</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Photography Crash Course for Photographer</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user3.jpg" alt="">
      </div>
      <h5>Payal Dotson</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹200</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img2.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.2<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>85</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>75</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">React – The Complete Guide (React Router)</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user5.jpg" alt="">
      </div>
      <h5>McFarland</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹400</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img3.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">3.4<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>65</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>85</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Java (Beginner) Programming Tutorials</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user8.jpg" alt="">
      </div>
      <h5>Michael Johnson</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹100</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img4.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>85</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>90</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Information About UI/UX Design Degree</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user9.jpg" alt="">
      </div>
      <h5>Kurt Jones</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹500</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img5.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>80</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>80</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Php (Beginner) Programming Tutorials</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user2.jpg" alt="">
      </div>
      <h5>Jerry Bleau</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹400</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>85</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>85</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Information About UI/UX Design Degree</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user5.jpg" alt="">
      </div>
      <h5>Jatin Nuno</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹200</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img2.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>90</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>90</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Email & Affiliate Marketing Mastermind</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user8.jpg" alt="">
      </div>
      <h5>Ridhhi Brown</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹600</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img3.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">4.1<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>75</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>75</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Information About UI/UX Design Degree</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user11.jpg" alt="">
      </div>
      <h5>Jatin Nuno</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹300</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    <div class="course-box">
    <div class="product">
    <div class="product-img">
     <a href="search.html">
      <img class="img-fluid" alt="" src="assets/img/trend-img1.png" width="600" height="300">
     </a>
    </div>
    <div class="product-content">
     <div class="course-info d-flex align-items-center">
      <div class="rating rating-star">
       <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating rate-point ">3.4<span class="rate-star-point">(15)</span></span>
      </div>
      <div class="course-view">
       <i class="fas fa-file-alt file-pink"></i>
       <div class="course-point">
        <span>65</span>
       </div>
      </div>
      <div class="course-view">
       <i class="fas fa-user-graduate"></i>
       <div class="graduate-point">
        <span>65</span>
       </div>
      </div>
     </div>
     <h3 class="title"><a href="search.html">Node (Beginner) Programming Tutorials</a></h3>
     <div class="rating rating-star rating-two align-items-center">
      <div class="rating-img">
       <img src="assets/img/user/user7.jpg" alt="">
      </div>
      <h5>Maya Branch</h5>
      <div class="course-price">
       <h4><span>₹999.00</span>₹100</h4>
      </div>
     </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    Most Popular Courses -->


    <!-- Say testimonial Two -->
    <section class="testimonial-two">
        <div class="container">
            <div class="section-header text-center aos " data-aos="fade-up">
                <h2>Here is what our Clients are saying About us</h2>
            </div>
            <div class=" slider say-about slider-for aos " data-aos="fade-up">
                <div>
                    <div class="testimonial-all d-flex justify-content-center">
                        <div class="testimonial-two-head text-center">
                            <h3>It was a very good experience</h3>
                            <p>"It's all good. Online course has got everything I need. I would gladly pay over 600
                                dollars for Online course."</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-all d-flex justify-content-center">
                        <div class="testimonial-two-head text-center">
                            <h3>very good experience</h3>
                            <p>"It's all good. Online course has got everything I need. I would gladly pay over 600
                                dollars for Online course."</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-all d-flex justify-content-center">
                        <div class="testimonial-two-head text-center">
                            <h3>It was a very good experience</h3>
                            <p>"It's all good. Online course has got everything I need. I would gladly pay over 600
                                dollars for Online course."</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-all d-flex justify-content-center">
                        <div class="testimonial-two-head text-center">
                            <h3>very good experience</h3>
                            <p>"It's all good. Online course has got everything I need. I would gladly pay over 600
                                dollars for Online course."</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-all d-flex justify-content-center">
                        <div class="testimonial-two-head text-center">
                            <h3>Good Expiriance</h3>
                            <p>"It's all good. Online course has got everything I need. I would gladly pay over 600
                                dollars for Online course."</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-all d-flex justify-content-center">
                        <div class="testimonial-two-head text-center">
                            <h3>very good experience</h3>
                            <p>"It's all good. Online course has got everything I need. I would gladly pay over 600
                                dollars for Online course."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slider client-img slider-nav aos " data-aos="fade-up">
                <div class="testimonial-thumb">
                    <img src="{{ asset('assets/img/user/user1.jpg') }}" alt="">
                    <div class="say-client text-center">
                        <h4 class="say-client-name">Tina</h4>
                    </div>
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ asset('assets/img/user/user2.png') }}" alt="">
                    <div class="say-client text-center">
                        <h4 class="say-client-name">Ridhhi </h4>
                    </div>
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ asset('assets/img/user/user3.jpg') }}" alt="">
                    <div class="say-client text-center">
                        <h4 class="say-client-name">Jatin </h4>
                    </div>
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ asset('assets/img/user/user4.jpg') }}" alt="">
                    <div class="say-client text-center">
                        <h4 class="say-client-name">Maya </h4>
                    </div>
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ asset('assets/img/user/user5.jpg') }}" alt="">
                    <div class="say-client text-center">
                        <h4 class="say-client-name">Payal </h4>
                    </div>
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ asset('assets/img/user/user6.jpg') }}" alt="">
                    <div class="say-client text-center">
                        <h4 class="say-client-name">Ridhhi</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Say testimonial Two -->

    <!-- Blog Two -->
    <section class="blog-home-two">
        <div class="container">
            <div class="section-top-head">
                <div class="section-header aos " data-aos="fade-up">
                    <h2>From the Blog</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>

            </div>
            <div class="blog-two-all aos " data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-view">
                            <div class="blog-view-img">
                                <a href="blog-details.html"><img src="assets/user/img/blog/blog-11.png"
                                        alt=""></a>
                            </div>
                            <div class="blog-view-list d-flex">
                                <p>05 May, 2021</p>
                                <div class="blog-admin-view">
                                    <p>Written by <span>Admin</span></p>
                                </div>
                            </div>
                            <div class="blog-botTina-head">
                                <h4>
                                    <a href="blog-details.html">How to become a best sale marketer in a month!</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-view">
                            <div class="blog-view-img">
                                <a href="blog-details.html"><img src="assets/user/img/blog/blog-12.png"
                                        alt=""></a>
                            </div>
                            <div class="blog-view-list d-flex">
                                <p>08 jun, 2022</p>
                                <div class="blog-admin-view">
                                    <p>Written by <span>Admin</span></p>
                                </div>
                            </div>
                            <div class="blog-botTina-head">
                                <h4>
                                    <a href="blog-details.html">Guide to Using the Right Your DevOps Tools 2021</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-view">
                            <div class="blog-view-img">
                                <a href="blog-details.html"><img src="assets/user/img/blog/blog-13.png"
                                        alt=""></a>
                            </div>
                            <div class="blog-view-list d-flex">
                                <p>10 De, 2021</p>
                                <div class="blog-admin-view">
                                    <p>Written by <span>Admin</span></p>
                                </div>
                            </div>
                            <div class="blog-botTina-head">
                                <h4>
                                    <a href="blog-details.html">The Right DevOps Tools 2021 Your Guide to Using</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Two -->

    <!-- New Course join -->
    <section class="new-course new-course-join">
        <div class="container">
            <div class="new-course-background">
                <div class="row">
                    <div class="col-lg-7 col-md-6 d-flex align-items-center">
                        <div class="every-new-course aos " data-aos="fade-up">
                            <div class="new-course-text">
                                <h1>Want to share your <br> knowledge? <br><br>Join us as Mentor</h1>
                                <p class="page-sub-text ">High-definition video is video of higher resolution and
                                    quality than standard-definition. While there is no standardized meaning for
                                    high-definition, generally any video.</p>
                            </div>
                            <div class="join-more-two">
                                <a href="login.html" class="btn btn-primary">Register as Mentor</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 d-flex align-items-end">
                        <div class="new-course-img aos " data-aos="fade-up">
                            <img src="{{ asset('assets/user/img/join-2.png') }}" alt="new course">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Course -->
@endsection

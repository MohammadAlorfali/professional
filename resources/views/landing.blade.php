@extends('layouts.master')
@section('main')
    <!-- Start Slider -->
    <div class="slider">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <h1>We're an Independent <br> Design and <span>Development</span> <br>Agency .</h1>
                <div class="overlay"></div>
                <div class="carousel-item carousel-one active">
                    <img src="images/تصميم-موقع-ويب.jpg" class="d-block w-100" alt="تصميم-بناء-مواقع-ويب">
                </div>
                <div class="carousel-item carousel-two">
                    <img src="images/UI-UX-Design.jpg" class="d-block w-100" alt="تصميم-تطبيقات-جوال-مواقع-ويب">
                </div>
                <div class="carousel-item carousel-one">
                    <img src="images/تصميم-الجرافيك.jpg" class="d-block w-100"
                        alt="هوية-بصرية-هوية-تجارية-بروشور-فلاير-جرافيك-دزاين">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
        </div>
        <!-- <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
    </div>
    <!-- End Slider -->


    <!-- Start Features -->
    <div class="features text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-2x rounded-circle"></i>
                    <h3>Great Idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sunt optio saepe! Dicta, nam
                        eligendi. Aspernatur, quibusdam? Eius commodi velit necessitatibus quam doloribus tenetur,
                        maxime aspernatur nisi deserunt molestias est?</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-2x rounded-circle"></i>
                    <h3>Great Idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sunt optio saepe! Dicta, nam
                        eligendi. Aspernatur, quibusdam? Eius commodi velit necessitatibus quam doloribus tenetur,
                        maxime aspernatur nisi deserunt molestias est?</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-2x rounded-circle"></i>
                    <h3>Great Idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sunt optio saepe! Dicta, nam
                        eligendi. Aspernatur, quibusdam? Eius commodi velit necessitatibus quam doloribus tenetur,
                        maxime aspernatur nisi deserunt molestias est?</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-home fa-2x rounded-circle"></i>
                    <h3>Great Idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sunt optio saepe! Dicta, nam
                        eligendi. Aspernatur, quibusdam? Eius commodi velit necessitatibus quam doloribus tenetur,
                        maxime aspernatur nisi deserunt molestias est?</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->


    <!-- Start Overview -->
    <div class="overview text-center">
        <div class="container">
            <h1>Company OverView</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id molestiae nam repellendus enim soluta aperiam
                possimus saepe, recusandae itaque. Amet ducimus porro quo reprehenderit, libero sit obcaecati quod animi
                ipsam.
            </p>
            <h4>Let's Start Today</h4>
            <button>View More</button>
        </div>
    </div>
    <!-- End Overview -->


    <!-- Start Featured Work -->
    <div class="featured-work text-center">
        <div class="container">
            <h2>Featured Work</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis excepturi accusamus odio fuga
                officiis voluptate temporibus sint voluptates! Reiciendis dignissimos nemo aliquam distinctio magni
                illum accusamus, quisquam et sapiente quod.</p>
            <ul class="list-unstyled row">
                <li data-class="all" class="active col-md">All</li>
                <li data-class=".websites" class="col-md">Websites</li>
                <li data-class=".logos" class="col-md">Logos</li>
                <li data-class=".graphic" class="col-md">Graphic</li>
                <li data-class=".marketing" class="col-md">Marketing</li>
                <li data-class=".videos" class="col-md">Videos</li>
            </ul>
        </div>
        <div class="shuffle-imgs">
            <div class="row shuffle-images">
                <div class="col-md">
                    <img class="logos" src="images/01.jpg" alt="" />
                </div>
                <div class="col-md">
                    <img class="websites" src="images/02.jpg" alt="" />
                </div>
                <div class="col-md">
                    <img class="graphic" src="images/03.jpg" alt="" />
                </div>
                <div class="col-md">
                    <img class="videos" src="images/04.jpg" alt="" />
                </div>
            </div>
            <div class="row shuffle-images2">
                <div class="col-md">
                    <img class="marketing" src="images/05.jpg" alt="" />
                </div>
                <div class="col-md">
                    <img class="websites" src="images/06.jpg" alt="" />
                </div>
                <div class="col-md">
                    <img class="graphic" src="images/07.jpg" alt="" />
                </div>
                <div class="col-md">
                    <img class="graphic" src="images/08.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Work -->


    <!-- Start Latest Posts -->
    <div class="latest-posts ">
        <div class="container">
            <h2 class="text-center">Latest Posts</h2>
            <p class="section-description text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quam
                recusandae iusto porro pariatur?
                Possimus fugit beatae quam! Quisquam praesentium ducimus aliquam dolorem, veritatis culpa
                blanditiis. At quia alias laboriosam!
            </p>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/06.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Lorem ipsum dolor sit amet consectetur .</h5>
                                <h6 class="card-subtitle mb-2 text-muted">April 15 2020</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/07.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Lorem ipsum dolor sit amet consectetur .</h5>
                                <h6 class="card-subtitle mb-2 text-muted">April 15 2020</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/08.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Lorem ipsum dolor sit amet consectetur .</h5>
                                <h6 class="card-subtitle mb-2 text-muted">April 15 2020</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Posts -->


    <!-- Start Testimonials -->
    <div class="testimonials">
        <div class="overlay"></div>
        <div class="c text-center">
            <div id="testimonials" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials" data-slide-to="1"></li>
                    <li data-target="#testimonials" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/avatar-1.png" alt="...">
                        <div class="carousel-caption d-none d-block">
                            <h3>Mohammad Alorfali</h3>
                            <span>Software Engineer</span>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/avatar-2.png" alt="...">
                        <div class="carousel-caption d-none d-block">
                            <h3>Hasan Alorfali</h3>
                            <span>Cars Engineer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/avatar-3.png" alt="...">
                        <div class="carousel-caption d-none d-block">
                            <h3>Ebrahim AlKateeb</h3>
                            <span>Software Engineer</span>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev"
                    style="z-index: 6; background-color: #242424 ; width: 50px; height: 50px; margin-top: 18vmin;margin-left: 3vmin; padding: 15px;"
                    href="#testimonials" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next"
                    style="z-index: 6; background-color: #ee4343; width: 50px; height: 50px; margin-top: 18vmin;margin-right: 3vmin; padding: 15px;"
                    href="#testimonials" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->


    <!-- Start Pricing Table -->
    <div class="pricing-table text-center">
        <div class="container">
            <h2>Pricing Table</h2>
            <p class="section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quam
                recusandae iusto porro pariatur?
                Possimus fugit beatae quam! Quisquam praesentium ducimus aliquam dolorem, veritatis culpa
                blanditiis. At quia alias laboriosam!
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Small Business</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum</h6>
                            <p class="card-text">$99/<span>YEAR</span></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                            </ul>
                            <input type="submit" value="BUY NOW">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card corporate">
                        <div class="card-body">
                            <h4 class="card-title">Corporate</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum</h6>
                            <p class="card-text">$199/<span>YEAR</span></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                            </ul>
                            <input type="submit" value="BUY NOW">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Enterprise</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum</h6>
                            <p class="card-text">$299/<span>YEAR</span></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                                <li class="list-group-item">Lorem Ipsum</li>
                            </ul>
                            <input type="submit" value="BUY NOW">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Table -->

    <!-- Start Why Choose Us -->
    <div class="choose-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/choose-us.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>Why Choose Us ?!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nulla incidunt maiores itaque deserunt
                        esse dolorem laborum, id reiciendis, nesciunt quod obcaecati eius excepturi perferendis,
                        voluptas cumque optio placeat pariatur. Ducimus, tempora aspernatur voluptas recusandae vel
                        inventore animi sed explicabo.
                    </p><br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit ipsam dolor tenetur. Amet
                        reprehenderit quod sit! Dignissimos ad velit quae!
                    </p>
                    <input type="submit" value="View More">
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

    <!-- Start Statistics -->
    <div class="stats">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <i class="fa fa-user fa-fw fa-5x"></i>
                    <span class="number">624</span>
                    <p>Happy Clients</p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fa fa-heart fa-fw fa-5x"></i>
                    <span class="number">222</span>
                    <p>Amazing Tours</p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fa fa-briefcase fa-fw fa-5x"></i>
                    <span class="number">13</span>
                    <p>Partners</p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fa fa-comment fa-fw fa-5x"></i>
                    <span class="number">1200</span>
                    <p>Question Answers</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Statistics -->

    <!-- Start Contant Us -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <input type="submit" onclick="window.print()" value="Contat Us">
                </div>
            </div>
        </div>
    </div>
    <!-- End Contant Us -->
@stop

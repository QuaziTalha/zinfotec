@extends('Layout')
@section('content')
<div class="content-wrapper">
    {{-- <div class="breadcrumb-wrap bg-f br-2">
      <div class="overlay op-8 bg-black"></div>
      <div class="container">
        <div class="breadcrumb-title">
          <h2>Shop Details</h2>
          <ul class="breadcrumb-menu list-style">
            <li><a href="index-2.html">Home </a></li>
            <li><a href="shop-left-sidebar.html">Shop</a></li>
            <li>Shop Details</li>
          </ul>
        </div>
      </div>
    </div> --}}

    <section class="product-details-wrap pt-100">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-6">
            <div class="single-product-gallery">
              <div class="swiper-container single-product_slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019724_8XYSF.JPG"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019724_49HF8M.jpg"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019724_13EYEE.jpg"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019727_45DTQT.jpg"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019727_18R4PE.jpg"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019727_45BGKW.jpg"
                      img="Image"
                    />
                  </div>
                </div>
              {{--   <div class="swiper-button-next">
                  <i class="flaticon-right-arrow"></i>
                </div>
                <div class="swiper-button-prev">
                  <i class="flaticon-left-arrow-1"></i>
                </div> --}}
              </div>
              <div style="display: none;" thumbsSlider="" class="swiper-container single-product_thumbs">
                <div class="swiper-wrapper">
                  <div
                    class="swiper-slide single-product-thumb bg-albastor"
                  >
                    <img
                      src="public/assets/img/hero/hero-slider-1.png"
                      img="Image"
                    />
                  </div>
                  <div
                    class="swiper-slide single-product-thumb bg-albastor"
                  >
                    <img
                      src="public/assets/img/about/about-img-5.png"
                      img="Image"
                    />
                  </div>
                  <div
                    class="swiper-slide single-product-thumb bg-albastor"
                  >
                    <img
                      src="public/assets/img/hero/hero-slider-1.png"
                      img="Image"
                    />
                  </div>
                  <div
                    class="swiper-slide single-product-thumb bg-albastor"
                  >
                    <img
                      src="public/assets/img/about/about-img-5.png"
                      img="Image"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="single-product-details">
              <div class="single-product-title">
                <h2>Indoor LED Video Walls</h2>
                {{-- <h3><span>$38</span> <span class="discount">$50</span></h3> --}}
                <div class="ratings">
                  <ul class="list-style">
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                  </ul>
                  <span>(12 rating)</span>
                </div>
              </div>
              <p class="single-product-desc" style="text-align: justify;">
                <b>Indoor LED Video Walls:</b><br/>

                Create stunning visual experiences in weddings, meeting rooms, events, airports, schools, colleges, and various indoor live events with our cutting-edge Indoor LED Video Walls. We offer advanced technology-based displays that deliver exceptional picture quality, ensuring an immersive viewing experience for your audience. Our Indoor LED Display Screens are meticulously crafted to excel in terms of ergonomics, performance, picture quality, and pricing.

              </p>
              <div class="product-more-option">
                {{-- <div class="product-more-option-item">
                  <h5>Sku :</h5>
                  <span>001</span>
                </div>
                <div class="product-more-option-item">
                  <h5>Category :</h5>
                  <a href="shop-left-sidebar.html">Earrings</a>
                </div>
                <div class="product-more-option-item">
                  <h5>Product Code :</h5>
                  <span>AE-009</span>
                </div> --}}

              <div class="product-more-option">
                <div class="product-more-option-item">
                  <h5>Share On :</h5>
                  <ul class="social-profile style1 list-style">
                    <li>
                      <a target="_blank" href="https://facebook.com/">
                        <i class="ri-facebook-fill"></i>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://twitter.com/">
                        <i class="ri-twitter-fill"></i>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://linkedin.com/">
                        <i class="ri-linkedin-fill"></i>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://instagram.com/">
                        <i class="ri-pinterest-fill"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row {{-- pt-100 --}}">
          <div class="col-lg-12">
            <div class="product-description-wrap">
              <div class="product-description">
                <div class="desc-title">
                  <h2>Key Features</h2>
                </div>

                <ul class="content-feature-list style2 list-style mb-0">
                    <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Superior Picture Quality:</b><br/>
                         Our Indoor LED Video Walls are designed to showcase vibrant and sharp visuals, providing an impressive display that captivates viewers. Enjoy stunning image clarity and color reproduction with our advanced LED technology.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Lightweight and Easy to Install:</b><br/>
                         Our Indoor LED Video Walls are lightweight and feature a user-friendly design, making them easy to install and dismantle. This convenience sets them apart from other display screens available in the market.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Durable and Reliable:</b><br/>
                        Manufactured using high-grade materials, our LED Video Walls are built to last. They are appreciated by clients nationwide for their reliability and durability.
                        Cost-Effective: We offer our Indoor LED Video Walls at highly competitive rates without compromising on performance or service life. Experience exceptional value for your investment.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Customizable Options:</b><br/>
                         Choose from our range of indoor LED display screens, indoor fixed LED displays, and indoor LED video walls to find the perfect solution for your specific needs. We offer a wide range of options, including P-2, P-2.5, P-3, P-4, P-5, and P-6 models.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Rental LED Displays:</b><br/>
                         If you require indoor rental LED displays for temporary installations, we have you covered. Our rental solutions are flexible and can be tailored to your event requirements.
                         Experience the difference that our indoor LED video walls can make in enhancing your visual presentations. Contact us today to explore the possibilities and discuss your specific requirements. Our team is ready to assist you in selecting the ideal indoor LED video wall solution for your needs.
                      </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="product-wrap pt-30 pb-75">
      <div class="container">
        <div class="section-title style1 text-center mb-40">
          <span>Explore our range of</span>
          <h2>Indoor LED video wall Options</h2>
        </div>
        <div class="product-slider-one owl-carousel">
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/Services/ZinfoTec_Services_2019724_8XYSF.JPG"" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-2</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/Services/ZinfoTec_Services_2019724_8XYSF.JPG" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-2.5</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/Services/ZinfoTec_Services_2019724_49HF8M.jpg" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-3</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/Services/ZinfoTec_Services_2019727_45DTQT.jpg" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-4</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/Services/ZinfoTec_Services_2019727_18R4PE.jpg" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-5</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/Services/ZinfoTec_Services_2019727_45BGKW.jpg" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-6</a></h3></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="modal fade" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="product-modal"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header border-0">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <i class="ri-close-line"></i>
              </button>
          </div>
          <div class="product-details-wrap">
              <div class="container">
                  <div class="row gx-5 ">
                      <div class="col-xl-7 col-lg-7">
                          <div class="single-product-gallery">
                              <div class="swiper-container single-product-thumbs">
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide single-product-thumb bg-albastor">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                      <div class="swiper-slide single-product-thumb bg-albastor">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                      <div class="swiper-slide single-product-thumb bg-albastor">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                      <div class="swiper-slide single-product-thumb bg-albastor">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-container single-product-slider">
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide single-product-item">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                      <div class="swiper-slide single-product-item">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                      <div class="swiper-slide single-product-item">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                      <div class="swiper-slide single-product-item">
                                          <img src="public/assets/img/about/about-img-5.png" alt="Image" />
                                      </div>
                                  </div>
                                  <div class="swiper-button-next"> <i class="flaticon-right-arrow"></i></div>
                                  <div class="swiper-button-prev"><i class="flaticon-left-arrow-1"></i></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-5 col-lg-5">
                          <div class="single-product-details">
                              <div class="single-product-title">
                                  <h2>Over-Ear Headphone</h2>
                                  <h3><span>$120</span> <span class="discount">$200</span></h3>
                                  <div class="ratings">
                                      <ul class="list-style">
                                          <li><i class="ri-star-fill"></i></li>
                                          <li><i class="ri-star-fill"></i></li>
                                          <li><i class="ri-star-fill"></i></li>
                                          <li><i class="ri-star-fill"></i></li>
                                          <li><i class="ri-star-fill"></i></li>
                                      </ul>
                                      <span>(12 rating)</span>
                                  </div>
                              </div>
                              <p class="single-product-desc">
                                  Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Ipsum non facilis
                                  corporis modi consequatur. Iure perferendis dicta illum deleniti veritatis vero
                                  tempora maxime ducimus quaerat, iusto omnis magni doloribus. Repellat
                                  exercitationem odio amet sit.
                              </p>
                              <div class="product-more-option">
                                  <div class="product-more-option-item">
                                      <h5>Category :</h5>
                                      <a href="shop-left-sidebar.html">Earrings</a>
                                  </div>
                                  <div class="product-more-option-item">
                                      <h5>Product Code :</h5>
                                      <span>AE-009</span>
                                  </div>
                                  <div class="product-more-option-item">
                                      <h5>Quantity:</h5>
                                      <div class="product-quantity">
                                          <div class="qtySelector">
                                              <span class="decreaseQty">
                                                  <i class="ri-subtract-line"></i>
                                              </span>
                                              <input type="text" class="qtyValue" value="1" />
                                              <span class="increaseQty">
                                                  <i class="ri-add-line"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-more-option-item">
                                      <h5>Availability :</h5>
                                      <span>In Stock</span>
                                  </div>
                              </div>
                              <div class="single-product-option">
                                  <a href="cart.html" class="btn style1">Add To Cart </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

  <div class="container">
    <div class="newsletter-wrap">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
          <div class="newsletter-title style1">
            <h2>Subscribe Our Newsletter</h2>
          </div>
        </div>
        <div class="col-lg-6">
            <form action="{{route('Contact')}}" class="newsletter-form">
                <input
                    type="email"
                    name="email"
                    placeholder="Enter Your Email Address"
                />
                <button type="submit">Subscribe</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

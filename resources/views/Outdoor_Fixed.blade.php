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
                      src="public/assets/Services/ZinfoTec_Services_2019724_10N8ID.jpg"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019722_4J8TC.jpg"
                      img="Image"
                    />
                  </div>
                  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/Services/ZinfoTec_Services_2019724_52HCAU.jpg"
                      img="Image"
                    />
                  </div>
                 {{--  <div class="swiper-slide single-product-item">
                    <img
                      src="public/assets/img/about/about-img-5.png"
                      img="Image"
                    />
                  </div> --}}
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
                <h2>Outdoor Fixed LED Video Wall Solutions</h2>
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
                <b>Outdoor Fixed LED Video Wall Solutions:</b><br/>

Enhance your advertising impact and reach a large audience with our outdoor fixed LED video walls. These high-quality LED screens are designed for permanent outdoor installations, making them perfect for mounting on walls, unipoles, pillars, or building facades. With their vibrant visuals, they offer an innovative and effective way to promote your products or broadcast important news.

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
                        <b>P10 Outdoor LED:</b><br/>
                        Our LED screens utilize P10 technology, which is ideal for various applications including commercial markets, public spaces, outdoor advertisements, parks, traffic areas, highways, business streets, train stations, airports, bus stations, transportation hubs, shopping malls, hospitals, hotels, educational institutions, banks, security markets, shopping centers, and media centers.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Effective Advertising:</b><br/>
                        Our outdoor fixed LED displays are specifically designed to attract attention and engage viewers. They allow you to deliver your advertising messages or showcase important information to a wide audience, capturing the attention of passersby and potential customers.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Energy-efficient and Low Maintenance:</b><br/>
                        Our LED screens are designed to be energy-efficient, helping you save on operating costs. Additionally, they require minimal maintenance, ensuring hassle-free operation and longevity.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Easy Installation and Durability:</b><br/>
                        Our screens are easy to install, making the setup process efficient and convenient. They are built to withstand harsh environmental conditions, ensuring their durability and reliability even in outdoor settings.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Customizable Specifications:</b><br/>
                        We offer outdoor LED screens in various specifications to cater to the specific requirements of your application. Our team can work closely with you to deliver a solution tailored to your needs.
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
          <h2>Outdoor LED video wall Options</h2>
        </div>
        <div class="product-slider-one owl-carousel">
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/img/about/about-img-5.png" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-10</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/img/about/about-img-5.png" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-08</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/img/about/about-img-5.png" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-06</a></h3></div>
          </div>
          <div class="product-card style4">
            <div class="product-img bg-athens">
              <img src="public/assets/img/about/about-img-5.png" alt="image" />
              <ul class="product-option list-style" style="top: 15%;">
                <li>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="ri-eye-line"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="product-info"><h3><a>P-04</a></h3></div>
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

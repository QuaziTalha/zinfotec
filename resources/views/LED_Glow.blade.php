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
                <h2>LED Glow Letter Cut Sign Board</h2>
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
                <b>LED Sign Board:</b><br/>

                Welcome to our platform, where we offer a wide range of LED Sign Boards to cater to your diverse signage needs. These boards are extensively used in large commercial areas, providing high resolution and excellent visibility day and night. Our LED Sign Boards can be customized according to your specific requirements and specifications, all at competitive industry-leading prices.

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
                    <h2>Features and Specifications:</h2>
                </div>

                <ul class="content-feature-list style2 list-style mb-0">
                    <li>
                        <i class="flaticon-checkbox"></i>
                        <b>ACP Acrylic Letter Description:</b><br/>
                        <ul class="content-feature-list style2 list-style mb-0">
                            <li>-  Computerized Laser Machine Cutting: Our ACP Acrylic Letters are precision-cut using advanced laser machines, ensuring accurate and clean letter designs.</li>
                            <li>
                                -  Customizable Alphabet Depth: Tailor the depth of the letters to meet your aesthetic preferences and design requirements.</li>
                                <li> -  LED Pasting: Our 4mm Sunboard channel letters feature LED pasting, providing even illumination and enhancing visibility.</li>
                                <li>-  Sturdy Iron Frame: Each letter is mounted on a 16g 1"x1" iron frame, ensuring durability and stability.</li>
                                <li> -  Silicon Waterproofing: We use 789 silicon that is waterproof and can withstand temperatures up to 60°C, ensuring long-lasting performance.</li>
                                <li> -  SMPS Power Supply: The letters are powered by an efficient SMPS power supply, delivering stable and reliable performance.
                                </li>
                        </ul>
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>LED Module Specification:</b><br/>
                        <ul class="content-feature-list style2 list-style mb-0">
                            <li>-  Product Name: Lightbox Backlit 1.5 Watt 160° IP65 LED Module</li>
                            <li>
                                -  LED Tube: Consists of 3 LED pieces</li>
                                <li>  -  Operating Voltage: 12V DC</li>
                                <li>-  Power Consumption: 1.5 Watt</li>
                                <li> -  Operating Temperatures: Designed to operate in temperatures ranging from -30°C to 65°C</li>
                                <li> -  Luminous Output: Each color produces a luminous output of 120 IM, ensuring vibrant and eye-catching visuals.
                                </li>
                        </ul>
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>SMPS Power Supply:</b><br/>
                        <ul class="content-feature-list style2 list-style mb-0">
                            <li>-  Input: 100 ~ 300Vac; 50~60Hz</li>
                            <li>-  Output: 12V@25A</li>
                            <li>-  Power Factor (PF): 0.90~0.99</li>
                            <li>-  Total Harmonic Distortion (THD): <10%</li>
                            <li>-  Efficiency: ≥88% at full load & normal input</li>
                            <li>-  Line & Load Regulation: ±5%</li>
                            <li>-  Operating Temperature: -10°C to 50°C; RH 95% non-condensing</li>
                            <li>-  Output Isolation: 1.5kV RMS @50Hz for 1 minute</li>
                            <li>-  Output Current Variation: ±5%</li>
                        </ul>
                      </li>
                </ul>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="product-wrap pt-30 pb-75">
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
    </section> --}}
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

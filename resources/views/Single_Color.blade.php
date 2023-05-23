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
                <h2>Single Color Digital LED Display Boards</h2>
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
                <b>Single Color Digital LED Display Boards:</b><br/>

                Enhance your communication and display important information with our Single Color Digital LED Display Boards. These boards are designed to deliver clear and concise messages in a single line and single color format, making them ideal for various applications.

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
                        <b>Customizable Pixel Pitch and Viewing Distance: </b><br/>
                         Tailor the pixel pitch and viewing distance according to your specific requirements. This customization ensures optimal visibility and readability for your intended audience.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Versatile Display Options:</b><br/>
                         Our Single Color Digital LED Display Boards support both scrolling and static formats, giving you the flexibility to showcase real-time data, dates, and other essential information. You can easily control the brightness and speed of the displayed text, making it adaptable to different environments and preferences.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Multiple Connectivity Options:</b><br/>
                         Enjoy optional connectivity features such as USB, LAN, WiFi, and Bluetooth, enabling convenient data transfer and content management.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>User-Friendly Controls:</b><br/>
                         Our LED display boards come with a controller supporting RS485/TCP IP, allowing for seamless integration and easy control of scrolling messages. Whether you need to display static information or scrolling messages, our boards are designed to meet your needs.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Wide Font and Language Support:</b><br/>
                         Customize your messaging with multiple fonts and languages, ensuring effective communication across diverse audiences.
                      </li>
                      <li>
                        <i class="flaticon-checkbox"></i>
                        <b>Reliable and Efficient:</b><br/>
                         As a trusted LED display manufacturer, we prioritize quality and durability. Our LED display boards are designed to deliver long-lasting performance, providing you with a reliable solution for your messaging needs.
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

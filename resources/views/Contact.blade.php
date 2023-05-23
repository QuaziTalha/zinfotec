@extends('Layout')
@section('content')
<div class="content-wrapper">
    <div class="breadcrumb-wrap bg-f br-1">
      <div class="overlay op-8 bg-black"></div>
      <div class="container">
        <div class="breadcrumb-title">
          <h2>Contact Us</h2>
          <ul class="breadcrumb-menu list-style">
            <li><a href="{{route('Home')}}">Home </a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>

    <section class="contact-us-wrap pt-100">
      <div class="container">
        <div class="section-title text-center style1 mb-40">
          <span>SEND MESSAGE</span>
          <h2>We Are Here To Help You</h2>
        </div>
        <div class="row justify-content-center contact-box-wrap mb-0">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="contact-item">
              <span class="contact-icon">
                <i class="flaticon-pin"></i>
              </span>
              <div class="contact-info">
                <h3>Our Location</h3>
                <p>Basement Supreme Commerce Classes, Khokadpura, Near Paithan Gate, Aurangabad(MS)</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="contact-item">
              <span class="contact-icon">
                <i class="flaticon-email"></i>
              </span>
              <div class="contact-info">
                <h3>Email Us</h3>
                <a><span class="__cf_email__">info@zinfotec.com</span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="contact-item">
              <span class="contact-icon">
                <i class="flaticon-call"></i>
              </span>
              <div class="contact-info">
                <h3>Call us</h3>
                <a href="tel:9272627262">92 7262 7262</a>
                <a href="tel:9028000085">90 2800 0085</a>
                <a href="tel:9272717271">92 7271 7271</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pb-100 align-items-end">
          <div class="col-xl-4 col-lg-5">
            <div class="comp-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.07840257058!2d75.32794107413693!3d19.878911026278576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb98726f1ab043%3A0x4c34591fb879e978!2sSupreme%20Commerce%20Classes!5e0!3m2!1sen!2sin!4v1683987726442!5m2!1sen!2sin"
              ></iframe>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7">
            <div class="contact-form">
              <form class="form-wrap" id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="name"
                        placeholder="Your Full Name*"
                        id="name"
                        required
                        data-error="Please enter your name"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                      value="{{app('request')->input('email')}}"
                        type="email"
                        name="email"
                        id="email"
                        required
                        placeholder="Email Address*"
                        data-error="Please enter your email"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="phone_number"
                        placeholder="Phone Number"
                        id="phone_number"
                        required
                        data-error="Please enter your phone number"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="subject"
                        placeholder="Subject"
                        id="msg_subject"
                        required
                        data-error="Please enter your subject"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group v1">
                      <textarea
                        name="message"
                        id="message"
                        placeholder="Your Messages.."
                        cols="30"
                        rows="10"
                        required
                        data-error="Please enter your message"
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" onclick="ContactForm()" id="btnsubmit" class="btn style1">
                      Send Message
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<script>
    function ContactForm() {
        $('#btnsubmit').prop('disabled', true);
        $.get("{{url('ContactMail')}}", $("#contactForm").serialize(),
        function (data) {
                $('#btnsubmit').prop('disabled', false);
                console.log(data);
                $('#msgSubmit').show().html(data.message)
            }
        );
    }
</script>
{{--   <div class="container">
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
  </div> --}}
@endsection

@extends('layouts.frondapp') <!-- Extend the layout -->

@section('content') 
<div style="margin-top: 90px;"></div>    
<iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3063.206179142512!2d106.83371450877344!3d-6.136569392208849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5f64766e3b3%3A0x300cf97c82a636e3!2sJl.%20Ampera%20Besar%20No.46%2C%20RT.2%2FRW.1%2C%20Pademangan%20Bar.%2C%20Kec.%20Pademangan%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014420!5e1!3m2!1sid!2sid!4v1736286544462!5m2!1sid!2sid" 
        width="100%" 
        height="450" 
        style="border:0;"  
        allowfullscreen="" 
        loading="lazy"></iframe>
        <div class="untree_co-section">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label class="text-black" for="fname">First name</label>
                          <input type="text" class="form-control" id="fname">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label class="text-black" for="lname">Last name</label>
                          <input type="text" class="form-control" id="lname">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="text-black" for="email">Email address</label>
                      <input type="email" class="form-control" id="email">
                    </div>
        
                    <div class="form-group">
                      <label class="text-black" for="message">Message</label>
                      <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </form>
                </div>
                <div class="col-lg-5 ml-auto">
                  <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="flaticon-house"></span>
                    <address class="text">
                      Jl. Ampera Besar No. 46, Pademangan Barat, Jakarta Utara
                    </address>
                  </div>
                  <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="flaticon-phone-call"></span>
                    <address class="text">
                      +6481398547779
                    </address>
                  </div>
                  <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="flaticon-mail"></span>
                    <address class="text">
                     pt.saffwahtourtrevel@gmail.com
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

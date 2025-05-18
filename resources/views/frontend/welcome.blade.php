
  @extends('frontend.layout.app')
  @section('title', 'Home - Citizen Engagement')
  @section('content')



  <!-- Updated Modal Form -->
<div class="modal" id="get-started-modal">
    <div class="modal-overlay"></div>
    <div class="modal-container">
        <button class="modal-close">&times;</button>
        <div class="modal-header">
            <h3>{{ __('messages.home-complaint-tile') }}</h3>
            <p>{{ __('messages.home-complaint-paragraph') }}</p>
        </div>
        <div class="modal-body">
            <form id="complaintForm" class="modal-form">
                <div class="form-group">
                    <input type="text" name="full_name" id="fullName" placeholder="{{ __('messages.complaint-form-names') }}" >
                    <div class="error-message" id="nameError"></div>
                </div>

                <div class="form-group">
                    <input type="text" name="address" id="address" placeholder="{{ __('messages.complaint-form-address') }}"  >
                    <div class="error-message" id="addressError"></div>
                </div>
               
                <div class="form-group">
                    <select name="category" id="category"  >
                        <option value="">{{ __('messages.option-cat-select-cat') }}</option>
                        <option value="Roads & Transport">{{ __('messages.option-cat-Roads') }}</option>
                        <option value="Water & Sanitation">{{ __('messages.option-cat-Water') }}</option>
                        <option value="Electricity & Power">{{ __('messages.option-cat-Electricity') }}</option>
                        <option value="Healthcare Services">{{ __('messages.option-cat-Healthcare') }}</option>
                        <option value="Education">{{ __('messages.option-cat-Education') }}</option>
                        <option value="Public Safety">{{ __('messages.option-cat-Public') }}</option>
                        <option value="Waste Management">{{ __('messages.option-cat-Waste') }}</option>
                        <option value="Housing & Urban Planning">{{ __('messages.option-cat-Housing') }}</option>
                        <option value="Public Offices">{{ __('messages.option-cat-Public') }}</option>
                        <option value="Environment">{{ __('messages.option-cat-Environment') }}</option>
                        <option value="Telecommunication">{{ __('messages.option-cat-Telecommunication') }}</option>
                        <option value="Other">{{ __('messages.option-cat-Other') }}r</option>
                    </select>
                    <div class="error-message" id="categoryError"></div>
                </div>

                <div class="form-group" id="customCategoryGroup" style="display: none;">
                    <input type="text" name="custom_category" id="customCategory" placeholder="Please specify category">
                    <div class="error-message" id="customCategoryError"></div>
                </div>

                <div class="form-group">
                    <textarea name="complaint" id="complaint" cols="30" rows="3" placeholder="{{ __('messages.complaint-form-details') }}"  ></textarea>
                    <div class="error-message" id="complaintError"></div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="{{ __('messages.complaint-form-email') }}">
                    <div class="error-message" id="emailError"></div>
                </div>

                <div class="form-group">
                    <input type="tel" name="phone" id="phone" placeholder="{{ __('messages.complaint-form-number') }}">
                    <div class="error-message" id="phoneError"></div>
                </div>

                <button type="submit" class="submit-btn">
                    <span id="submitText">{{ __('messages.complaint-form-submit') }}</span>
                    <div id="spinner" class="spinner" style="display: none;"></div>
                </button>
            </form>
        </div>
        <div class="modal-footer">
            <p>Already submitted a complaint? <a href="#track-complaint">Track Your Case</a></p>
        </div>
    </div>
</div>


@if(session('track_error'))
<script>
    window.addEventListener('DOMContentLoaded', function () {
        alert("{{ session('track_error') }}");
        // Automatically open the modal
        const modal = document.getElementById("demo-modal");
        if(modal) modal.classList.add("is-visible");
    });
</script>
@endif



<!-- Track Model -->
<div class="modal" id="demo-modal">
  <div class="modal-overlay"></div>
  <div class="modal-container">
    <button class="modal-close">&times;</button>
    <div class="modal-header">
      <h3>{{ __('messages.track-title') }}</h3>
      <p>{{ __('messages.track-paragraph') }}</p>
    </div>

    <div class="modal-body">
      <div class="demo-content">

    <form id="complaintForm" class="modal-form" method="POST" action="{{ route('track.result') }}">

          @csrf
          <div class="form-group">
            <input type="text" name="track_id" placeholder="{{ __('messages.form-track-id') }}" required>
            <div class="error-message" id="nameError"></div>
          </div>

          <div class="text-center">
            <button type="submit" class="demo-btn">{{ __('messages.form-track-button') }}</button>
          </div>
        </form>

        

        <div class="demo-features mt-3">
          <h4>{{ __('messages.form-features-title') }}:</h4>
          <ul>
            <li><i class="fas fa-check-circle"></i> {{ __('messages.form-features-one') }}</li>
            <li><i class="fas fa-check-circle"></i> {{ __('messages.form-features-two') }}</li>
            <li><i class="fas fa-check-circle"></i> {{ __('messages.form-features-three') }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>




  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>{{ __('messages.home-welcom') }}</h6>
            <h2>{{ __('messages.home-head-one') }} <em>{{ __('messages.home-head-two') }}!</em></h2>
           <div class="button-group-container">
            <div class="main-button-gradient">
                <div class="button-wrapper">
                    <a   data-modal="get-started-modal" class="gradient-button primary-button open-modal">
                        <span>{{ __('messages.button-complaint') }}</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <a data-modal="demo-modal" class="gradient-button secondary-button open-modal">
                        <span>{{ __('messages.button-track') }}</span>
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
            </div>
        </div>

            
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{ asset ('assets/images/home.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

<section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>{{ __('messages.home-services') }}</h6>
            <h4>{{ __('messages.services-paragraph') }}<em>{{ __('messages.services-paragraph-two') }}</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-01.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-1') }}</h4>
                <p>{{ __('messages.service-paragraph-1') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-02.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-2') }}</h4>
                <p>{{ __('messages.service-paragraph-2') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-03.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-3') }}</h4>
                <p>{{ __('messages.service-paragraph-3') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-04.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-4') }}</h4>
                <p>{{ __('messages.service-paragraph-4') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-01.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-5') }}</h4>
                <p>{{ __('messages.service-paragraph-5') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-02.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-6') }}</h4>
                <p>{{ __('messages.service-paragraph-6') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-03.png') }}" alt="">
                </div>
                <h4>{{ __('messages.welcservice-7ome') }}</h4>
                <p>{{ __('messages.service-paragraph-7') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-04.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-8') }}</h4>
                <p> {{ __('messages.service-paragraph-8') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-01.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-9') }}</h4>
                <p>{{ __('messages.service-paragraph-9') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-02.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-10') }}</h4>
                <p>{{ __('messages.service-paragraph-10') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-03.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-11') }}</h4>
                <p>{{ __('messages.service-11') }}</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset ('assets/images/service-icon-04.png') }}" alt="">
                </div>
                <h4>{{ __('messages.service-12') }}</h4>
                <p>{{ __('messages.service-paragraph-12') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="{{ asset ('assets/images/home2.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>{{ __('messages.ads-title-1') }}</h6>
          <h4>{{ __('messages.ads-title-2') }}</h4>
          <p>{{ __('messages.ads-title-3') }}</p>
          <div class="white-button">
            <a data-modal="get-started-modal" class="btn-primary open-modal">  {{ __('messages.ads-button') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>{{ __('messages.testimonial-title') }}</h6>
            <h4>{{ __('messages.testimonial-paragraph-1') }}  <em>{{ __('messages.testimonial-paragraph-2') }}</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>"{{ __('messages.testimonial-1') }}"</p>
                <h4>Jean d'Amour Niyonzima</h4>
                <span>Resident of Kigali</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-2') }}"</p>
                <h4>Marie Claire Uwimana</h4>
                <span>Shop Owner, Nyamirambo</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-3') }}"</p>
                <h4>Eric Mugisha</h4>
                <span>Motorcycle Taxi Operator</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-4') }}"</p>
                <h4>Josiane Mutoni</h4>
                <span>Teacher, Remera</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-5') }}"</p>
                <h4>Emmanuel Nshimyumuremyi</h4>
                <span>Disability Rights Advocate</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-6') }}"</p>
                <h4>Anastase Nyirigira</h4>
                <span>Parent-Teacher Association</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-7') }}"</p>
                <h4>Grace Ingabire</h4>
                <span>Nurse, Kimironko</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>"{{ __('messages.testimonial-8') }}"</p>
                <h4>Thomas Habimana</h4>
                <span>Umudugudu Leader</span>
                <img src="{{ asset ('assets/images/quote.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.497017530697!2d30.088982475436215!3d-1.9545555929423755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6f46d387275%3A0x7b8b917a7206d1e2!2sKigali%20Convention%20Centre!5e0!3m2!1sen!2srw!4v1747577571244!5m2!1sen!2srw"width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>+250 785 120 223 </span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>112</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>{{ __('messages.contact-title') }}</h6>
                  <h4>{{ __('messages.contact-1') }}<em>{{ __('messages.contact-2') }}</em></h4>
                  <p>{{ __('messages.contact-paragraph') }}</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="button" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 CITIZEN ENGAGEMENT SYSTEM. All Rights Reserved. 
          
          <br>Design: <a rel="sponsored" href="https://cky.rw" target="_blank">CK SOFTWARE INDUSRY</a></p>
        </div>
      </div>
    </div>
  </section>

  @section('content')
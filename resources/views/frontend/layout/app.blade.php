<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>@yield('title', 'Citizen Engagement System') </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset ('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/templatemo-eduwell-style.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/lightbox.css') }}">



    <!-- Add in your head section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">
    

    <style>
    /* Base Styles */
    .button-group-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .main-button-gradient {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }

    .button-wrapper {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .gradient-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 24px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    .gradient-button i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .gradient-button:hover i {
        transform: translateX(3px);
    }

    /* Primary Button */
    .primary-button {
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        color: white;
    }

    .primary-button:hover {
        background: linear-gradient(135deg, #5d7de8, #9666d3);
        box-shadow: 0 6px 20px rgba(103, 110, 234, 0.4);
        transform: translateY(-2px);
    }

    /* Secondary Button */
    .secondary-button {
        background: linear-gradient(135deg, #f5f7fa, #e4e8eb);
        color: #4a5568;
        border: 1px solid #cbd5e0;
    }

    .secondary-button:hover {
        background: linear-gradient(135deg, #e6e9ed, #d1d5db);
        box-shadow: 0 6px 20px rgba(203, 213, 224, 0.4);
        transform: translateY(-2px);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .button-wrapper {
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }
        
        .gradient-button {
            width: 100%;
            padding: 14px 20px;
        }
    }

    @media (max-width: 480px) {
        .gradient-button {
            font-size: 14px;
            padding: 12px 16px;
        }
        
        .button-wrapper {
            gap: 12px;
        }
    }
</style>

    <style>

        
/* Language Switcher Styles */
.language-switcher {
    margin-left: 20px;
    position: relative;
}

.lang-dropdown {
    position: relative;
    display: inline-block;
}
 
.lang-btn {
    background: rgba(255, 255, 255, 0.1);
    border: none;
    color: white;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.lang-btn:hover {
    background: rgba(255, 255, 255, 0.2);
}

.lang-btn i.fa-chevron-down {
    font-size: 12px;
    transition: transform 0.3s ease;
}

.lang-dropdown-menu {
    position: absolute;
    right: 0;
    top: 100%;
    background: rgba(126, 120, 120, 0.885);
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(198, 190, 190, 0.1);
    min-width: 150px;
    overflow: hidden;
    display: none;
    z-index: 1000;
}

.lang-dropdown.active .lang-dropdown-menu {
    display: block;
}

.lang-dropdown.active .lang-btn i.fa-chevron-down {
    transform: rotate(180deg);
}

.lang-option {
    padding: 8px 15px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.lang-option:hover {
    background: #f5f5f5;
}

.flag-icon {
    width: 20px;
    height: 15px;
    border-radius: 2px;
}
    </style>

    <style>
    /* Header Buttons Styles */
    .header-buttons {
        display: flex;
        gap: 12px;
        align-items: center;
        margin-left: 15px;
    }

    .header-buttons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
     
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
        white-space: nowrap;
    }

    .btn-primary {
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        color: white;
        box-shadow: 0 4px 15px rgba(103, 110, 234, 0.3);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #5d7de8, #9666d3);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(103, 110, 234, 0.4);
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .header-buttons i {
        margin-left: 8px;
        font-size: 14px;
    }

    /* Responsive Styles */
    @media (max-width: 1199px) {
        .header-buttons {
            margin-left: 10px;
            gap: 8px;
        }
        
        .header-buttons a {
            padding: 8px 15px;
            font-size: 13px;
        }
    }

    @media (max-width: 991px) {
        .header-buttons {
            display: none;
        }
    }

    /* Animation */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .btn-primary {
        animation: pulse 2s infinite;
    }

    /* Preloader Styles */
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ffffff;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.5s ease;
}

.preloader-inner {
    text-align: center;
}

.spinner {
    width: 70px;
    height: 70px;
    position: relative;
    margin: 0 auto 20px;
}

.double-bounce1, .double-bounce2 {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #6e8efb;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
    animation-delay: -1.0s;
}

.loading-text {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    letter-spacing: 2px;
}

.loading-text-words {
    display: inline-block;
    opacity: 0;
    animation: loading-text 1.5s infinite;
}

.loading-text-words:nth-child(1) { animation-delay: 0.1s; }
.loading-text-words:nth-child(2) { animation-delay: 0.2s; }
.loading-text-words:nth-child(3) { animation-delay: 0.3s; }
.loading-text-words:nth-child(4) { animation-delay: 0.4s; }
.loading-text-words:nth-child(5) { animation-delay: 0.5s; }
.loading-text-words:nth-child(6) { animation-delay: 0.6s; }
.loading-text-words:nth-child(7) { animation-delay: 0.7s; }

@keyframes sk-bounce {
    0%, 100% { 
        transform: scale(0.0);
    } 50% { 
        transform: scale(1.0);
    }
}

@keyframes loading-text {
    0% { opacity: 0; transform: translateY(-10px); }
    50% { opacity: 1; transform: translateY(0); }
    100% { opacity: 0; transform: translateY(10px); }
}

/* When loaded */
.preloader.loaded {
    opacity: 0;
    pointer-events: none;
}







/* Modal Styles */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.modal.active {
    opacity: 1;
    visibility: visible;
}

.modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(5px);
}

.modal-container {
    position: relative;
    width: 90%;
    max-width: 600px;
    max-height: 90vh;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    overflow-y: auto;
    transform: translateY(20px);
    transition: transform 0.3s ease;
    z-index: 1;
}

.modal.active .modal-container {
    transform: translateY(0);
}

.modal-close {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    border: none;
    background: #f5f7fa;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.modal-close:hover {
    background: #e4e8eb;
    transform: rotate(90deg);
}

.modal-header {
    padding: 30px 30px 15px;
    border-bottom: 1px solid #f0f0f0;
}

.modal-header h3 {
    font-size: 24px;
    margin-bottom: 5px;
    color: #2d3748;
}

.modal-header p {
    color: #718096;
    font-size: 15px;
}

.modal-body {
    padding: 25px 30px;
}

/* Form Styles */
.modal-form .form-group {
    margin-bottom: 20px;
}

.modal-form input,textarea,
.modal-form select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.modal-form input:focus,
.modal-form select:focus {
    border-color: #6e8efb;
    box-shadow: 0 0 0 3px rgba(110, 142, 251, 0.2);
    outline: none;
}

.submit-btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #6e8efb, #a777e3);
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(110, 142, 251, 0.4);
}

/* Demo Modal Styles */
.demo-content {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.demo-video-placeholder {
    position: relative;
    width: 100%;
    height: 200px;
    background: linear-gradient(135deg, #f5f7fa, #e4e8eb);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.demo-video-placeholder i {
    font-size: 50px;
    color: #6e8efb;
}

.demo-features ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.demo-features li {
    padding: 8px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #4a5568;
}

.demo-features i {
    color: #48bb78;
    font-size: 18px;
}

.demo-btn {
    width: 100%;
    padding: 14px;
    background: #48bb78;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 15px;
}

.demo-btn:hover {
    background: #38a169;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(72, 187, 120, 0.3);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .modal-container {
        width: 95%;
    }
    
    .modal-header {
        padding: 20px 20px 10px;
    }
    
    .modal-body {
        padding: 20px;
    }
}
</style>



<style>
    .error-message {
        color: #e53e3e;
        font-size: 12px;
        margin-top: 5px;
        display: none;
    }
    
    .input-error {
        border-color: #e53e3e !important;
    }
    
    .spinner {
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top: 2px solid white;
        width: 16px;
        height: 16px;
        animation: spin 1s linear infinite;
        margin-left: 8px;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }


    /* Success Notification Styles */
.success-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    padding: 20px;
    max-width: 350px;
    transform: translateX(120%);
    transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    z-index: 99999;
    border-left: 5px solid #48bb78;
    display: none;
}

.success-notification.show {
    transform: translateX(0);
    display: block;
}

.success-content {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.success-icon {
    flex-shrink: 0;
    width: 30px;
    height: 30px;
    background: #48bb78;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.success-icon svg {
    width: 20px;
    height: 20px;
}

.success-message h3 {
    margin: 0 0 5px 0;
    color: #2d3748;
    font-size: 16px;
}

.success-message p {
    margin: 0;
    color: #4a5568;
    font-size: 14px;
}

#trackingIdDisplay {
    font-weight: bold;
    color: #2b6cb0;
}

.success-close {
    background: none;
    border: none;
    font-size: 20px;
    color: #a0aec0;
    cursor: pointer;
    margin-left: auto;
    padding: 0;
    line-height: 1;
}

.success-close:hover {
    color: #718096;
}

/* Animation */
@keyframes bounceIn {
    0% { transform: translateX(120%); }
    70% { transform: translateX(-10px); }
    100% { transform: translateX(0); }
}

@keyframes fadeOut {
    to { opacity: 0; }
}


</style>

  </head>

<body>

    <!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <div class="loading-text">
            <span class="loading-text-words">L</span>
            <span class="loading-text-words">O</span>
            <span class="loading-text-words">A</span>
            <span class="loading-text-words">D</span>
            <span class="loading-text-words">I</span>
            <span class="loading-text-words">N</span>
            <span class="loading-text-words">G</span>
        </div>
    </div>
</div>

<!-- this is a success message  -->
<div id="successNotification" class="success-notification">
    <div class="success-content">
        <div class="success-icon">
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
        </div>
        <div class="success-message">
            <h3>Complaint Submitted Successfully , Track ID Saved On Email!</h3>
            <p>Your tracking ID: <span id="trackingIdDisplay"></span></p>
        </div>
        <button class="success-close">&times;</button>
    </div>
</div>




<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/images/rwanda-logo.png') }}" alt="EduWell Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">{{ __('messages.app-navbar-home') }}</a></li>
                        <li class="scroll-to-section"><a href="#services">{{ __('messages.app-navbar-services') }}</a></li>
                        
                        <li class="scroll-to-section"><a href="#testimonials">{{ __('messages.app-navbar-testimonial') }}</a></li>
                        
                        <!-- Action Buttons -->
                        <li class="header-buttons">
                            <a style=" padding: 0px 10px;"  data-modal="get-started-modal" class="btn-primary open-modal">
                                <span>{{ __('messages.app-button-complaint') }}</span>
                                <i class="fas fa-rocket"></i>
                            </a>
                            <a style=" padding: 0px 10px;"  data-modal="demo-modal" class="btn-secondary open-modal">
                                <span>{{ __('messages.app-button-track') }}</span>
                                <i class="fas fa-play-circle"></i>
                            </a>
                        </li>
                        
                        <li class="language-switcher">
                            <div class="lang-dropdown">
                                <button class="lang-btn">
                                    <i class="fas fa-globe"></i>
                                    <span class="current-language">{{ strtoupper(app()->getLocale()) }}</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="lang-dropdown-menu">
                                    <a href="{{ route('lang.switch', 'en') }}" class="lang-option">
                                        <span  class="flag-icon flag-icon-gb"></span> English
                                    </a>
                                    <a href="{{ route('lang.switch', 'fr') }}" class="lang-option">
                                        <span class="flag-icon flag-icon-fr"></span> Français
                                    </a>
                                    <a href="{{ route('lang.switch', 'rw') }}" class="lang-option">
                                        <span class="flag-icon flag-icon-rw"></span> Rwanda
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->








    @yield('content')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset ('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset ('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset ('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset ('assets/js/tabs.js') }}"></script>
    <script src="{{ asset ('assets/js/video.js') }}"></script>
    <script src="{{ asset ('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset ('assets/js/custom.js') }}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const langDropdown = document.querySelector('.lang-dropdown');
    const langBtn = document.querySelector('.lang-btn');
    
    if (langBtn) {
        langBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            langDropdown.classList.toggle('active');
        });
    }
    
    // Close when clicking outside
    document.addEventListener('click', function() {
        langDropdown.classList.remove('active');
    });
});
</script>

<script>
// Preloader
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    setTimeout(function() {
        preloader.classList.add('loaded');
        setTimeout(function() {
            preloader.style.display = 'none';
        }, 500);
    }, 1000); // Adjust time as needed (1000 = 1 second)
});
</script>




<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal functionality
    const modalTriggers = document.querySelectorAll('.open-modal');
    const modals = document.querySelectorAll('.modal');
    const modalCloseButtons = document.querySelectorAll('.modal-close, .modal-overlay');
    
    // Open modal
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close modal
    modalCloseButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });
    
    // Close with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modals.forEach(modal => {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        }
    });
});
</script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('complaintForm');
    const categorySelect = document.getElementById('category');
    const customCategoryGroup = document.getElementById('customCategoryGroup');
    
    // Show custom category field when "Other" is selected
    categorySelect.addEventListener('change', function() {
        if (this.value === 'Other') {
            customCategoryGroup.style.display = 'block';
            document.getElementById('customCategory').setAttribute('required', '');
        } else {
            customCategoryGroup.style.display = 'none';
            document.getElementById('customCategory').removeAttribute('required');
        }
    });
    
    // Form validation
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        clearErrors();
        
        if (validateForm()) {
            submitForm();
        }
    });
    
    function validateForm() {
        let isValid = true;
        
        // Validate Full Name
        const fullName = document.getElementById('fullName').value.trim();
        if (!fullName) {
            showError('nameError', 'Please enter your full name');
            isValid = false;
        }
        
        // Validate Address
        const address = document.getElementById('address').value.trim();
        if (!address) {
            showError('addressError', 'Please enter your address');
            isValid = false;
        }
        
        // Validate Category
        const category = document.getElementById('category').value;
        if (!category) {
            showError('categoryError', 'Please select a category');
            isValid = false;
        }
        
        // Validate Custom Category if "Other" is selected
        if (category === 'Other') {
            const customCategory = document.getElementById('customCategory').value.trim();
            if (!customCategory) {
                showError('customCategoryError', 'Please specify the category');
                isValid = false;
            }
        }
        
        // Validate Complaint
        const complaint = document.getElementById('complaint').value.trim();
        if (!complaint) {
            showError('complaintError', 'Please describe your complaint');
            isValid = false;
        }
        
        // Validate Contact Info (either email or phone required)
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        
        if (!email && !phone) {
            showError('emailError', 'Either email or phone number is required');
            showError('phoneError', 'Either email or phone number is required');
            isValid = false;
        }
        
        // Validate Email format if provided
        if (email && !validateEmail(email)) {
            showError('emailError', 'Please enter a valid email address');
            isValid = false;
        }
        
        // Validate Phone format if provided
        if (phone && !validatePhone(phone)) {
            showError('phoneError', 'Please enter a valid phone number');
            isValid = false;
        }
        
        return isValid;
    }
    
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    function validatePhone(phone) {
        const re = /^[+]?[(]?[0-9]{1,4}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;
        return re.test(phone);
    }
    
    function showError(elementId, message) {
        const element = document.getElementById(elementId);
        element.textContent = message;
        element.style.display = 'block';
        
        // Highlight the corresponding input field
        const inputId = elementId.replace('Error', '');
        const inputElement = document.getElementById(inputId);
        if (inputElement) {
            inputElement.classList.add('input-error');
            inputElement.addEventListener('input', function() {
                this.classList.remove('input-error');
                document.getElementById(elementId).style.display = 'none';
            });
        }
    }
    
    function clearErrors() {
        document.querySelectorAll('.error-message').forEach(el => {
            el.style.display = 'none';
        });
        
        document.querySelectorAll('.input-error').forEach(el => {
            el.classList.remove('input-error');
        });
    }
    
    function submitForm() {
        const submitBtn = form.querySelector('.submit-btn');
        const submitText = document.getElementById('submitText');
        const spinner = document.getElementById('spinner');
        
        // Show loading state
        submitText.textContent = 'Submitting...';
        spinner.style.display = 'block';
        submitBtn.disabled = true;
        
        // Prepare form data
        const formData = new FormData(form);
        
        // Add custom category to form data if needed
        if (categorySelect.value === 'Other') {
            formData.set('category', document.getElementById('customCategory').value.trim());
        }
        
        // Send to Laravel endpoint
        fetch('{{ route("complaints.store") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
           // Inside your submitForm() function, replace the success handling:
                if (data.success) {
                    // Show success notification
                    const notification = document.getElementById('successNotification');
                    document.getElementById('trackingIdDisplay').textContent = data.tracking_id;
                    
                    notification.classList.add('show');
                    
                    // Auto-hide after 5 seconds
                    setTimeout(() => {
                        notification.classList.remove('show');
                    }, 20000);
                    
                    // Close button functionality
                    document.querySelector('.success-close').onclick = () => {
                        notification.classList.remove('show');
                    };
                    
                    form.reset();
                    document.querySelector('.modal').classList.remove('active');
                }else {
                                // Show server-side validation errors
                if (data.errors) {
                    Object.keys(data.errors).forEach(field => {
                        const errorId = field + 'Error';
                        showError(errorId, data.errors[field][0]);
                    });
                } else {
                    alert('Error: ' + (data.message || 'Something went wrong'));
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while submitting the form');
        })
        .finally(() => {
            // Reset button state
            submitText.textContent = 'Submit Your Complaint';
            spinner.style.display = 'none';
            submitBtn.disabled = false;
        });
    }
});
</script>

</body>

</html>
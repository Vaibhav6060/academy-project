<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $meta_title ?? 'Gagan Bharari Academy' }}</title>

  <meta name="description" content="{{ $meta_description ?? 'Best coaching academy in Pune.' }}">
  <meta name="keywords" content="{{ $meta_keywords ?? 'coaching, academy, pune, rajgurunagar' }}">
  <meta name="robots" content="index, follow">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="canonical" href="{{ $canonical_url ?? url()->current() }}">

  <meta property="og:title" content="{{ $meta_title ?? 'Gagan Bharari Academy' }}">
  <meta property="og:description" content="{{ $meta_description ?? 'Best coaching academy in Pune.' }}">
  <meta property="og:url" content="{{ $canonical_url ?? url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $meta_title ?? 'Gagan Bharari Academy' }}">
  <meta name="twitter:description" content="{{ $meta_description ?? 'Best coaching academy in Pune.' }}">
  <meta name="twitter:image" content="{{ asset('assets/img/og-image.jpg') }}">

  <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE_HERE" />

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Gagan Bharari Academy",
    "alternateName": "GBA",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('assets/img/logo.png') }}",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-9876543210",
      "contactType": "Customer Service",
      "areaServed": "IN",
      "availableLanguage": ["English", "Marathi"]
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Main Road, Near Bus Stand",
      "addressLocality": "Rajgurunagar",
      "addressRegion": "Maharashtra",
      "postalCode": "410505",
      "addressCountry": "IN"
    },
    "sameAs": [
      "https://www.facebook.com/gaganbharariacademy",
      "https://www.instagram.com/gaganbharariacademy"
    ]
  }
  </script>
  
  <link rel="preload" as="image" href="{{ asset('assets/img/favicon.jpeg') }}">

  <link href="{{ asset('assets/img/favicon.jpeg') }}" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('assets/img/logo-old.jpeg') }}" alt="Gagan Bharari Academy Logo" class="img-fluid" loading="lazy">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
        
        <li class="dropdown">
          <a href="#" class="{{ request()->is('services') || request()->is('upcoming-batches') || request()->is('answer-keys') ? 'active' : '' }}">
            Courses <i class="bi bi-chevron-down dropdown-indicator"></i>
          </a>
          <ul>
            <li><a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Our Services</a></li>
            <li><a href="{{ url('/upcoming-batches') }}" class="{{ request()->is('upcoming-batches') ? 'active' : '' }}">Upcoming Batches</a></li>
            <li><a href="{{ url('/answer-keys') }}" class="{{ request()->is('answer-keys') ? 'active' : '' }}">Answer Keys</a></li>
          </ul>
        </li>

        <li><a href="{{ url('/faculties') }}" class="{{ request()->is('faculties') ? 'active' : '' }}">Our Faculty</a></li>
        <li><a href="{{ url('/topper-students') }}" class="{{ request()->is('topper-students') ? 'active' : '' }}">Toppers</a></li>
        <li><a href="{{ url('/gallery') }}" class="{{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li>
        <li><a href="{{ url('/blogs') }}" class="{{ request()->is('blogs') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{ url('/contact-us') }}" class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="{{ url('/services') }}">Start Your Journey</a>
  </div>
</header>

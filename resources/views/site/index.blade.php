@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <nav class="header">
      <div class="logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>
      </div>
    </nav>
    <div class="home-wrapper">
      <div class="jumbo">
        <div class="boxes">
          <div class="jumbo-box box-top"></div>
          <div class="jumbo-box box-middle"></div>
          <div class="jumbo-box box-bottom"></div>
        </div>
        <div class="jumbo-vp">
          <h1 class="jumbo-vp-text">
            <span class="vp-creativity">Creativity.</span>
            <span class="vp-design">Design.</span>
            <span class="vp-innovation">Innovation.</span>
          </h1>
        </div>
      </div>

      <div class="content-section">
        <div class="content-bg"></div>
        <div class="services-section">
          <div class="container">
            <div class="service-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="service-image">
                    <img src="{{ asset('img/speech-bubble.svg') }}" alt="consult">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="service-text">
                    <h2>Consult</h2>
                    <p>
                      We help you along the way in implementing the not so easy tasks required by your business. We give you all the tools and tricks you would need to make you successful in whatever you do.
                    </p>
                    <ul>
                      <li>Website optimisation</li>
                      <li>SEO audits</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="service-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="service-text">
                    <h2>Develop</h2>
                    <p>
                      Creating world-class websites and web applications should not be a major difficulty for anyone. We make certain that our clients get the best work, following the best practices currently available.
                    </p>
                    <ul>
                      <li>Frontend</li>
                      <li>Backend</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="service-image">
                    <img src="{{ asset('img/develop.svg') }}" alt="develop">
                  </div>
                </div>
              </div>
            </div>
            <div class="service-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="service-image">
                    <img src="{{ asset('img/design.svg') }}" alt="design">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="service-text">
                    <h2>Design</h2>
                    <p>
                      Capturing the essence of a body or organisation is a craft that requires precision and depth, which is not always easy to achieve. Wielding such a skill with grace is one thing we have been able to accomplish.

                    </p>
                    <ul>
                      <li>UI Design</li>
                      <li>Graphic Design</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="social-media-section">
          <h2 class="social-media-section-title">Let us know what you think</h2>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="social-media-links">
                  <a href="https://www.facebook.com/imolorhe" target="_blank" class="media-item">
                    <div class="media-item-content">
                      Facebook
                    </div>
                  </a>
                  <a href="https://twitter.com/imolorhe" target="_blank" class="media-item">
                    <div class="media-item-content">
                      Twitter
                    </div>
                  </a>
                  <a href="https://www.linkedin.com/in/imolorhe" target="_blank" class="media-item">
                    <div class="media-item-content">
                      LinkedIn
                    </div>
                  </a>
                  <a href="https://about.me/sirmuel" target="_blank" class="media-item">
                    <div class="media-item-content">
                      About.me
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="blog-content-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">Check out our blog <a href="https://sirmuel.design">here</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium fugit incidunt rerum suscipit voluptatibus! Atque dicta eaque error explicabo harum mollitia nemo nisi non quod reprehenderit, saepe sed sit ut.--}}
    </div>
  </div>
@endsection

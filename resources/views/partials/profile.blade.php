<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('img/background.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="{{ config("data.personal.photo") }}" alt="Image"/></a></div>
          <div class="h2 title">{{ config("data.personal.name") }}</div>
          {{-- <p class="category text-white">{{ config("data.keywords") }}</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a> --}}
          <a class="btn btn-primary" href="{{ url("/dc") }}" target="_blank" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container">
            @foreach(config("data.socials") as $social)
              <a class="btn btn-default btn-round btn-lg btn-icon pt-3" target="_blank" href="{{ $social["url"] }}" rel="tooltip" title="Follow me on {{ $social["title"] }}">
                <i class="{{ $social["icon"] }}"></i>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
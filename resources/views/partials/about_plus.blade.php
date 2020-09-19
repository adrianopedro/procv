<div class="" data-aos="fade-up" data-aos-offset="10">
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        
        <div class="card-body">
          <div class="h4 mt-0 title">About</div>
          <p class="mb-4">{!! config("data.keywords") !!}</p>
          <p>{!! config("data.abstract") !!}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="cc-profile-image"><a href="#"><img src="{{ config("data.personal.photo") }}" alt="Image"/></a></div>
          <div class="h2 title">{{ config("data.personal.name") }}</div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="h4 mt-0 title">Basic Information</div>
    {{--       <div class="row">
            <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
            <div class="col-sm-8">{{ config("data.personal.age") }}</div>
          </div> --}}
          <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
            <div class="col-sm-8">{{ config("data.personal.email")}}</div>
          </div>
  {{--         <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
            <div class="col-sm-8">{{ config("data.personal.phone") }}</div>
          </div> --}}
          <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
            <div class="col-sm-8">{{ config("data.personal.address") }}</div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
            <div class="col-sm-8">Portugese (Native), English (Fluent)</div>
          </div>        
          <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">Socials:</strong></div>
            <div class="col-sm-8">
              @foreach(config("data.socials") as $social)
                <a class="btn btn-default btn-round btn-sm p-1 btn-icon" target="_blank" href="{{ $social["url"] }}" rel="tooltip" title="Follow me on {{ $social["title"] }}">
                  <i class="{{ $social["icon"] }}"></i>
                </a>
              @endforeach
            </div>
          </div>


        </div>
      </div>

    </div>
  </div>
</div>
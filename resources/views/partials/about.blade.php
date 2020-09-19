<div class="card" data-aos="fade-up" data-aos-offset="10">
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card-body">
        <div class="h4 mt-0 title">About</div>
        <p class="mb-4">{!! config("data.keywords") !!}</p>
        <p>{!! config("data.shortabstract") !!}</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
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
        {{-- <div class="row mt-3">
          <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
          <div class="col-sm-8">English, German, French</div>
        </div> --}}
      </div>
    </div>
  </div>
</div>
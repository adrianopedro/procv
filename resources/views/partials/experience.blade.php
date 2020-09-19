<div class="h4 text-center mb-4 title">Work Experience</div>
@foreach(config("data.experience") as $experience)
<div class="card">
  <div class="row">
    <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
      <div class="card-body cc-experience-header">
        <p>{{ $experience["start"] }} - {{ $experience["end"] }}</p>
        <div class="h5">{{ $experience["company"] }}</div>
      </div>
    </div>
    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
      <div class="card-body">
        <div class="h5">{{ $experience["position"] }}</div>
        <p>{{ $experience["description"] }}</p>
      </div>
    </div>
  </div>
</div>
@endforeach
<div class="h4 text-center mb-4 title">Education</div>
@foreach(config("data.education") as $education)
<div class="card">
  <div class="row">
    <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
      <div class="card-body cc-education-header">
        <p>{{ $education["start"] }} @if($education["start"] && $education["end"])-@endif {{ $education["end"] }}</p>
        <div class="h5">{{ $education["degree"] }}</div>
      </div>
    </div>
    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
      <div class="card-body">
        <div class="h5">{{ $education["title"] }}</div>
        <p class="category">{{ $education["institution"] }}</p>
        <p>{{ $education["description"] }}</p>
      </div>
    </div>
  </div>
</div>
@endforeach
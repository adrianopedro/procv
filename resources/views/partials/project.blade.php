<div class="card">
  <div class="row">
    {{-- <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
      <div class="card-body cc-experience-header">
        <div class="h5">{{ $project["title"] }}</div>
      </div>
    </div> --}}
    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
      <div class="card-body">
        <div class="h5">{{ $project["title"] }}</div>
        <p>{{ $project["start"] }} - {{ $project["end"] }}</p>
        <p>{!! $project["context"] !!}</p>
        @if(isset($project['link']))
          <p><a href="{{ $project["link"]["url"] }}" target="_blank">{{ $project["link"]["title"] }}</a></p>
        @endif
        <div class="row">
          <div class="col-md-8">
            <p>{{ $project["mainactivities"] }}</p>
          </div>
          <div class="col-md-4">
            <p>{{ $project["technologies"] }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
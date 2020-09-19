<div class="h4 text-center mb-4 title">Professional Skills</div>
<div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">

  <div class="card-body">
      @foreach(config("data.skills") ?? [] as $category => $skills)
        <div class="h4 text-left mb-4 title">{!! $category !!}</div>
        <div class="row">
        @foreach($skills ?? [] as $skill)
          @include("partials.skill",["skill" => $skill])
        @endforeach
        </div>
      @endforeach
  </div>
</div>
<div class="row">
  <div class="col-md-6 ml-auto mr-auto">
    <div class="h4 text-center mb-4 title">Portfolio</div>
    <div class="nav-align-center">
      <ul class="nav nav-pills nav-pills-primary" role="tablist">
        @foreach(config("data.portofolio") ?? [] as $category => $categorydata)
          <li class="nav-item"><a class="nav-link {{ $categorydata["active"] }}" data-toggle="tab" href="#{{ $category }}" role="tablist"><i class="{{ $categorydata['icon'] }}" aria-hidden="true"></i></a></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<div class="tab-content gallery mt-5">
  @foreach(config("data.portofolio") ?? [] as $category => $categorydata)
  <div class="tab-pane {{ $categorydata["active"] }}" id="{{ $category }}" role="tabpanel">
    <div class="ml-auto mr-auto">
      <div class="row">
          @foreach($categorydata['projects'] ?? [] as $project)
            <div class="col-md-6">
              @include("partials.project",["project" => $project, "category" => $category])
            </div>
          @endforeach
      </div>
    </div>
  </div>
  @endforeach
</div>
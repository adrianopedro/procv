@extends('layouts.pdf')

@section('content')
<div>

  <div class="section" id="about">
    <div class="container">
      @include("partials.about_plus")
    </div>
  </div>
  <div class="section" id="skill">
    <div class="container">
      @include("partials.skills")
    </div>
  </div>
  <div class="section" id="portfolio">
    <div class="container cc-experience">
      @include("partials.portofolio")
    </div>
  </div>
{{--   <div class="section" id="experience">
    <div class="container cc-experience">
      @include("partials.experience")
    </div>
  </div> --}}
  <div class="section" id="education">
    <div class="container cc-education">
      @include("partials.education")                            
    </div>
  </div>
</div>
@endsection

@section("js")
<script src="{{ asset("js/charts.js") }}"></script>  
{{-- <script src="{{ asset("js/dashboard.js") }}"></script>   --}}
@endsection
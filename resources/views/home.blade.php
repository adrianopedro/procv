@extends('layouts.master')

@section('content')
<div>
  
  @include("partials.profile")

  <div class="section" id="about">
    <div class="container">
      @include("partials.about")
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
                          {{-- <div class="section" id="reference">
                            <div class="container cc-reference">
                              <div class="h4 mb-4 text-center title">References</div>
                              <div class="card" data-aos="zoom-in">
                                <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
                                    <li data-target="#cc-Indicators" data-slide-to="1"></li>
                                    <li data-target="#cc-Indicators" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <div class="row">
                                        <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-1.jpg" alt="Image"/>
                                          <div class="h5 pt-2">Aiyana</div>
                                          <p class="category">CEO / WEBM</p>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                          <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="carousel-item">
                                      <div class="row">
                                        <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-2.jpg" alt="Image"/>
                                          <div class="h5 pt-2">Braiden</div>
                                          <p class="category">CEO / Creativem</p>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                          <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="carousel-item">
                                      <div class="row">
                                        <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-3.jpg" alt="Image"/>
                                          <div class="h5 pt-2">Alexander</div>
                                          <p class="category">CEO / Webnote</p>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                          <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> --}}




                          
                          {{-- <div class="section" id="contact">
                            <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
                              @include("partials.contactme")
                            </div>
                          </div> --}}
                          
      
      
</div>
@endsection

@section("js")
<script src="{{ asset("js/charts.js") }}"></script>  
{{-- <script src="{{ asset("js/dashboard.js") }}"></script>   --}}
@endsection
@extends('layouts.master')

@section('content')
<div>
  
  @include("partials.profile")

  <div class="section" id="about">
    <div class="container">
      <div class="card" data-aos="fade-up" data-aos-offset="10">
        <div class="card-body">
          <div class="h4 mt-0 title">About</div>
          {!! config("data.abstract") !!}
        </div>
      </div>
    </div>
  </div>
  
                          
      
      
</div>
@endsection

@section("js")
{{--  --}}
@endsection
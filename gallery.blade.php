@extends('layouts.main')

@section('main-section')
<section class="banner-one" id="home">
            <div class="banner-bg-slide"
                data-options='{ "delay": 5000, "slides": [ { "src": "../fronted/images/backgrounds/galleryslide.png" }], "transition": "fade", "timer": false, "align": "top", "animation": [ "kenburnsUp", "kenburnsDown", "kenburnsLeft", "kenburnsRight" ] }'>
            </div><!-- /.banner-bg-slide -->
            <div class="container">
                <div class="content-box">
                    <div class="top-title">
                        <h2>Your Next Home  <br> is Here</h2>
                    </div>
                </div>
            </div>
</section>


<div id="gallery">
  <div class="gallery-wrapper" >
  
    <div class="gallery-container h-2">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery1.jpeg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery2.jpeg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery3.jpeg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container h-2 w-3">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery4.jpeg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery5.jpeg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery6.jpg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery7.jpg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container w-2 h-3">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery8.jpg')}}">
        </div>
      </div>
    </div>
   
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery9.jpg')}}">
        </div>
      </div>
    </div>
    
     <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery10.jpg')}}">
        </div>
      </div>
    </div>
   
    <div class="gallery-container w-2 h-3">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery11.jpg')}}">
        </div>
      </div>
    </div>
   
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery12.jpg')}}">
        </div>
      </div>
    </div>
    
     <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery13.jpeg')}}">
        </div>
      </div>
    </div>
    
    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery14.jpeg')}}">
        </div>
      </div>
    </div>

    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery15.jpeg')}}">
        </div>
      </div>
    </div>

    <div class="gallery-container">
      <div class="gallery-item">
        <div class="image">
          <img src="{{url('fronted/images/gallery/gallery16.jpeg')}}">
        </div>
      </div>
    </div>
   
   
   
    
  </div>
  
</div>

@endsection
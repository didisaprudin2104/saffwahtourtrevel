<!-- resources/views/contact.blade.php -->
@extends('layouts.frondapp') <!-- Extend the layout -->

@section('content')
<div style="margin-top: 40px;"></div> 
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-single dots-absolute owl-carousel">
                        <img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1" class="img-fluid rounded-20">
                        <img src="{{ asset('images/slider-2.jpg') }}" alt="Slider 2" class="img-fluid rounded-20">
                        <img src="{{ asset('images/slider-3.jpg') }}" alt="Slider 3" class="img-fluid rounded-20">
                        <img src="{{ asset('images/slider-4.jpg') }}" alt="Slider 4" class="img-fluid rounded-20">
                        <img src="{{ asset('images/slider-5.jpg') }}" alt="Slider 5" class="img-fluid rounded-20">
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    
                    @if ($abautData)
                        <h2>{{ $abautData->title }}</h2>
                        <p>{{ $abautData->description }}</p>
                    @else
                        <p>Tidak ada data tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

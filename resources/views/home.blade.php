@extends('layouts.app')

@section('title', 'Landing')

@section('content')
<section class="min-h-[calc(100vh-120px)] flex flex-col lg:flex-row items-center justify-between text-white px-6 py-12 lg:px-24">
    
    <!-- Text Section -->
    <div class="text-section">
    <h2 class="title1">
    <span class="black-text1">Innovative Tech, IT’</span>s me,
    </h2>
    <h1 class="name1">MARIA RICLYN DIATERA</h1>
    <p class="des2">an exceptionally versatile</p>
    <p class="professional1">Computer Engineering Student</p>
    <p class="des1">who handles challenges with competence and confidence</p>
    <p class="one">“Equipped with a strong foundation in both hardware and software systems, I specialize <br> in back-end development, logic circuits, and emerging technologies like AI and IoT.” </p>
    <p class="two">“Handles every project with analytical thinking and a passion for building innovative, <br>real-world solutions.”</p>
    <p class="three">“My goal is to bridge smart devices and intelligent systems through reliable engineering <br> and systematize code.”</p>

</div>

<div class="profile-pic-container1">
    <img src="{{ asset('images/pics/try.png') }}" alt="Maria Riclyn Diatera" class="profile-pic1">
</div>

<div class="standee1-design">
    <img src="{{ asset('images/pics/standee.png') }}" alt="Maria Riclyn Diatera" class="standee1-pic">
</div>

<div class="landingback-design">
    <img src="{{ asset('images/pics/landingback.png') }}" alt="Maria Riclyn Diatera" class="landingback-pic">
</div>

</section>
@endsection

@extends('layouts.app')

@section('title', 'Landing')

@section('content')
<section class="min-h-[calc(100vh-120px)] flex flex-col lg:flex-row items-center justify-between text-white px-6 py-12 lg:px-24">
    
    <!-- Text Section -->
    <div class="text-section">
    <h2 class="title">
    <span class="black-text">Innovative Tech, IT’</span>s me,
    </h2>
    <h1 class="name">MARIA RICLYN DIATERA</h1>
    <p class="des">an exceptionally versatile</p>
    <p class="professional">Computer Engineering Student</p>
</div>

<div class="profile-pic-container">
    <img src="{{ asset('images/pics/try.png') }}" alt="Maria Riclyn Diatera" class="profile-pic">
</div>

    <!-- Right Section -->
<div class="skill-design">
    <img src="{{ asset('images/icons/skills background.svg') }}" alt="Maria Riclyn Diatera" class="skill-pic">
</div>

<div class="motto-design">
    <img src="{{ asset('images/pics/motto.png') }}" alt="Maria Riclyn Diatera" class="motto-pic">
</div>

<div class="goal-design">
    <img src="{{ asset('images/pics/goal.png') }}" alt="Maria Riclyn Diatera" class="goal-pic">
</div>



<div class="standee-design">
    <img src="{{ asset('images/pics/standee.png') }}" alt="Maria Riclyn Diatera" class="standee-pic">
</div>


 


</section>
@endsection

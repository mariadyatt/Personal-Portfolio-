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

 <div class="skill-title">
    Skills
</div>

 <!-- Skills Section -->
<div class="skills mt-6 flex flex-wrap gap-6 mt-[-275px] mr-[-12px] z-10 relative">
    <div class="flex flex-col items-center">
        <img src="{{ asset('images/icons/code.svg') }}" alt="Coding Icon" class="w-10 h-10 mb-1">
        <span class="text-sm font-semibold">Backend Developer</span>
    </div>

    <div class="flex flex-col items-center">
        <img src="{{ asset('images/icons/iot.svg') }}" alt="Design Icon" class="w-10 h-10 mb-1">
        <span class="text-sm font-semibold">IoT Systems</span>
    </div>

    <div class="flex flex-col items-center">
        <img src="{{ asset('images/icons/ai.svg') }}" alt="IoT Icon" class="w-10 h-10 mb-1">
        <span class="text-sm font-semibold">AI Integration</span>
    </div>

    <div class="flex flex-col items-center">
        <img src="{{ asset('images/icons/circuit.svg') }}" alt="AI Icon" class="w-10 h-10 mb-1">
        <span class="text-sm font-semibold">Logic Circuits</span>
    </div>
</div>

<!-- Project Section -->

 <div class="project-title">
    Projects
</div>

<div class="project-design">
    <img src="{{ asset('images/pics/projects.png') }}" alt="Maria Riclyn Diatera" class="project-pic">
</div>

<div class="standee-design">
    <img src="{{ asset('images/pics/standee.png') }}" alt="Maria Riclyn Diatera" class="standee-pic">
</div>


 <div class="about-title">
    About
</div>

<div class="aboutme-design">
    <img src="{{ asset('images/pics/aboutme.png') }}" alt="Maria Riclyn Diatera" class="aboutme-pic">
</div>


</section>
@endsection

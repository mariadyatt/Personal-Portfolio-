@extends('layouts.app')

@section('title', 'Landing')

@section('content')
<section class="min-h-[calc(100vh-120px)] flex flex-col lg:flex-row items-center justify-between text-white px-6 py-12 lg:px-24">

<div class="skill1-title">
    Skills
</div>

<div class="language-title">
    Language 
</div>

<div class="tools-title">
    Tools
</div>

<div class="skillsback-design">
    <img src="{{ asset('images/pics/skillsback.png') }}" alt="Maria Riclyn Diatera" class="skillsback-pic">
</div>


<div class="flex flex-col space-y-6 mt-[0px]">
  <div class="flex items-start space-x-4">
    <img src="{{ asset('images/icons/circuit.svg') }}" alt="Circuit Icon" class="w-10 h-10 ml-[-80px]">
    <div>
      <h2 class="title-skill">Logic Circuits</h2>
      <p class="description-skill">
        Proficient in logic circuit design, including creating truth tables, implementing adders,<br>
        multipliers, and translating digital schematics into PCB layouts.
      </p>
    </div>
  </div>

  <div class="flex items-start space-x-4">
    <img src="{{ asset('images/icons/ai.svg') }}" alt="AI Icon" class="w-10 h-10 ml-[-80px]">
    <div>
      <h2 class="title-skill">AI Integration</h2>
      <p class="description-skill">
        Skilled in integrating artificial intelligence with embedded systems using Python and<br>
        machine learning models to automate decision-making processes.
      </p>
    </div>
  </div>

  <div class="flex items-start space-x-4">
    <img src="{{ asset('images/icons/iot.svg') }}" alt="IoT Icon" class="w-10 h-10 ml-[-80px]">
    <div>
      <h2 class="title-skill">IoT Systems</h2>
      <p class="description-skill">
        Experienced in building real-time IoT platforms with sensor networks, microcontrollers,<br>
        and cloud integration for efficient monitoring and control.
      </p>
    </div>
  </div>

  <div class="flex items-start space-x-4">
    <img src="{{ asset('images/icons/code.svg') }}" alt="Code Icon" class="w-10 h-10 ml-[-80px]">
    <div>
      <h2 class="title-skill">Backend Developer</h2>
      <p class="description-skill">
        Knowledgeable in PHP and Laravel for building scalable backend systems and RESTful APIs,<br>
        with secure database design and authentication.
      </p>
    </div>
  </div>
</div>

</section>
@endsection

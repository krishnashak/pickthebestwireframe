<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Customer Experience</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>


  <style>
  
  /* Section 1 */
    @keyframes ping-slow {
      0% { transform: scale(0.7); opacity: 0.3; }
      50% { transform: scale(1); opacity: 0.1; }
      100% { transform: scale(0.7); opacity: 0.3; }
    }
    @keyframes ping-slower {
      0% { transform: scale(0.6); opacity: 0.4; }
      50% { transform: scale(1); opacity: 0.1; }
      100% { transform: scale(0.6); opacity: 0.4; }
    }
    @keyframes ping-fast {
      0% { transform: scale(0.5); opacity: 0.5; }
      50% { transform: scale(1); opacity: 0.1; }
      100% { transform: scale(0.5); opacity: 0.5; }
    }

    .animate-ping-slow { animation: ping-slow 4s infinite; }
    .animate-ping-slower { animation: ping-slower 6s infinite; }
    .animate-ping-fast { animation: ping-fast 2.5s infinite; }

    .animate-spin-slow { animation: spin 30s linear infinite; }
    .animate-spin-slower { animation: spin 60s linear infinite; }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
     .gradient-bg {
            background: linear-gradient(135deg, #e8e9ff 0%, #f5f3ff 50%, #fde8ff 100%);
        }
        
        .phone-gradient {
            background: linear-gradient(180deg, #d4d8ff 0%, #e8e9ff 50%, #ffd4d4 100%);
        }
        
        .waveform {
            background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
        }
        
        .waveform-static {
            background: linear-gradient(90deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
        }
        
        @keyframes pulse-wave {
            0%, 100% { transform: scaleY(1); }
            50% { transform: scaleY(1.5); }
        }
        
        .wave-bar {
            animation: pulse-wave 1s ease-in-out infinite;
        }
		
/* 1. Orbit Animation (Dots ke liye) */
@keyframes orbit {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
.animate-orbit-1 { animation: orbit 50s linear infinite; }
.animate-orbit-2 { animation: orbit 40s linear infinite; }

/* 2. Floating Animation (Static elements ke liye) */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}
.animate-float { animation: float 4s ease-in-out infinite; }
.animate-float-delayed { animation: float 5s ease-in-out infinite; animation-delay: 1.5s; }
.animate-float-mobile { animation: float 6s ease-in-out infinite; }



/* Placeholder color control karne ke liye custom CSS */
    .form_text::placeholder {
        color: #4b5563 !important;
        opacity: 1;
    }
    /* Input aur Select ke liye specific styling */
    .custom-field {
        font-size: 16px !important;
        font-weight: 400 !important;
        color: #4b5563 !important;
        font-family: 'Lexend Deca', sans-serif;
    }
	
	
	 /* Section 2 */


</style>

<body class="overflow-x-hidden">

<!-- HERO SECTION -->
<section
  class="relative min-h-screen"
  style="
    background-image: url('images/banner_1.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  "
>

  <!-- Dotted grid background -->
  <div class="absolute inset-0 bg-[radial-gradient(#d9d9e3_1px,transparent_1px)] [background-size:40px_40px] opacity-40"></div>

  <!-- Main content grid -->
  <div class="relative max-w-7xl mx-auto px-6 py-24 grid lg:grid-cols-2 gap-16 items-center">

    <!-- LEFT CONTENT -->
    <div>
       <!--<p class="uppercase tracking-widest text-sm text-indigo-600 font-semibold mb-4">
        Customer Experience
      </p>  -->
<h1 class="text-gray-900 mb-6 leading-tight" 
    style="font-family: 'Lexend Deca', sans-serif; font-weight: 500; font-size: 48px;">
    
    <span class="block">Discover Your Ideal</span>
    
    <span class="block text-[#fd5100]">
        Travel eSIM Solution
    </span>
</h1>

<p class="mt-6 max-w-xl"
   style="font-family: 'Lexend Deca', sans-serif; font-weight: 400; font-size: 18px; color: rgb(75, 85, 99); line-height: 1.6;">
  Browse verified eSIM options, compare features side-by-side, and activate your chosen plan instantly for seamless European connectivity.
</p>

<div class="mb-8 fade-in-up stagger-1 visible mt-[60px]">
    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-gray-200/50 p-6 md:p-8">
        <h3 class="text-lg md:text-xl font-normal text-gray-900 mb-6 form_text" style="font-family: 'Lexend Deca', sans-serif;">
            Find Your Perfect eSIM Plan
        </h3>

        <form id="esim-search-form" action="https://aussietravelsim.com.au/esim" method="get" class="space-y-4">
            <div class="space-y-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="whitespace-nowrap custom-field">Traveling to</span>
                    
                    <div class="relative flex-1 min-w-[120px]">
                        <input type="text" id="destination" name="destination" placeholder="Dubai" 
                               class="form_text custom-field w-full px-4 py-3 rounded-lg border-2 border-[#fd5100]/20 bg-white focus:border-[#fd5100] focus:ring-2 focus:ring-[#fd5100]/20 focus:outline-none transition-all duration-200 shadow-sm">
                    </div>

                    <span class="whitespace-nowrap custom-field">from</span>

                    <div class="relative flex-1 min-w-[120px]">
                        <input type="text" id="trip-dates" name="trip-dates" placeholder="Jun 1-" 
                               class="form_text custom-field w-full px-4 py-3 rounded-lg border-2 border-[#fd5100]/20 bg-white focus:border-[#fd5100] focus:ring-2 focus:ring-[#fd5100]/20 focus:outline-none transition-all duration-200 cursor-pointer shadow-sm" readonly="readonly">
                    </div>
                </div>

                <div class="flex items-center gap-2 flex-wrap">
                    <span class="whitespace-nowrap custom-field">with</span>

                    <div class="relative flex-1 min-w-[120px]">
                        <select id="data-pack" name="data-pack" 
                                class="form_text custom-field w-full px-4 py-3 rounded-lg border-2 border-[#fd5100]/20 bg-white focus:border-[#fd5100] focus:ring-2 focus:ring-[#fd5100]/20 focus:outline-none transition-all duration-200 cursor-pointer shadow-sm appearance-none">
                            <option value="" style="color: #9da1a9;">Select...</option>
                            <option value="3GB">3GB</option>
                            <option value="5GB">5GB</option>
                            <option value="Unlimited">Unlimited</option>
                        </select>
                    </div>

                    <span class="whitespace-nowrap custom-field">data package.</span>

                    <button type="submit" class="ml-auto bg-[#fd5100] text-white px-6 py-3 rounded-xl hover:bg-[#e04800] transition-all duration-200 font-normal text-sm shadow-lg hover:shadow-xl transform hover:scale-[1.02] active:scale-[0.98] inline-flex items-center justify-center gap-2 whitespace-nowrap flex-shrink-0">
                        <span class="whitespace-nowrap inline-block form_text" style="font-size: 14px;">Compare eSIM plans</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>

                <div class="mt-3 text-xs text-center custom-field" style="font-size: 12px;">
                    No signup required. We'll show you plans in seconds.
                </div>
            </div>
        </form>
    </div>
</div>
<div class="flex flex-wrap items-center gap-4 text-[14px] fade-in-up stagger-2 visible">
    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/60 backdrop-blur-sm border border-gray-200/50 shadow-sm">
        <svg class="w-5 h-5 text-[#fd5100]" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <span class="text-gray-700 font-light" style="font-size: 14px; font-weight: 300; font-family: 'Lexend Deca', sans-serif;">
            No Physical SIM
        </span>
    </div>

    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/60 backdrop-blur-sm border border-gray-200/50 shadow-sm">
        <svg class="w-5 h-5 text-[#fd5100]" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <span class="text-gray-700 font-light" style="font-size: 14px; font-weight: 300; font-family: 'Lexend Deca', sans-serif;">
            40+ Countries
        </span>
    </div>
</div>

      <!-- <div class="mt-10 flex items-center gap-6">
       <button
  style="background-color:#fd5100;"
  class="text-white px-6 py-3 rounded-xl shadow-lg hover:scale-105 transition"
>
  Upgrade with AI power
</button>

        <div class="flex items-center gap-3">
          <div class="flex -space-x-3">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?1">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?2">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?3">
          </div>
          <span class="text-sm text-gray-700 font-medium">
            Trusted by 200+ leaders
          </span>
        </div>
      </div>-->
    </div>


<!-- RIGHT MOBILE MOCK -->

<div class="relative flex justify-center items-center w-full h-[850px] mt-20 overflow-visible">

  <div class="absolute w-[700px] h-[700px] rounded-full border border-purple-300/20">
      <div class="absolute inset-0 animate-orbit-1">
          <div class="absolute top-1/2 -left-1.5 w-3 h-3 bg-[#fd5100] rounded-full shadow-[0_0_15px_#fd5100]"></div>
      </div>
      <div class="absolute top-[25%] -left-15 animate-float">
          <img src="images/one.png" class="w-20 h-20 rounded-full border-2 border-white shadow-lg" alt="User 1">
      </div>
      
      <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 z-[60] animate-float-delayed">
          <img src="images/two.png" class="w-20 h-20 rounded-full border-2 border-white shadow-lg" alt="User 2">
      </div>
  </div>
  
  <div class="absolute w-[540px] h-[540px] rounded-full border border-indigo-300/20">
      <div class="absolute inset-0 animate-orbit-2">
          <div class="absolute bottom-1/4 -right-1.5 w-3 h-3 bg-[#fd5100] rounded-full shadow-[0_0_15px_#fd5100]"></div>
      </div>
      <div class="absolute top-[30%] -right-12 animate-float">
          <img src="images/three.png" class="w-20 h-20 rounded-full border-2 border-white shadow-lg" alt="User 3">
      </div>
  </div>
  
  <div class="absolute w-[380px] h-[380px] rounded-full border border-pink-300/20">
  </div>

  <div class="absolute left-[-12%] top-[15%] z-30 animate-float">
      <div class="bg-[#fd5100] text-white px-6 py-2 rounded-xl text-sm font-semibold shadow-[0_10px_25px_rgba(0,0,0,0.1)]" 
     style="font-family: 'Lexend Deca', sans-serif;">
    Hello
</div>
  </div>

  <div class="absolute right-[-12%] bottom-[15%] z-30 animate-float-delayed">
      <div class="bg-[#FF6B6B] text-white px-6 py-2 rounded-xl text-sm font-semibold shadow-[0_10px_25px_rgba(255,107,107,0.4)]">
          Need help
      </div>
  </div>

  <div class="relative z-50 animate-float-mobile">
      <img src="images/moible.png" class="w-[300px] drop-shadow-2xl" alt="Mobile">
  </div>

</div>

  </div>

</section>

 <!-- SECTION 1 -->
  <section
    class="section-1 fixed top-0 left-0 w-screen h-screen
           flex items-center justify-center
           text-white text-center px-5
           z-[2] transition-opacity duration-300
           bg-cover bg-center bg-no-repeat"
    style="background-image:url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80');"
  >
    <div>
      <h1 class="text-5xl mb-4">
        The future of building happens together
      </h1>
      <p class="text-2xl max-w-4xl mx-auto">
        Tools and trends evolve, but collaboration endures. With GitHub,
        developers, experts, and code come together on one platform.
      </p>
    </div>
  </section>

  <!-- SECTION 2 -->
  <section
    class="section-2 relative w-screen h-screen mt-[100vh]
           bg-black flex items-center justify-center
           overflow-hidden z-[3]"
  >
    <div class="relative w-full h-full overflow-hidden">
      <video
        class="absolute top-1/2 left-1/2
               h-full w-auto
               -translate-x-1/2 -translate-y-1/2
               object-cover z-[1]
               transition-transform duration-100 ease-out"
        autoplay
        muted
        loop
        playsinline
      >
        <source
          src="https://github.githubassets.com/assets/code-1_desktop-6d44c7cb53b4aebb.mp4"
          type="video/mp4"
        />
      </video>
    </div>
  </section>

<section class="gradient-bg min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Side - Phone Mockup -->
            <div class="relative flex justify-center items-center">
               
             
                <!-- Phone Container -->
                <div
  class="relative w-[400px] h-[500px] rounded-[3rem] shadow-2xl p-6 overflow-hidden bg-center bg-cover"
  style="background-image: url('images/main_img.webp');"
>

                    <!-- Phone Content Card -->
                    
					<div data-aos="fade-up" class="absolute top-12 left-1/2 transform w-[340px] bg-white rounded-3xl shadow-xl p-6" style="transform: translateX(-50%);">
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <span class="font-semibold text-gray-900">AI actions</span>
                            </div>
                            <div class="flex gap-1">
                                <div class="w-2 h-2 bg-gray-800 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Voice Message -->
                        <div class="mb-6">
                            <div class="bg-gradient-to-r from-purple-600 to-blue-500 rounded-2xl p-4 flex items-center gap-3 shadow-lg">
                                <button class="w-8 h-8 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                                <div class="flex-1">
                                    <div class="flex items-center gap-1 mb-1">
                                        <div class="h-8 flex items-end gap-0.5">
                                            <div class="w-0.5 bg-white rounded-full" style="height: 8px; animation-delay: 0s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 16px; animation-delay: 0.1s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 12px; animation-delay: 0.2s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 20px; animation-delay: 0.3s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 8px; animation-delay: 0.4s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 16px; animation-delay: 0.5s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 24px; animation-delay: 0.6s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 12px; animation-delay: 0.7s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 16px; animation-delay: 0.8s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 8px; animation-delay: 0.9s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 20px; animation-delay: 1s;"></div>
                                            <div class="w-0.5 bg-white rounded-full" style="height: 12px; animation-delay: 1.1s;"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-white text-xs font-medium">00:35</span>
                            </div>
                            <div class="flex items-center justify-end gap-1 mt-2 text-xs text-gray-500">
                                <span>05:50pm</span>
                                <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- AI Voice Label -->
                        <div class="absolute -left-6 top-20">
                            <div class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold text-sm shadow-lg">
                                AI Voice
                            </div>
                        </div>
                        
                        <!-- Smart AI voice Section -->
                        <div class="mb-6">
                            <h3 class="text-center font-semibold text-gray-900 mb-4">Smart AI voice</h3>
                            <div class="flex items-end justify-center gap-0.5 h-16 mb-6">
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 20%; animation-delay: 0s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 40%; animation-delay: 0.1s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 30%; animation-delay: 0.2s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 60%; animation-delay: 0.3s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 45%; animation-delay: 0.4s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 70%; animation-delay: 0.5s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 55%; animation-delay: 0.6s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 80%; animation-delay: 0.7s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 50%; animation-delay: 0.8s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 65%; animation-delay: 0.9s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 75%; animation-delay: 1s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 60%; animation-delay: 1.1s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 85%; animation-delay: 1.2s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 70%; animation-delay: 1.3s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 55%; animation-delay: 1.4s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 40%; animation-delay: 1.5s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 65%; animation-delay: 1.6s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 50%; animation-delay: 1.7s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 75%; animation-delay: 1.8s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 45%; animation-delay: 1.9s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 60%; animation-delay: 2s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 35%; animation-delay: 2.1s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 55%; animation-delay: 2.2s;"></div>
                                <div class="w-1 waveform-static rounded-full wave-bar" style="height: 70%; animation-delay: 2.3s;"></div>
                            </div>
                        </div>
                        
                        <!-- Control Buttons -->
                        <div class="flex justify-between items-center">
                            <button class="w-12 h-12 rounded-full border-2 border-gray-200 flex items-center justify-center hover:bg-gray-50 transition">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                                </svg>
                            </button>
                            
                            <button class="w-16 h-16 rounded-full bg-gray-900 flex items-center justify-center hover:bg-gray-800 transition shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 14c1.66 0 3-1.34 3-3V5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3z"/>
                                    <path d="M17 11c0 2.76-2.24 5-5 5s-5-2.24-5-5H5c0 3.53 2.61 6.43 6 6.92V21h2v-3.08c3.39-.49 6-3.39 6-6.92h-2z"/>
                                </svg>
                            </button>
                            
                            <button class="w-12 h-12 rounded-full border-2 border-gray-200 flex items-center justify-center hover:bg-gray-50 transition">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <rect x="6" y="6" width="4" height="4"/>
                                    <rect x="6" y="14" width="4" height="4"/>
                                    <rect x="14" y="6" width="4" height="4"/>
                                    <rect x="14" y="14" width="4" height="4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Content -->
            <div class="space-y-8">
                <div>
                    <p style="color: #fd5100; font-family: 'Lexend Deca', sans-serif; font-size: 14px; line-height: 30px; font-weight: 400; text-transform: uppercase; letter-spacing: 0.025em; margin-bottom: 1rem;">
    Digital Innovation
</p>
                   <h1 data-aos="fade-up" style="font-family: 'Lexend Deca', sans-serif; font-size: 48px; line-height: 48px; font-weight: 500; color: #000; margin: 0;">
    What is an <span style="color: #fd5100;">eSIM</span>?
</h1>
<p data-aos="fade-up" 
   data-aos-delay="200"
   class="mt-6 max-w-xl"
   style="font-family: 'Lexend Deca', sans-serif; font-weight: 400; font-size: 18px; color: rgb(75, 85, 99); line-height: 1.6;">
   An eSIM is a virtual or digital SIM card that allows you to connect to mobile networks without a physical SIM card. You can store multiple eSIMs, accessing different carriers, numbers, and data plans—ideal for travel or everyday use. Activate it on your phone to get online in minutes.
</p>

                </div>
                
                <!-- Features -->
                <div class="space-y-8">
                    <!-- Feature 1 -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                         <h3 data-aos="fade-up" 
    style="font-family: 'Lexend Deca', sans-serif; font-size: 24px; line-height: 30px; font-weight: 500; color: #111827; margin-bottom: 0.5rem;">
    Easy to Use
</h3>
                            
							<p data-aos="fade-up" 
   data-aos-delay="100" 
   style="font-family: 'Lexend Deca', sans-serif; font-weight: 400; font-size: 16px; color: rgb(75, 85, 99); line-height: 1.6; margin: 0;">
    Simple activation process
</p>
                        </div>
                    </div>
                    
                    <hr class="border-gray-200">
                    
                    <!-- Feature 2 -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 data-aos="fade-up" 
    data-aos-delay="200"
    style="font-family: 'Lexend Deca', sans-serif; font-size: 24px; line-height: 30px; font-weight: 500; color: #111827; margin-bottom: 0.5rem;">
    Easy to Install
</h3>
                            <p data-aos="fade-up" 
   data-aos-delay="300" 
   style="font-family: 'Lexend Deca', sans-serif; font-weight: 400; font-size: 16px; color: rgb(75, 85, 99); line-height: 1.6; margin: 0;">
    Quick setup in minutes
</p>
                        </div>
                    </div>
                    
                    <hr class="border-gray-200">
                    
                    <!-- Feature 3 -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 data-aos="fade-up" 
    data-aos-delay="400"
    style="font-family: 'Lexend Deca', sans-serif; font-size: 24px; line-height: 30px; font-weight: 500; color: #111827; margin-bottom: 0.5rem;">
    Easy to Enjoy
</h3>
                            <p data-aos="fade-up" 
   data-aos-delay="500" 
   style="font-family: 'Lexend Deca', sans-serif; font-weight: 400; font-size: 16px; color: rgb(75, 85, 99); line-height: 1.6; margin: 0;">
   Instant connectivity
</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Button -->
<div data-aos="fade-up" data-aos-delay="600" class="pt-4">
    <button class="bg-[#fd5100] hover:bg-[#e64800] text-white px-8 py-4 rounded-xl font-semibold text-lg transition shadow-lg" style="font-family: 'Lexend Deca', sans-serif;">
        Try AI agent free
    </button>
</div>
            </div>
        </div>
    </div>
</section>


<script>
  AOS.init({
    duration: 1000, // animation ki speed (1 second)
    once: true,     // sirf ek baar animate hoga scroll karne par
  });
</script>

<!-- JS (same logic) -->
  <script>
    const section1 = document.querySelector('.section-1');
    const section2Video = document.querySelector('.section-2 video');

    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY;
      const viewportHeight = window.innerHeight;

      let fadeProgress = scrollY / viewportHeight;
      if (fadeProgress > 1) fadeProgress = 1;
      section1.style.opacity = 1 - fadeProgress;

      if (scrollY > viewportHeight) {
        const offset = (scrollY - viewportHeight) * 0.3;
        section2Video.style.transform =
          `translate(-50%, calc(-50% + ${offset}px))`;
      } else {
        section2Video.style.transform = 'translate(-50%, -50%)';
      }
    });
  </script>

</body>
</html>

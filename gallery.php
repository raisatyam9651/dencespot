<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Results Gallery | Dencespot Clinic Gurgaon</title>
    <meta name="description" content="View real transformations from Dencespot Clinic. Before and after results for Hair Transplant, Skin treatments, Beard restoration, and more.">
    
    <title>Patient Results Gallery | Dencespot Clinic Gurgaon</title>
    <meta name="description" content="View real transformations from Dencespot Clinic. Before and after results for Hair Transplant, Skin treatments, Beard restoration, and more.">
    
    <?php include "includes/head_links.php"; ?>
</head>
<body class="bg-bgLight font-sans text-darkSlate overflow-x-hidden">

    <!-- Header -->
        <?php include "includes/header.php"; ?>

    <!-- Page Title -->
    <section class="pt-40 pb-20 bg-darkSlate text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#0EA5A4_1px,transparent_1px)] [background-size:20px_20px]"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="bg-medicalTeal/20 text-medicalTeal text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6 inline-block">Visual Evidence</span>
            <h1 class="text-5xl md:text-6xl font-display font-bold mb-6">Patient <span class="text-medicalTeal">Transformations</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Real results, real patients. Explore our comprehensive gallery of medical excellence in hair restoration and advanced skin care.</p>
        </div>
    </section>

    <!-- Gallery Filter -->
    <div class="bg-white py-8 border-b border-gray-100 sticky top-[73px] z-40 shadow-sm">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4" id="filterContainer">
                <button class="filter-btn active px-6 py-2 rounded-full border border-gray-200 text-sm font-bold transition-all hover:bg-bgLight" data-filter="all">All Results</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-gray-200 text-sm font-bold transition-all hover:bg-bgLight" data-filter="hair">Hair Transplant</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-gray-200 text-sm font-bold transition-all hover:bg-bgLight" data-filter="beard">Beard & Moustache</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-gray-200 text-sm font-bold transition-all hover:bg-bgLight" data-filter="skincare">Skin Care</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-gray-200 text-sm font-bold transition-all hover:bg-bgLight" data-filter="laser">Laser Treatments</button>
            </div>
        </div>
    </div>

    <!-- Gallery Grid -->
    <section class="py-[20px]">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10" id="galleryGrid">

                <!-- Hair Transplant 1 -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="hair">
                    <div class="overflow-hidden">
                        <img src="assets/images/indian-ht-result-1.png" alt="Rajesh K. - Hair Transplant" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Hair Restoration - Rajesh K.</span>
                        <h3 class="text-xl font-bold mb-2">Crown Area Density</h3>
                        <p class="text-gray-400 text-sm">Full density restoration for vertex balding using advanced FUE technology.</p>
                    </div>
                </div>

                <!-- Hairline HT -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="hair">
                    <div class="overflow-hidden">
                        <img src="assets/images/indian-ht-result-2.png" alt="Amit S. - Hairline HT" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Hair Restoration - Amit S.</span>
                        <h3 class="text-xl font-bold mb-2">Frontal Hairline Design</h3>
                        <p class="text-gray-400 text-sm">Natural, age-appropriate hairline recreation for a youthful look.</p>
                    </div>
                </div>
                
                <!-- Hair Microneedling -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="hair">
                    <div class="overflow-hidden">
                        <img src="assets/images/hair_microneedling_indian_ba_1773724737453.png" alt="Vikram M. - Microneedling" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Hair Regrowth - Vikram M.</span>
                        <h3 class="text-xl font-bold mb-2">Targeted Microneedling</h3>
                        <p class="text-gray-400 text-sm">Follicular stimulation triggering new hair density in thinning areas.</p>
                    </div>
                </div>
                
                <!-- LED Therapy -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="hair">
                    <div class="overflow-hidden">
                        <img src="assets/images/hair_led_indian_ba_1773724717444.png" alt="Rahul D. - LED Scalp" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Scalp Therapy - Rahul D.</span>
                        <h3 class="text-xl font-bold mb-2">Medical LED Regrowth</h3>
                        <p class="text-gray-400 text-sm">Early-stage miniaturization reversed using clinical LED phototherapy.</p>
                    </div>
                </div>
                
                <!-- Dandruff -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="hair">
                    <div class="overflow-hidden">
                        <img src="assets/images/dandruff_indian_ba_1773724686736.png" alt="Suresh J. - Dandruff Clearing" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Scalp Health - Suresh J.</span>
                        <h3 class="text-xl font-bold mb-2">Severe Dandruff Treatment</h3>
                        <p class="text-gray-400 text-sm">Flake control and barrier stabilization with clinical protocols.</p>
                    </div>
                </div>

                <!-- Chemical Peel -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="skincare">
                    <div class="overflow-hidden">
                        <img src="assets/images/chemical_peel_indian_diff_clothes_ba_1773724284640.png" alt="Rohit P. - Chemical Peel" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Medical Peels - Rohit P.</span>
                        <h3 class="text-xl font-bold mb-2">Pigmentation Clearance</h3>
                        <p class="text-gray-400 text-sm">Deep exfoliation eliminating decades of sun damage and uneven tone.</p>
                    </div>
                </div>

                <!-- Face PRP -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="skincare">
                    <div class="overflow-hidden">
                        <img src="assets/images/face_prp_indian_ba_1773724702450.png" alt="Aditya K. - Vampre Facial PRP" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Rejuvenation - Aditya K.</span>
                        <h3 class="text-xl font-bold mb-2">Face PRP (Vampire Facial)</h3>
                        <p class="text-gray-400 text-sm">Injecting growth factors for immense collagen and natural plumpness.</p>
                    </div>
                </div>

                <!-- HydraFacial -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="skincare">
                    <div class="overflow-hidden">
                        <img src="assets/images/hydrafacial_indian_ba_1773725133193.png" alt="Pawan S. - HydraFacial" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Advanced Skin Care - Pawan S.</span>
                        <h3 class="text-xl font-bold mb-2">HydraFacial Glow</h3>
                        <p class="text-gray-400 text-sm">Pore-level extractions combined with immediate brightening serums.</p>
                    </div>
                </div>
                
                <!-- Carbon Facial / Skin Treatment -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="skincare">
                    <div class="overflow-hidden">
                        <img src="assets/images/skin_treatment_indian_ba_1773724789009.png" alt="Neeraj V. - Skin Carbon Laser" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Clinical Dermatology - Neeraj V.</span>
                        <h3 class="text-xl font-bold mb-2">Carbon Laser Toning</h3>
                        <p class="text-gray-400 text-sm">Refining skin texture instantly reducing oily shine and pore size.</p>
                    </div>
                </div>
                
                <!-- Mole Removal -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="laser">
                    <div class="overflow-hidden">
                        <img src="assets/images/mole_removal_indian_ba_1773724754871.png" alt="Deepak G. - Mole Removal" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Aesthetic Laser - Deepak G.</span>
                        <h3 class="text-xl font-bold mb-2">CO2 Laser Mole Excision</h3>
                        <p class="text-gray-400 text-sm">Permanently slicing off dermal moles leaving absolutely no scar tissue.</p>
                    </div>
                </div>

                <!-- Laser Hair Removal -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="laser">
                    <div class="overflow-hidden">
                        <img src="assets/images/laser_hair_indian_ba_1773724218927.png" alt="Vishal R. - Laser Hair" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Laser Treatments - Vishal R.</span>
                        <h3 class="text-xl font-bold mb-2">Painless Hair Reduction</h3>
                        <p class="text-gray-400 text-sm">Permanent reduction of unwanted thick hair using advanced diode lasers.</p>
                    </div>
                </div>
                
                <!-- Tattoo Removal -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="laser">
                    <div class="overflow-hidden">
                        <img src="assets/images/tattoo_removal_indian_diff_clothes_ba_1773724299134.png" alt="Manish L. - Tattoo Erase" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Laser Extraction - Manish L.</span>
                        <h3 class="text-xl font-bold mb-2">Tattoo Fading Session</h3>
                        <p class="text-gray-400 text-sm">Smashing deep ink particles without damaging surrounding dermal tissue.</p>
                    </div>
                </div>
                
                <!-- Lip Blush -->
                <div class="gallery-card bg-white rounded-[2rem] overflow-hidden shadow-xl border border-gray-100 transition-all duration-300" data-category="skincare">
                    <div class="overflow-hidden">
                        <img src="assets/images/lip_blush_indian_ba_1773724236411.png" alt="Karan S. - Lip Color Correction" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-8">
                        <span class="text-medicalTeal text-[10px] font-bold uppercase tracking-widest mb-3 block">Micropigmentation - Karan S.</span>
                        <h3 class="text-xl font-bold mb-2">Dark Lip Neutralization</h3>
                        <p class="text-gray-400 text-sm">Restoring natural pink undertones to heavily pigmented smoker's lips.</p>
                    </div>
                </div>

            </div>

            <!-- LEAD GENERATION FORM -->
            <div class="mt-24 bg-white p-12 rounded-[4rem] shadow-2xl border border-gray-50 max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-display font-bold mb-4 italic text-darkSlate">Get Your <span class="text-medicalTeal">Free Assessment</span></h2>
                    <p class="text-gray-400">Ready for your transformation? Share your details and we'll reach out.</p>
                </div>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Your Name" class="w-full bg-bgLight p-5 rounded-2xl outline-none focus:ring-2 ring-medicalTeal/20 transition-all border border-transparent focus:border-medicalTeal" required>
                        <input type="tel" placeholder="Phone Number" class="w-full bg-bgLight p-5 rounded-2xl outline-none focus:ring-2 ring-medicalTeal/20 transition-all border border-transparent focus:border-medicalTeal" required>
                    </div>
                    <textarea placeholder="Tell us about your requirements..." rows="4" class="w-full bg-bgLight p-5 rounded-2xl outline-none focus:ring-2 ring-medicalTeal/20 transition-all border border-transparent focus:border-medicalTeal" required></textarea>
                    <button class="w-full bg-medicalTeal text-white p-6 rounded-3xl font-bold text-xl hover:bg-teal-700 transition-all shadow-xl shadow-teal-50 flex items-center justify-center gap-4 group">
                        Confirm Appointment <i class="fas fa-calendar-check group-hover:rotate-12 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>
<?php include "includes/scripts.php"; ?>

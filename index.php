<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/css/main.css">
    <link rel="stylesheet" href="frontend/css/grid.css">
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="module" src="frontend/js/main.js"></script>
    <title>Homepage - INK INC.</title>
</head>
<body>

    <header>
        <img id="logo" src="frontend/imgs/logo.svg" alt="INK INC. logo">
        <img id="menu" src="frontend/imgs/menu.svg" alt="Menu icon">
        <nav>
            <ul>
                <li><a href="#top">Top</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#artists">Artists</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#safety">Safety</a></li>
                <li><a href="#booking">Booking</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main id="app">

 <!-- Hero Section -->
        <section id="top" class="">
            <h1 class="full">Clean Design<br><span> Made to Last</span></h1>
            <p id="hero-description" class="full">We bring your ideas to life in the most creative, innovative, and impactful ways,<br> while maintaining the highest standards of quality and professionalism.</p>
        </section>
<!-- End of Hero Section -->




<!-- About Section -->
        <section id="about" class="grid-con">
            <h2 class="full">About Us</h2>
            <p>INK INC. is dedicated to providing top-notch tattoo and piercing services with a focus on creativity, safety, and customer satisfaction. Our team of skilled artists brings your ideas to life while maintaining the highest standards of professionalism and hygiene.</p>
        </section>

<!-- video player will go here, I need to make video for Joe's class first-->

<!-- End of About Section -->




<!-- Artists Section -->
        <section id="artists" class="grid-con">
            <h2 class="full">Our Artists</h2>

            <div v-if="loadingArtists" class="loader-con">
                <img class="loader" src="frontend/imgs/loader.svg" alt="Loading ...">
            </div>

            <ul id="artist-list" v-else>
                    <li v-for="artist in artistData" :key="artist.id">
                        <h3>{{ artist.name }}</h3>
                        <p>{{ artist.tattoo_style }}</p>
                        <button @click="fetchArtistDetails(artist.id)">View Details</button>
                    </li>
            </ul>
<!-- End of Artist List -->
<!-- Artist Details -->
            <div v-if="loadingArtist" class="loader-con">
                <img class="loader" src="frontend/imgs/loader.svg" alt="Loading artist details">
            </div>

            <div v-else-if="error" class="error-box">
                {{ error }}
            </div>

            <div v-else-if="selectedArtist" id="info-box">
                <h2>Artist Details</h2>
                <img id="artist-photo" :src="selectedArtist.profile_img_url" alt="Photo of {{ selectedArtist.name }}">
                <p id="name-tag">{{ selectedArtist.name }}</p>
                <p id="style-tag">{{ selectedArtist.tattoo_style }}</p>
                <p id="experience-tag">{{ selectedArtist.experience_years }} years inking</p>
                <p id="bio-tag">{{ selectedArtist.bio }}</p>
                <p id="portfolio-tag"><a :href="selectedArtist.portfolio_url" target="_blank">View Portfolio</a></p>
                <p id="fun-fact-tag">{{ selectedArtist.fun_fact }}</p>

            </div>

            <div v-else id="info-box" class="placeholder-box">
                <h2>Artist Details</h2>
                <p>Click an artist from the list to view their details.</p>
            </div>
        </section>
<!-- End of Artist Section -->




<!-- Services Section -->

        <section id="services" class="grid-con">
            <h2 class="full">Our Services</h2>
            <p>At INK INC., we offer a wide range of services to cater to your tattoo and piercing needs. Our commitment to quality, safety, and customer satisfaction ensures a memorable experience for every client.</p>

            <ul class="service-cards">
                    <li class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="frontend/imgs/service_1.jpg" alt="Tattooing service image">
                                <p>Tattooing</p>
                            </div>
                            <div class="flip-card-back">
                                <p>Our skilled artists create custom tattoos tailored to your vision, ensuring a unique and personal experience.</p>
                            </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="frontend/imgs/service_2.jpg" alt="Piercing service image">
                                <p>Piercing</p>
                            </div>
                            <div class="flip-card-back">
                                <p>We offer professional piercing services with a focus on safety, hygiene, and precision for a comfortable experience.</p>
                            </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="frontend/imgs/service_3.jpg" alt="Cover-up service image">
                                <p>Cover-Ups</p>
                            </div>
                            <div class="flip-card-back">
                                <p>Our artists specialize in transforming old or unwanted tattoos into stunning new designs, giving you a fresh start.</p>
                            </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="frontend/imgs/service_4.jpg" alt="Touch-up service image">
                                <p>Touch-Ups</p>
                            </div>
                            <div class="flip-card-back">
                                <p>We provide touch-up services to refresh and enhance the vibrancy of your existing tattoos, ensuring they look their best for years to come.</p>
                            </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="frontend/imgs/service_5.jpg" alt="Consultation service image">
                                <p>Consultations</p>
                            </div>
                            <div class="flip-card-back">
                                <p>Our consultations help you refine your tattoo ideas, choose the right design and placement, and prepare for your session with confidence.</p>
                            </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="frontend/imgs/service_6.jpg" alt="Aftercare service image">
                                <p>Aftercare Guidance</p>
                            </div>
                            <div class="flip-card-back">
                                <p>We provide comprehensive aftercare instructions and support to ensure your new tattoo heals properly and maintains its beauty.</p>
                            </div>
                        </div>
                    </li>
                </ul>
        </section>
<!-- End of Services Section -->






<!-- Safety Section -->
        <section id="safety" class="grid-con">
            <h2 class="full">Safety First</h2>
            <p>We prioritize your safety and hygiene. Our studio follows strict protocols to ensure a clean and safe environment for every client.</p>
            <ul class="safety-list">
                <li>All equipment is sterilized using autoclaves.</li>
                <li>We use single-use needles and disposable gloves.</li>
                <li>Our artists are trained in bloodborne pathogens and first aid.</li>
                <li>We maintain a clean and sanitized workspace at all times.</li>
                <li>We follow local health regulations and guidelines rigorously.</li>
            </ul>
<!-- I may later take the blog out, i just recall discussing it with Marco during a checkpoint... may be remembering wrong and will only do it of i have time at all-->
            <p>Feel free to ask our staff about our safety practices during your visit! Plus visit our <a href="blog.html">Healthy Ink Blog</a> for more tips and information.</p>
        </section>
<!-- End of Safety Section -->





<!-- Booking Section -->
        <section id="booking" class="grid-con">
            <h2 class="full">Book an Appointment</h2>
            <p>Ready to get inked? Request your session with us today!</p>
            <form>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="email" placeholder="Email" required>
                <input type="date" required>
                <select placeholder="Select Artist">
                    <option value="" disabled selected>Select Artist</option>
                    <option v-for="artist in artistData" :key="artist.id" :value="artist.id">{{ artist.name }}</option>
                </select>
                <select placeholder="Select Service" required>
                    <option value="" disabled selected>Select Service</option>
                    <option value="custom-arm-shoulder">Custom Tattoo - Arm/Shoulder</option>
                    <option value="custom-leg-thigh">Custom Tattoo - Leg/Thigh</option>
                    <option value="custom-back">Custom Tattoo - Back</option>
                    <option value="custom-chest-stomach">Custom Tattoo - Chest/Stomach</option>
                    <option value="custom-ribcage">Custom Tattoo - Ribcage</option>
                    <option value="custom-other">Custom Tattoo - Other</option>
                    <option value="cover-up">Cover-Up</option>
                    <option value="touch-up">Touch-Up</option>
                    <option value="piercing">Piercing</option>
                </select>
                <textarea placeholder="Your Tattoo Idea and Important Mentions (recommended)"></textarea>
                <button>Submit</button>
            </form>
        </section>
<!-- End of Booking Section -->





<!-- Contact Section -->
        <section id="contact" class="grid-con">
            <h2 class="full">Contact Us</h2>
            <p>Questions? We're here to help!</p>
            <form>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Your Message" required></textarea>
                <button>Send</button>
            </form>

            <p id="form-message"></p>
        </section>
<!-- End of Contact Section -->

    </main>



    <footer>
        &copy; 2025 INK INC. All rights reserved.
    </footer>
    
</body>
</html>
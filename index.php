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
        <a href="#top"><img id="logo" src="frontend/imgs/logo.svg" alt="INK INC. logo"></a>
        <img id="menu" src="frontend/imgs/menu.svg" alt="Menu icon">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#safety">Safety</a></li>
                <li><a href="#artists">Artists</a></li>
                <li><a href="#booking">Booking</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#top">Restart</a></li>
            </ul>
        </nav>
    </header>

    <main id="app">

 <!-- Hero Section -->
        <section id="top">
            <h1>Clean Design<br><span> Made to Last</span></h1>
            <p id="hero-description">We bring your ideas to life in the most creative, innovative, and impactful ways,<br> while maintaining the highest standards of quality and professionalism.</p>
        </section>
<!-- End of Hero Section -->




<!-- About Section -->
        <section id="about" class="grid-con">
            <h2 class="full">About Us</h2>
            <p class="full m-col-span-4 l-col-span-4">INK INC. is dedicated to providing top-notch tattoo and piercing services with a focus on creativity, safety, and customer satisfaction. Our team of skilled artists brings your ideas to life while maintaining the highest standards of professionalism and hygiene.</p>

            <video controls loop class="full m-col-span-8 l-col-span-8">
                <source src="frontend/video/main-video.mp4" type="video/mp4">
                Your browser does not support the video tag. Please update your browser to view this content.
            </video>
        </section>

<!-- End of About Section -->




<!-- Services Section -->

        <section id="services" class="grid-con">
            <h2 class="full">Our Services</h2>
            <p class="full">At INK INC., we offer a wide range of services to cater to your tattoo and piercing needs. Our commitment to quality, safety, and customer satisfaction ensures a memorable experience for every client.</p>

            <div class="service-cards grid-con full">
                    <div class="slide-card col-span-4 m-col-span-6 l-col-span-4" id="card-tattooing">
                        <div class="slide-card-inner">
                            <div class="slide-card-front">
                                <h2>Tattooing</h2>
                            </div>
                            <div class="slide-card-back">
                                <h2>Tattooing</h2>
                                <p>Our skilled artists create custom tattoos tailored to your vision, ensuring a unique and personal experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-card col-span-4 m-col-span-6 l-col-span-4" id="card-piercing">
                        <div class="slide-card-inner">
                            <div class="slide-card-front">
                                <h2>Piercing</h2>
                            </div>
                            <div class="slide-card-back">
                                <h2>Piercing</h2>
                                <p>We offer professional piercing services with a focus on safety, hygiene, and precision for a comfortable experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-card col-span-4 m-col-span-6 l-col-span-4" id="card-cover-ups">
                        <div class="slide-card-inner">
                            <div class="slide-card-front">
                                <h2>Cover-Ups</h2>
                            </div>
                            <div class="slide-card-back">
                                <h2>Cover-Ups</h2>
                                <p>Our artists specialize in transforming old or unwanted tattoos into stunning new designs, giving you a fresh start.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-card col-span-4 m-col-span-6 l-col-span-4" id="card-touch-ups">
                        <div class="slide-card-inner">
                            <div class="slide-card-front">
                                <h2>Touch-Ups</h2>
                            </div>
                            <div class="slide-card-back">
                                <h2>Touch-Ups</h2>
                                <p>We provide touch-up services to refresh and enhance the vibrancy of your existing tattoos, ensuring they look their best for years to come.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-card col-span-4 m-col-span-6 l-col-span-4" id="card-consultations">
                        <div class="slide-card-inner">
                            <div class="slide-card-front">
                                <h2>Consultations</h2>
                            </div>
                            <div class="slide-card-back">
                                <h2>Consultations</h2>
                                <p>Our consultations help you refine your tattoo ideas, choose the right design and placement, and prepare for your session with confidence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-card col-span-4 m-col-span-6 l-col-span-4" id="card-aftercare">
                        <div class="slide-card-inner">
                            <div class="slide-card-front">
                                <h2>Aftercare Guidance</h2>
                            </div>
                            <div class="slide-card-back">
                                <h2>Aftercare Guidance</h2>
                                <p>We provide comprehensive aftercare instructions and support to ensure your new tattoo heals properly and maintains its beauty.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
<!-- End of Services Section -->






<!-- Safety Section -->
        <section id="safety" class="grid-con">
            <h2 class="full">Safety First</h2>
            <p class="full">We prioritize your safety and hygiene. Our studio follows strict protocols to ensure a clean and safe environment for every client.</p>
            <ul class="full">
                <li>All equipment is sterilized using autoclaves.</li>
                <li>We use single-use needles and disposable gloves.</li>
                <li>Our artists are trained in bloodborne pathogens and first aid.</li>
                <li>We maintain a clean and sanitized workspace at all times.</li>
                <li>We follow local health regulations and guidelines rigorously.</li>
            </ul>
<!-- I may later take the blog out, i just recall discussing it with Marco during a checkpoint... may be remembering wrong and will only do it of i have time at all-->
            <p class="full">Feel free to ask our staff about our safety practices during your visit! Plus visit our <a href="blog.html">Healthy Ink Blog</a> for more tips and information.</p>
        </section>
<!-- End of Safety Section -->




<!-- Artists Section -->
        <section id="artists" class="grid-con">
            <h2 class="hidden">Our Artists</h2>

            <div v-if="loadingArtists" class="loader-con">
                <img class="loader" src="frontend/imgs/loader.svg" alt="Loading ...">
            </div>

            <ul id="artist-list" v-else>
                    <li id="artist-selection" v-for="artist in artistData" :key="artist.id" >
                        <img id="artist-photo" :src="artist.profile_img_url" alt="Photo of {{ artist.name }}">    
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







<!-- Booking Section -->
        <section id="booking" class="grid-con">
            <h2 class="full">Book an Appointment</h2>
            <p class="full">Ready to get inked? Request your session with us today!</p>
            <form>
                <div id="name-inputs">
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                    <input type="email" placeholder="Email" required>
                </div>

                <div id="date-selection">
                    <input type="date" required>
                </div>

                <div id="request-selection">
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
                </div>
            </form>
        </section>
<!-- End of Booking Section -->





<!-- Contact Section -->
        <section id="contact">
            <h2 class="full">Contact Us</h2>
            <p class="full">Questions? We're here to help!</p>
            <form id="contact-form">
                <input type="text" name="firstName" placeholder="First Name">
                <input type="text" name="lastName" placeholder="Last Name">
                <input type="email" name="email" placeholder="Email" id="contact-email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Your Message"></textarea>
                <button type="submit">Send</button>
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
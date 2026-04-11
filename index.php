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
            <p></p>
        </section>
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
            <p></p>
        </section>
<!-- End of Services Section -->






<!-- Safety Section -->
        <section id="safety" class="grid-con">
            <h2 class="full">Safety First</h2>
            <p></p>
        </section>
<!-- End of Safety Section -->





<!-- Booking Section -->
        <section id="booking" class="grid-con">
            <h2 class="full">Book an Appointment</h2>
            <p>Ready to get inked? Schedule your session with us today!</p>
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
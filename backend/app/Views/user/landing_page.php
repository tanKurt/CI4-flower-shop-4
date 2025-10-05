<?php
$shopName = "Lunara";
$tagline = "Blossoms for Every Moment";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $shopName ?> | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-pink-50 to-white text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-pink-600"><?= $shopName ?></h1>

            <!-- Navigation Links -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="index.php#home" class="hover:text-pink-600">Home</a></li>
                <li><a href="index.php#about" class="hover:text-pink-600">About</a></li>
                <li><a href="index.php#shop" class="hover:text-pink-600">Shop</a></li>
                <li><a href="index.php#contact" class="hover:text-pink-600">Contact</a></li>
                <li><a href="/moodboard" class="hover:text-pink-600">Moodboard</a></li>
                <li><a href="/roadmap" class="hover:text-pink-600">Roadmap</a></li>
            </ul>

            <!-- Right-side Buttons -->
            <div class="flex space-x-3">
                <a href="/login" class="border border-pink-600 text-pink-600 px-4 py-2 rounded-lg hover:bg-pink-50">Login</a>
                <a href="/signup" class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Signup</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative bg-cover bg-center h-[80vh]" style="background-image: url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1350&q=80');">
        <div class="absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-6">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-4"><?= $tagline ?></h2>
            <p class="text-lg md:text-xl text-gray-200 mb-6">Beautiful arrangements delivered with love</p>
            <a href="#shop" class="bg-pink-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-pink-700">Shop Now</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="max-w-7xl mx-auto px-6 py-16 text-center">
        <h3 class="text-3xl font-bold text-pink-600 mb-6">About Us</h3>
        <p class="text-gray-700 leading-relaxed max-w-2xl mx-auto">
            At <?= $shopName ?>, we believe flowers speak the language of the heart. Our artisans craft elegant bouquets for every occasion — from birthdays to weddings. With fresh blooms handpicked daily, we bring beauty and fragrance to your life.
        </p>
    </section>

    <!-- Shop Section -->
    <section id="shop" class="bg-pink-50 py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-pink-600 mb-10">Our Bestsellers</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80" alt="Roses" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold text-gray-800">Rose Bouquet</h4>
                        <p class="text-gray-600 mt-2">₱1,200</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
                    <img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&w=800&q=80" alt="Tulips" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold text-gray-800">Tulip Delight</h4>
                        <p class="text-gray-600 mt-2">₱1,500</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
                    <img src="https://images.unsplash.com/photo-1526045612212-70caf35c14df?auto=format&fit=crop&w=800&q=80" alt="Sunflowers" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold text-gray-800">Sunny Sunflowers</h4>
                        <p class="text-gray-600 mt-2">₱1,000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="max-w-7xl mx-auto px-6 py-16 text-center">
        <h3 class="text-3xl font-bold text-pink-600 mb-6">Get in Touch</h3>
        <p class="mb-8 text-gray-700">We’d love to hear from you! Visit us or send a message below.</p>
        <form class="max-w-2xl mx-auto space-y-4">
            <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>
            <button class="bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-pink-600 text-white py-6 text-center">
        <p>&copy; <?= date("Y") ?> <?= $shopName ?>. All rights reserved.</p>
    </footer>

</body>

</html>
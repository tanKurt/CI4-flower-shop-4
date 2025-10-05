<?php $shopName = "Lunara"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $shopName ?> | Mood Board</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }

        .font-pacifico {
            font-family: 'Pacifico', cursive;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-5xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-pink-600 mb-8">Mood Board</h1>
        <!-- Color Palette -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Color Palette</h2>
            <div class="flex space-x-6">
                <div class="w-20 h-20 rounded-lg bg-pink-500 border-2 border-white shadow-md flex items-center justify-center text-white font-bold">#ec4899</div>
                <div class="w-20 h-20 rounded-lg bg-yellow-300 border-2 border-white shadow-md flex items-center justify-center text-gray-800 font-bold">#fde047</div>
                <div class="w-20 h-20 rounded-lg bg-green-400 border-2 border-white shadow-md flex items-center justify-center text-white font-bold">#4ade80</div>
            </div>
        </section>
        <!-- Typography -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Typography</h2>
            <div class="space-y-2">
                <div class="font-montserrat text-2xl">Montserrat (Headings & Body)</div>
                <div class="font-pacifico text-2xl">Pacifico (Accent/Logo)</div>
            </div>
        </section>
        <!-- Buttons Set -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Buttons</h2>
            <div class="flex space-x-4">
                <button class="bg-pink-600 text-white px-6 py-2 rounded-lg font-montserrat font-bold hover:bg-pink-700">Primary</button>
                <button class="bg-yellow-300 text-gray-800 px-6 py-2 rounded-lg font-montserrat font-bold hover:bg-yellow-400">Secondary</button>
                <button class="border-2 border-pink-600 text-pink-600 px-6 py-2 rounded-lg font-montserrat font-bold hover:bg-pink-50">Border</button>
                <button class="bg-gray-300 text-gray-500 px-6 py-2 rounded-lg font-montserrat font-bold cursor-not-allowed" disabled>Disabled</button>
            </div>
        </section>
        <!-- Card Sample -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Card Sample</h2>
            <div class="bg-white rounded-xl shadow-lg p-6 w-80">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80" alt="Sample" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="font-montserrat text-lg font-bold text-pink-600 mb-2">Rose Bouquet</h3>
                <p class="font-montserrat text-gray-700 mb-2">Elegant roses for every occasion.</p>
                <button class="bg-pink-600 text-white px-4 py-2 rounded-lg font-montserrat font-bold hover:bg-pink-700">Order Now</button>
            </div>
        </section>
        <!-- Logos -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Logos</h2>
            <div class="flex space-x-8">
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-pink-600 flex items-center justify-center">
                        <span class="font-pacifico text-white text-3xl">L</span>
                    </div>
                    <span class="mt-2 font-montserrat">Circle Logo</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg bg-pink-600 flex items-center justify-center">
                        <span class="font-pacifico text-white text-3xl">L</span>
                    </div>
                    <span class="mt-2 font-montserrat">Square Logo</span>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
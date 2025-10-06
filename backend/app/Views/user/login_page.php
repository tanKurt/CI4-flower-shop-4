<?php $shopName = "Lunara"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $shopName ?> | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 flex items-center justify-center h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Login to <?= $shopName ?></h2>
        <form class="space-y-4">
            <input type="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            <input type="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            <button class="w-full bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700">Login</button>
        </form>
        <p class="mt-4 text-sm text-gray-600 text-center">Don't have an account? <a href="/signup" class="text-pink-600 hover:underline">Sign up</a></p>
        <p class="mt-6 text-center"><a href="/" class="text-gray-500 hover:underline">← Back to Home</a></p>
    </div>

</body>

</html>
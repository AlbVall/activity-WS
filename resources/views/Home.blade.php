<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodstrike | Home</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-gray-900 text-white">
    
    <nav class="flex justify-between items-center p-6 bg-gray-800 shadow-lg">
        <h1 class="text-2xl font-bold">Bloodstrike</h1>
        <ul class="flex space-x-6">
            <li><a href="#" class="text-gray-300 hover:text-white transition">Home</a></li>
            <li><a href="about" class="text-gray-300 hover:text-white transition">About</a></li>
            <li><a href="contact" class="text-gray-300 hover:text-white transition">Contact</a></li>
        </ul>
    </nav>
    

    <section class="flex flex-col items-center justify-center h-screen text-center px-4">
        <h2 class="text-5xl font-extrabold mb-4">Welcome to Bloodstrike</h2>
        <p class="text-lg text-gray-400 max-w-xl">Experience the thrill of battle like never before. Immerse yourself in action and become the ultimate warrior.</p>
        <img src="Bloodstrike.jpg" alt="Bloodstrike Image" class="mt-8 max-w-full h-auto rounded-lg shadow-lg">
    </section>
</body>
</html>
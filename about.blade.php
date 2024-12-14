<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Tailwind CSS with Vite</title>
  @vite('resources\css\app.css')
</head>
<body class="bg-gray-100 min-h-screen">
  <nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
      <a href="/" class="text-xl font-bold text-blue-500">MyWebsite</a>
      <ul class="flex space-x-4">
        <li><a href="/" class="text-gray-600 hover:text-blue-500">Home</a></li>
        <li><a href="/about" class="text-gray-600 hover:text-blue-500">About</a></li>
        <li><a href="/" class="text-gray-600 hover:text-blue-500">Services</a></li>
        <li><a href="/" class="text-gray-600 hover:text-blue-500">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="flex items-center justify-center min-h-[calc(100vh-64px)]"> <!-- Adjust for navbar height -->
    <div class="text-center">
      <h1 class="text-4xl font-bold text-blue-500">About Us</h1>
      <p class="mt-4 text-gray-600 max-w-lg mx-auto">
        Welcome to the About page! Our website is built with Tailwind CSS and Vite to ensure a modern, fast, and responsive experience.
      </p>
      <a href="/" class="mt-6 inline-block px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Back to Home</a>
    </div>
  </div>
</body>
</html>

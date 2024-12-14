<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind CSS with Vite</title>
  @vite('resources\css\app.css')
</head>
<body class="bg-gray-100 min-h-screen">
  <nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
      <a href="#" class="text-xl font-bold text-blue-500">MyWebsite</a>
      <ul class="flex space-x-4">
        <li><a href="/" class="text-gray-600 hover:text-blue-500">Home</a></li>
        <li><a href="/" class="text-gray-600 hover:text-blue-500">About</a></li>
        <li><a href="/" class="text-gray-600 hover:text-blue-500">Services</a></li>
        <li><a href="/" class="text-gray-600 hover:text-blue-500">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="flex items-center justify-center min-h-[calc(100vh-64px)]"> <!-- Adjust for navbar height -->
    <div class="text-center">
      <h1 class="text-4xl font-bold text-blue-500">Hello, Tailwind CSS with Vite!</h1>
      <p class="mt-4 text-gray-600">This is a simple project setup.</p>
      <button class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Click Me!</button>
    </div>
  </div>
</body>
</html>
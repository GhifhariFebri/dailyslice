<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<nav class="px-2 sm:px-4 py-2.5 rounded" style="color: #7e6b4b; background-color: #D7C096">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="/" class="flex items-center">
        <img src="/images/logo.png" class="h-6 mr-3 sm:h-9"/>
        <span class="text-xl font-bold whitespace-nowrap hover:opacity-50" style="color: #7e6b4b">dailyslice</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:opacity-50" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto items-center" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-bold md:border-0">
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 hover:opacity-50" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/aboutus" class="block py-2 pl-3 pr-4 hover:opacity-50">About Us</a>
        </li>
        <li>
          <a href="/category" class="block py-2 pl-3 pr-4 hover:opacity-50">Our Cakes!</a>
        </li>
        <li>
          <a href="/question" class="block py-2 pl-3 pr-4 hover:opacity-50">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

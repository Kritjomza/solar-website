<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solar Cell Solutions</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Heroicons (ใช้แทน Font Awesome ได้ดีบน Tailwind) -->
  <script src="https://unpkg.com/feather-icons"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(-10px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fadeIn 0.5s ease-out both;
    }
  </style>
</head>

<body class="bg-white text-gray-800">
  <!-- Header -->
  <header class="bg-yellow-400 shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="index.php" class="text-2xl font-bold text-gray-900">
        ⚡ Songpol Solar
      </a>

      <!-- Desktop Menu -->
      <nav class="hidden md:block">
        <ul class="flex space-x-8 text-gray-800 font-medium">
          <li><a href="index.php" class="hover:text-white transition">หน้าแรก</a></li>
          <li><a href="about.php" class="hover:text-white transition">เกี่ยวกับเรา</a></li>
          <li><a href="services.php" class="hover:text-white transition">บริการของเรา</a></li>
          <li><a href="contact.php" class="hover:text-white transition">ติดต่อเรา</a></li>
        </ul>
      </nav>

      <!-- Mobile Menu Toggle -->
      <button id="menu-toggle" class="md:hidden focus:outline-none p-2 rounded hover:bg-yellow-300">
        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu Content -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 animate-fade-in">
      <ul class="space-y-3 text-gray-800 font-medium">
        <li><a href="index.php" class="block hover:text-white">หน้าแรก</a></li>
        <li><a href="about.php" class="block hover:text-white">เกี่ยวกับเรา</a></li>
        <li><a href="services.php" class="block hover:text-white">บริการของเรา</a></li>
        <li><a href="contact.php" class="block hover:text-white">ติดต่อเรา</a></li>
      </ul>
    </div>
  </header>

  <script>
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Feather icon fallback if you want
    feather.replace();
  </script>

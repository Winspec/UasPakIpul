<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UasPakSaipul</title>
  <link rel="shortcut icon" href="https://img.pikbest.com/png-images/qiantu/red-cartoon-hand-painted-thumb-up-button-png-free_2604619.png!w700wp" type="image/x-icon">
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
   <script defersrc="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
</head>
<body>

<div class="min-h-full">
 <x-navbar></x-navbar>

 <x-header>{{ $data }}</x-header>

<main>
    {{ $slot }}
</main>
</div>
</body>
</html>

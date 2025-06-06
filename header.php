<!-- <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body class="bg-gray-100 text-gray-800 font-sans p-6">
<div class="max-w-3xl mx-auto"> -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
<nav class="bg-white shadow fixed top-0 left-0 w-full z-50">
  <!-- <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center"> -->
  <div class="w-full px-8 py-4 flex justify-between items-center">
    <a href="<?php echo home_url(); ?>" class="text-2xl font-bold text-green-700">Weyra Book Library</a>
    <ul class="flex space-x-6">
      <li><a href="/books" class="text-gray-700 hover:text-green-700 font-medium">Books</a></li>
      <li><a href="/about" class="text-gray-700 hover:text-green-700 font-medium">About</a></li>
      <li><a href="/contact" class="text-gray-700 hover:text-green-700 font-medium">Contact</a></li>
    </ul>
  </div>
</nav>
<div class="pt-24 px-8 max-w-7xl mx-auto">

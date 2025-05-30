<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background: #f9fafb;
      color: #111827;
      line-height: 1.6;
      padding: 2rem;
    }
    a {
      color: #3b82f6;
      text-decoration: none;
    }
    .book-card {
      background: #fff;
      border-radius: 0.75rem;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      transition: 0.3s ease;
    }
    .book-card:hover {
      box-shadow: 0 6px 14px rgba(0,0,0,0.1);
    }
    .book-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }
    .book-meta {
      font-size: 0.9rem;
      color: #6b7280;
      margin-bottom: 1rem;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
<div class="container">


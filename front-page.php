<?php get_header(); ?>

<div class="w-full py-8 grid grid-cols-1 lg:grid-cols-4 gap-6">
  
  <!-- Left Sidebar: Discover More Books -->
  <aside class="lg:col-span-1 px-4">
    <div class="bg-white shadow rounded-lg p-4">
      <h2 class="text-xl font-semibold mb-4 text-gray-800">Discover More Books</h2>
      <?php
      $discover_query = new WP_Query([
        'post_type' => 'book',
        'posts_per_page' => 3,
        'orderby' => 'rand'
      ]);
      while ($discover_query->have_posts()) : $discover_query->the_post(); ?>
        <div class="mb-4">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="w-16 h-24 object-cover rounded float-left mr-3" alt="<?php the_title(); ?>">
          <?php endif; ?>
          <h3 class="text-sm font-medium text-gray-700"><?php the_title(); ?></h3>
          <p class="text-xs text-gray-500"><?php the_field('author'); ?></p>
          <a href="<?php the_permalink(); ?>" class="text-blue-500 text-xs hover:underline">View Details</a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
      <a href="<?php echo get_post_type_archive_link('book'); ?>" class="block text-center text-blue-500 font-semibold hover:underline mt-4">Browse More Books</a>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="lg:col-span-2 px-4">
    <h1 class="text-4xl font-bold mb-4">Welcome to Weyra Book Club</h1>
    <p class="text-gray-600 mb-8">Discover, rate, and review books from your favorite genres.</p>
    <h2 class="text-2xl font-semibold mb-4">Latest Books</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $query = new WP_Query(['post_type' => 'book', 'posts_per_page' => 6]);
      while ($query->have_posts()) : $query->the_post(); ?>
        <div class="bg-white shadow p-4 rounded">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="w-full h-64 object-cover rounded mb-3" alt="<?php the_title(); ?>">
          <?php endif; ?>
          <h3 class="text-lg font-semibold"><?php the_title(); ?></h3>
          <p class="text-sm text-gray-500"><?php the_field('author'); ?></p>
          <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline mt-2 inline-block">View Book →</a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="mt-8 text-center">
      <a href="<?php echo get_post_type_archive_link('book'); ?>" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white font-semibold text-lg py-3 px-6 rounded-lg shadow-md hover:from-green-600 hover:to-green-800 transition duration-300 ease-in-out transform hover:-translate-y-1">See All Books</a>
    </div>
  </main>

  <!-- Right Sidebar: Advertisement -->
  <aside class="lg:col-span-1 px-4">
    <div class="bg-white shadow rounded-lg p-4">
      <h2 class="text-xl font-semibold mb-4 text-gray-800">Sponsored</h2>
      <a href="https://example.com/book-promo" target="_blank" class="block">
        <img src="https://via.placeholder.com/300x250?text=Book+Ad" class="w-full h-auto rounded mb-3" alt="Book Advertisement">
        <h3 class="text-lg font-semibold text-gray-700">Discover a New Bestseller</h3>
        <p class="text-sm text-gray-500">Check out the latest must-read book!</p>
        <span class="text-blue-500 text-sm hover:underline">Learn More</span>
      </a>
    </div>
  </aside>
</div>

<?php get_footer(); ?>
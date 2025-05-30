<?php get_header(); ?>
<h1 class="text-4xl font-bold mb-4">Welcome to Weyra 📚</h1>
<p class="text-gray-600 mb-8">Discover, rate, and review books from your favorite genres.</p>
<h2 class="text-2xl font-semibold mb-4">Latest Books</h2>
<div class="grid md:grid-cols-2 gap-6">
<?php
$query = new WP_Query(['post_type' => 'book', 'posts_per_page' => 4]);
while ($query->have_posts()) : $query->the_post(); ?>
  <div class="bg-white shadow p-4 rounded">
    <h3 class="text-lg font-semibold"><?php the_title(); ?></h3>
    <p class="text-sm text-gray-500"><?php the_field('author'); ?></p>
    <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline mt-2 inline-block">View Book →</a>
  </div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>

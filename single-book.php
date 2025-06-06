 <?php get_header(); ?>

<div class="bg-white shadow rounded-2xl overflow-hidden p-10 max-w-4xl mx-auto">
  <?php if (has_post_thumbnail()) : ?>
    <div class="flex justify-center mb-8">
      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="rounded-lg shadow-lg w-full max-w-xs">
    </div>
  <?php endif; ?>

  <h1 class="text-4xl font-bold text-gray-900 text-center mb-4"><?php the_title(); ?></h1>
  <p class="text-center text-md text-gray-600 mb-6">
    By <span class="font-medium"><?php the_field('author'); ?></span> • Published on <?php echo get_the_date(); ?>
  </p>

  <div class="text-center text-yellow-500 text-xl mb-6">
    <?php
    $rating = floatval(get_field('rating'));
    echo $rating ? str_repeat('★', floor($rating)) . str_repeat('☆', 5 - floor($rating)) : '<span class="text-sm text-gray-400">No rating yet</span>';
    ?>
  </div>

  <div class="prose max-w-none text-gray-800">
    <?php the_content(); ?>
  </div>

  <div class="mt-8">
    <a href="/books" class="text-green-700 hover:underline text-sm">← Back to all books</a>
  </div>
</div>

<?php get_footer(); ?>


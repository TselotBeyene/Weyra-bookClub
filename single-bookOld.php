<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-4 py-10">
  <div class="bg-white shadow-xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
    
    <!-- Book Cover -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="md:col-span-1 flex justify-center">
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="rounded-lg shadow-lg w-full max-w-xs">
      </div>
    <?php endif; ?>

    <!-- Book Info -->
    <div class="md:col-span-2 space-y-4">
      <h1 class="text-3xl font-bold text-gray-900"><?php the_title(); ?></h1>

      <p class="text-sm text-gray-600">
        By <span class="font-medium"><?php the_field('author'); ?></span> • Published on <?php echo get_the_date(); ?>
      </p>

      <!-- Star Rating -->
      <?php
        $rating = floatval(get_field('rating'));
        if ($rating > 0) {
          echo '<p class="text-yellow-500 text-xl">' .
            str_repeat('★', floor($rating)) .
            str_repeat('☆', 5 - floor($rating)) .
          '</p>';
        } else {
          echo '<p class="text-sm text-gray-400">No rating yet</p>';
        }
      ?>

      <!-- Description -->
      <div class="prose max-w-none">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <div class="mt-8">
    <a href="/books" class="inline-block text-blue-600 hover:underline text-sm">← Back to books</a>
  </div>
</div>

<?php get_footer(); ?>


<?php get_header(); ?>

<div class="px-10 py-10">
  <div class="bg-white shadow rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-3 gap-10 p-10">

    <!-- Book Cover -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="flex justify-center md:justify-start">
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="rounded-lg shadow-lg w-full max-w-xs">
      </div>
    <?php endif; ?>

    <!-- Book Info -->
    <div class="md:col-span-2 space-y-4">
      <h1 class="text-4xl font-bold text-gray-900"><?php the_title(); ?></h1>

      <p class="text-md text-gray-600">
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

      <!-- Book Content -->
      <div class="prose max-w-none text-gray-800">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <div class="mt-8">
    <a href="/books" class="text-green-700 hover:underline text-sm">← Back to all books</a>
  </div>
</div>

<?php get_footer(); ?>


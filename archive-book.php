<?php get_header(); ?>
<h1 class="text-4xl font-bold mb-8">📚 Weyra Book Library</h1>
<form method="GET" class="mb-6">
  <label for="genre" class="block text-sm font-medium text-gray-700 mb-1">Filter by Genre</label>
  <select name="genre" id="genre" onchange="this.form.submit()" class="w-full p-2 border rounded">
    <option value="">All Genres</option>
    <?php
    $terms = get_terms('genre');
    foreach ($terms as $term) {
      $selected = (isset($_GET['genre']) && $_GET['genre'] === $term->slug) ? 'selected' : '';
      echo "<option value='{$term->slug}' {$selected}>{$term->name}</option>";
    }
    ?>
  </select>
</form>
<?php
if (isset($_GET['genre']) && $_GET['genre'] !== '') {
  $genre = sanitize_text_field($_GET['genre']);
  query_posts([
    'post_type' => 'book',
    'tax_query' => [[
      'taxonomy' => 'genre',
      'field' => 'slug',
      'terms' => $genre,
    ]]
  ]);
}
?>
<div class="grid md:grid-cols-2 gap-6">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="bg-white rounded-xl shadow p-6 flex gap-4 items-start">
    <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('medium'); ?>" class="w-28 h-auto rounded" alt="<?php the_title(); ?>">
    <?php endif; ?>
    <div>
      <h2 class="text-xl font-semibold mb-1"><?php the_title(); ?></h2>
      <p class="text-sm text-gray-500 mb-1"><?php the_field('author'); ?> • <?php echo get_the_date(); ?></p>
      <p class="text-yellow-500 text-md">
        <?php
$rating = floatval(get_field('rating'));
if ($rating > 0) {
  echo str_repeat('★', floor($rating)) . str_repeat('☆', 5 - floor($rating));
} else {
  echo '<span class="text-sm text-gray-400">No rating yet</span>';
}
        ?>
      </p>
      <a href="<?php the_permalink(); ?>" class="inline-block mt-2 text-blue-600 hover:underline">Read more →</a>
    </div>
  </div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>

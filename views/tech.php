<?php

$posts = [
  [
    'title' => 'How AI Is Changing Everyday Software',
    'date' => 'September 18, 2026',
    'author' => 'Alex Morgan',
    'body' => 'Smaller AI models are bringing useful writing, search, and accessibility tools directly into the apps people already use.',
  ],
  [
    'title' => 'The Web Platform Keeps Getting Faster',
    'date' => 'September 24, 2026',
    'author' => 'Jamie Lee',
    'body' => 'Modern browsers continue to improve performance and built-in capabilities, helping developers create responsive experiences with less code.',
  ],
];
?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>
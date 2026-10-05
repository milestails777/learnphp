<?php

$posts = [
  [
    'title' => 'How AI Is Changing Everyday Software',
    'date' => 'September 18, 2026',
    'author' => 'Miles Cibis',
    'body' => 'Smaller AI models are bringing useful writing, search, and accessibility tools directly into the apps people already use.',
  ],
  [
    'title' => 'PS5 is losing, Xbox revives themselves, and Nintendo is just nintendo',
    'date' => 'September 24, 2026',
    'author' => 'Aleksander Kartuzov',
    'body' => 'The gaming industry is falling down',
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
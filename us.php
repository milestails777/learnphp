<?php

//if(isset($title)) {
//  echo $title;
//} else {
//  echo 'Default Title';
//}

//echo isset($title) ? $title : 'Default title';
//echo $title ?? 'Default title';

$posts = [
  [
    'title' => 'Some World title 1',
    'date' => 'January 1, 2021',
    'author' => 'Pets',
    'body' => 'Some World body 1',
  ],
  [
    'title' => 'Some World title 1',
    'date' => 'January 1, 2023',
    'author' => 'Sega',
    'body' => 'Some World body 2',
  ],
  [
    'title' => 'Some World title 1',
    'date' => 'January 1, 2024',
    'author' => 'Mario',
    'body' => 'Some World body 3',
  ],
  [
    'title' => 'Some World title 1',
    'date' => 'January 1, 2025',
    'author' => 'Verity',
    'body' => 'Some World body 4',
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
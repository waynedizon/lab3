<link rel="stylesheet" type="text/css" href="https://psychic-space-guacamole-66p49wxpwwrh7qj-8080.app.github.dev/lab3/ci4/public/css/style.css">
<body>
  <header class="header">
    <a href="#" class="logo">SaiDa</a>
    <nav class="navbar">
      <a href="https://psychic-space-guacamole-66p49wxpwwrh7qj-8080.app.github.dev/lab3/ci4/public/home" class="font-effect-neon">Home</a>
      <a href="https://psychic-space-guacamole-66p49wxpwwrh7qj-8080.app.github.dev/lab3/ci4/public/mystory" class="font-effect-neon">My Story</a>
      <a href="https://psychic-space-guacamole-66p49wxpwwrh7qj-8080.app.github.dev/lab3/ci4/public/guests" class="font-effect-neon">Guests</a>
      <a href="https://psychic-space-guacamole-66p49wxpwwrh7qj-8080.app.github.dev/lab3/ci4/public/portfolio" class="font-effect-neon">Portfolio</a>
    </nav>
  </header>
  <h2 class="Subtitle">Guest Lists</h2>
  <div class="section-box">
    <?php if (! empty($guests) && is_array($guests)): ?>
    <?php foreach ($guests as $guests_item): ?>

    <h3><?= esc($guests_item['name']) ?></h3>
    <div class="main">
    <?= esc($guests_item['email']) ?>
    <br>
    <?= esc($guests_item['comment']) ?>
    </div>
    <p><a href="./guests/<?= esc($guests_item['email'], 'url') ?>">View Guest detail</a></p>
    <?php endforeach ?>
    <?php else: ?>
    <h3>No Guests</h3>
    <p>Unable to find any guest for you.</p>
    <?php endif ?>
  </div>


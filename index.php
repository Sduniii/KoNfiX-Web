<?php
// Session & Language Handling
$supported_langs = ['de', 'en'];
$lang = 'de';

if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs, true)) {
    $lang = $_GET['lang'];
    setcookie('konfix_lang', $lang, time() + (86400 * 30), '/');
} elseif (isset($_COOKIE['konfix_lang']) && in_array($_COOKIE['konfix_lang'], $supported_langs, true)) {
    $lang = $_COOKIE['konfix_lang'];
} elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']), 'en') === 0) {
    $lang = 'en';
}

require_once __DIR__ . '/data/translations.php';
require_once __DIR__ . '/data/devices.php';

$t = $translations[$lang];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>" class="scroll-smooth bg-slate-950 text-slate-100 antialiased selection:bg-emerald-500 selection:text-slate-950">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($t['meta']['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($t['meta']['description']) ?>">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">

  <!-- Open Graph / Social Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($t['meta']['title']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($t['meta']['description']) ?>">
  <meta property="og:image" content="assets/images/hero_canvas.png">
  <meta name="theme-color" content="#090d16">

  <!-- Inter & JetBrains Mono Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Standalone Tailwind & Custom CSS (Zero build step needed) -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="top" class="min-h-screen bg-slate-950 text-slate-100 font-sans flex flex-col justify-between">
<?php
  require_once __DIR__ . '/includes/header.php';
  require_once __DIR__ . '/includes/hero.php';
  require_once __DIR__ . '/includes/ecosystem.php';
  require_once __DIR__ . '/includes/demos.php';
  require_once __DIR__ . '/includes/comparison.php';
  require_once __DIR__ . '/includes/quickstart.php';
  require_once __DIR__ . '/includes/api.php';
  require_once __DIR__ . '/includes/footer.php';
?>
  <!-- Vanilla Interactive Script (Zero dependencies) -->
  <script src="assets/js/main.js"></script>
</body>
</html>

<?php require_once __DIR__ . '/partials/header.php'; ?>
  <div class="mc-header">
    <div>Singleplayer</div>
    <a class="mc-btn" href="index.php">Back to Title</a>
  </div>

  <div class="mc-card">
    <p class="mc-small">This page wraps your CRUD app with the Minecraft UI.</p>
    <p class="mc-small">
      By default, it tries to include <strong>crud.php</strong>. 
      You can change the target by adding <code>?file=YourFile.php</code> to the URL.
    </p>
  </div>

  <hr class="pixel" />

  <div class="mc-card" style="margin-top:16px;">
<?php
  // Determine which file to include for the CRUD app
  $target = isset($_GET['file']) ? basename($_GET['file']) : 'crud.php';
  $path = __DIR__ . DIRECTORY_SEPARATOR . $target;

  if (is_file($path)) {
    // Isolate the included app in its own scope
    include $path;
  } else {
    echo '<p class="mc-small">Could not find <strong>' . htmlspecialchars($target) . '</strong> in this folder.</p>';
    echo '<p class="mc-small">Place your existing CRUD file here and name it <strong>crud.php</strong>, or open <code>play.php?file=YOURFILE.php</code>.</p>';
  }
?>
  </div>
<?php require_once __DIR__ . '/partials/footer.php'; ?>

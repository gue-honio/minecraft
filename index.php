<?php require_once __DIR__ . '/partials/header.php'; ?>
  <div class="mc-title">
    <h1>MINECRAFT</h1>
    <div class="subtitle">Dreamybull</div>
  </div>

  <div class="mc-buttons">
    <a class="mc-btn" href="crud.php">Play</a>
    <a class="mc-btn" href="achievements.php">Achievements</a>
    <div class="mc-row">
      <a class="mc-btn" style="flex:1" href="marketplace.php">Minecraft Gallery</a>
      <a class="mc-btn" style="flex:1" href="options.php">Options</a>
    </div>
    <a class="mc-btn" href="quit.php">Quit Game</a>
  </div>

  <script>
    const quitBtn = document.getElementById('quitBtn');
    quitBtn?.addEventListener('click', () => {
      // Show a goodbye overlay-style message
      const wrap = document.createElement('div');
      wrap.className = 'mc-card center';
      wrap.style.position = 'fixed';
      wrap.style.left = '50%';
      wrap.style.top = '20%';
      wrap.style.transform = 'translateX(-50%)';
      wrap.style.zIndex = '9999';
      wrap.style.maxWidth = '520px';

      wrap.innerHTML = `
        <h3 style="margin:0 0 8px 0;">Goodbye!</h3>
        <p class="mc-small">Thanks for playing. You can close this tab now.</p>
        <hr class="pixel" />
      `;

      document.body.appendChild(wrap);
      document.getElementById('closeNow').addEventListener('click', () => {
        // Attempt to close; may be blocked by browser if not opened via script
        window.close();
      });
    });
  </script>
<?php require_once __DIR__ . '/partials/footer.php'; ?>

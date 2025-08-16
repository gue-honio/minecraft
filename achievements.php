<?php require_once __DIR__ . '/partials/header.php'; ?>
<div class="mc-header">
  <div>Achievments</div>
  <a class="mc-btn" href="index.php">Back</a>
</div>

<div class="mc-gallery">
  <!-- Example items (replace with your own images) -->
  <div class="mc-item">
    <div class="mc-img-box">
      <img src="like.jpg" alt="Item 1">
    </div>
    <p>First Step</p>
    <p>Created your first CRUD app!</p>
  </div>

  <div class="mc-item">
    <div class="mc-img-box">
      <img src="visited.jpg" alt="Item 2">
    </div>
    <p>Visitor</p>
    <p>Visited the <a href="marketplace.php">Minecraft Gallery.</a></p>
  </div>

  <div class="mc-item">
    <div class="mc-img-box">
      <img src="update.png" alt="Item 3">
    </div>
    <p>Enchanter</p>
    <p>Updated a person.</p>
  </div>

  <div class="mc-item">
    <div class="mc-img-box">
      <img src="hac.jpg" alt="Item 4">
    </div>
    <p>Hacs</p>
    <p>Succesfully hacked the comlab system.</p>
  </div>
</div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>

<style>
  .mc-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
    padding: 30px;
  }

  .mc-item {
    background: #2b2b2b;
    border: 3px solid #000;
    border-radius: 8px;
    text-align: center;
    padding: 10px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  /* Make all image boxes equal size */
  .mc-img-box {
    width: 100%;
    height: 200px; /* fixed height for all images */
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #1a1a1a;
    border: 2px solid #555;
    border-radius: 4px;
  }

  .mc-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* makes all images fit nicely */
  }

  .mc-item p {
    margin-top: 8px;
    font-family: "Press Start 2P", cursive; /* Minecraft-like font */
    font-size: 12px;
    color: #fff176; /* Yellow text */
  }

  .mc-item:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px #fff176;
  }
</style>

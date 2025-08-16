<?php require_once __DIR__ . '/partials/header.php'; ?>
<div class="mc-header">
  <div>Minecraft Gallery</div>
  <a class="mc-btn" href="index.php">Back</a>
</div>

<div class="mc-gallery">
  <!-- Example items (replace with your own images) -->
  <div class="mc-item">
    <div class="mc-img-box">
      <img src="dreamy.jpg" alt="Item 1">
    </div>
    <p>Dreamybull</p>
  </div>

  <div class="mc-item">
    <div class="mc-img-box">
      <img src="kangku.jpg" alt="Item 2">
    </div>
    <p>Kakangku</p>
  </div>

  <div class="mc-item">
    <div class="mc-img-box">
      <img src="bunda.png" alt="Item 3">
    </div>
    <p>Bundarama</p>
  </div>

  <div class="mc-item">
    <div class="mc-img-box">
      <img src="nissan.jpg" alt="Item 4">
    </div>
    <p>Nissan</p>
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

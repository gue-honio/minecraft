<?php require_once __DIR__ . '/partials/header.php'; ?>
<div class="mc-header">
  <div>Options</div>
  <a class="mc-btn" href="index.php">Back</a>
</div>

<div class="mc-options">
  <div class="mc-option">
    <label>Theme:</label>
    <select>
      <option>Dirt</option>
      <option>Stone</option>
      <option>Wood</option>
      <option>Grass</option>
    </select>
  </div>

  <div class="mc-option">
    <label>Music:</label>
    <input type="checkbox" checked> Enable
  </div>

  <div class="mc-option">
    <label>Volume:</label>
    <input type="range" min="0" max="100" value="70">
  </div>

  <div class="mc-option">
    <label>Profile Name:</label>
    <input type="text" placeholder="Enter your name">
  </div>

  <div class="mc-option">
    <label>Language:</label>
    <select>
      <option>English</option>
      <option>Tagalog</option>
    </select>
  </div>
</div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>

<style>
  .mc-options {
    padding: 30px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .mc-option {
    background: #2b2b2b;
    border: 3px solid #000;
    padding: 15px;
    border-radius: 8px;
    color: #fff176;
    font-family: "Press Start 2P", cursive;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .mc-option input,
  .mc-option select {
    font-family: "Press Start 2P", cursive;
    padding: 5px;
    border: 2px solid #000;
    border-radius: 4px;
  }
</style>

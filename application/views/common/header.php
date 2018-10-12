<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white unicorn-navigation">
  <button class="navbar-toggler borderless" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      <?php foreach ($categories as $category) { ?>
        <li class="nav-item active">
          <a class="nav-link" href="#"><?= $category['name'] ?>
            <span class="sr-only">(current)</span>
            <?php if ($category['name'] == 'Korpa') { echo '(<span id="bag-items-count">0</span>)';} ?>
          </a>
        </li>
      <?php } ?>  
    </ul>
  </div>
</nav>
</div>
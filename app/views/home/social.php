<!-- Start: Social Network -->
<section class="social-network section-padding ">
  <div class="container">
    <div class="center-content">
      <h2 class="section-title">Follow Us</h2>
      <span class="underline center"></span>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <ul>
      <?php foreach ($data['socials'] as $social) : ?>
        <li>
          <a class="<?= $social['a_class']; ?>" href="<?= $social['url']; ?>" target="_blank">
            <span>
              <i class="<?= $social['icon_class']; ?>"></i>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<!-- End: Social Network -->
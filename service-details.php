<?php
require __DIR__ . '/services-data.php';
$serviceSlug = $serviceSlug ?? 'corporate-advisory';
$svc = $serviceDetails[$serviceSlug] ?? reset($serviceDetails);
$pageTitle = $svc['title'] . ' in Dubai — Bluesky Advisors';
$pageDescription = $svc['meta'];
include 'head.php';
?>
<?php include 'header.php'; ?>
<?php $contact = 1; ?>
    <!-- Main -->
    <main>
      <!-- Page Banner -->
      <div class="page-banner overlay" style="height: 80px;">
        <picture class="media media-bg">
          <source
            media="(max-width: 575px)"
            srcset="assets/img/banner/page-banner-575.jpg"
          >
          <source
            media="(max-width: 991px)"
            srcset="assets/img/banner/page-banner-991.jpg"
          >
          <img
            src="assets/img/banner/page-banner.jpg"
            width="1920"
            height="80"
            loading="eager"
            alt="Bluesky Advisors — Dubai"
          >
        </picture>
      </div>
      <!-- Service Details -->
      <div class="page-service-details mt-100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="service-details-content">
                <div class="row align-items-start service-intro">
                  <div class="col-12 col-lg-6" data-aos="fade-up">
                    <h1 class="heading text-50"><?php echo $svc['title']; ?></h1>
                    <p class="text text-18"><?php echo $svc['lead']; ?></p>
                    <p class="text text-18"><?php echo $svc['body']; ?></p>
                    <a href="contact.php" class="button button--primary" aria-label="Get in touch">
                      Get in touch
                      <span class="svg-wrapper">
                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
                      </span>
                    </a>
                  </div>
                  <div class="col-12 col-lg-6" data-aos="fade-up">
                    <div class="details-media radius18">
                      <?php $heroImg = file_exists(__DIR__ . "/assets/img/service/$serviceSlug.jpg") ? "assets/img/service/$serviceSlug.jpg" : "assets/img/service/s1.jpg"; ?>
                      <img
                        src="<?php echo $heroImg; ?>"
                        width="1000"
                        height="596"
                        loading="eager"
                        alt="<?php echo $svc['imageAlt'] ?? $svc['title']; ?>"
                      >
                    </div>
                  </div>
                </div>

                <h3 class="heading text-36" data-aos="fade-up">What we cover</h3>
                <div class="row scope-grid">
                  <?php foreach ($svc['fields'] as $f): ?>
                  <div class="col-12 col-md-6" data-aos="fade-up">
                    <div class="scope-tile">
                      <span class="scope-tile-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z" fill="currentColor"/></svg>
                      </span>
                      <span class="text text-18 fw-500"><?php echo $f; ?></span>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="Bluesky Advisors advisors at work in Dubai"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose Us</h2>
                        <p class="text text-18">
                          Businesses choose Bluesky Advisors for senior,
                          hands-on guidance and advice they can act on.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <?php foreach ($serviceWhyChoose as $w): ?>
                          <li class="text-item" data-aos="fade-up">
                            <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z" fill="CurrentColor"/></svg>
                            <div class="text text-18 fw-600"><?php echo $w; ?></div>
                          </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Every business is different. Tell us where you want to take
                  yours, and we will tailor our support to fit — get in touch to
                  start the conversation.
                </p>

                <faq-accordion class="service-faq">
                  <?php foreach ($serviceFaqs as $faq): ?>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      <?php echo $faq['q']; ?>
                      <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z" fill="CurrentColor"/></svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        <?php echo $faq['a']; ?>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </faq-accordion>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": <?php echo json_encode($svc['title']); ?>,
        "serviceType": <?php echo json_encode($svc['title']); ?>,
        "provider": {
          "@type": "ProfessionalService",
          "name": "Bluesky Advisors DMCC",
          "url": "https://bluesky-advisors.com"
        },
        "areaServed": { "@type": "Country", "name": "United Arab Emirates" },
        "description": <?php echo json_encode($svc['meta']); ?>
      }
      </script>
    </main>
<?php include 'footer.php'; ?>
<?php include 'foot.php'; ?>
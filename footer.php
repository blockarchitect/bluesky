    <!-- Footer -->
    <footer class="mt-100">

<?php if($contact) : ?>
      <!-- Footer Contact Form -->
      <div
        class="footer-contact"
        style="background: #ffffff"
      >
        <div class="container">
          <div class="contact-box radius18">
            <div class="row">
              <div class="col-12 col-lg-6">
                <div
                  class="contact-media"
                  data-aos="fade-right"
                  data-aos-anchor=".contact-box"
                >
                  <img
                    src="assets/img/contact/contact.jpg"
                    alt="contact image"
                    width="1290"
                    height="1400"
                    loading="lazy"
                  >
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="contact-form-wrap">
                  <div class="contact-box-headings section-headings">
                    <div
                      class="subheading text-20 subheading-bg"
                      data-aos="fade-up"
                      data-aos-anchor=".contact-box"
                    >
                      <svg
                        class="icon icon-14"
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 14 14"
                        fill="none"
                      >
                        <g clip-path="url(#clip0_9088_4143)">
                          <path
                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="14" height="14" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                      <span>Contact Us</span>
                      <svg
                        class="icon icon-14"
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 14 14"
                        fill="none"
                      >
                        <g clip-path="url(#clip0_9088_4143)">
                          <path
                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="14" height="14" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <h2
                      class="heading text-50"
                      data-aos="fade-up"
                      data-aos-delay="50"
                      data-aos-anchor=".contact-box"
                    >
                      Get free business consultation today
                    </h2>
                    <p
                      class="text text-18"
                      data-aos="fade-up"
                      data-aos-delay="80"
                      data-aos-anchor=".contact-box"
                    >
                      Need help with a project, have a question about our work?
                      have a question about our work? We're here to help you.
                    </p>
                  </div>
                  <form
                    id="footer-contact-form"
                    action="https://api.web3forms.com/submit"
                    method="POST"
                    class="form contact-form"
                  >
                    <input type="hidden" name="access_key" value="<?php echo $web3formsKey; ?>">
                    <input type="hidden" name="subject" value="Consultation request from bluesky-advisors.com">
                    <input type="hidden" name="from_name" value="Bluesky Advisors Website">
                    <input type="checkbox" name="botcheck" style="display:none" tabindex="-1" autocomplete="off">
                    <div
                      class="field w-half"
                      data-aos="fade-right"
                      data-aos-anchor=".contact-form-wrap"
                    >
                      <label for="ContactForm-name" class="visually-hidden">
                        Your Name
                      </label>
                      <input
                        id="ContactForm-name"
                        class="text text-16"
                        type="text"
                        placeholder="Your Name*"
                        name="name"
                        required
                      >
                    </div>
                    <div
                      class="field w-half"
                      data-aos="fade-left"
                      data-aos-anchor=".contact-form-wrap"
                    >
                      <label for="ContactForm-email" class="visually-hidden">
                        Your Email
                      </label>
                      <input
                        id="ContactForm-email"
                        class="text text-16"
                        type="email"
                        placeholder="Your Email*"
                        name="email"
                        required
                      >
                    </div>
                    <div
                      class="field"
                      data-aos="fade-up"
                      data-aos-anchor=".contact-form-wrap"
                    >
                      <label for="ContactForm-body" class="visually-hidden">
                        Write your message
                      </label>
                      <textarea
                        id="ContactForm-body"
                        class="text text-16"
                        rows="4"
                        placeholder="Write your message*"
                        name="message"
                        required
                      ></textarea>
                    </div>
                    <div
                      class="form-button"
                      data-aos="fade-up"
                      data-aos-anchor=".contact-form-wrap"
                    >
                      <button
                        type="submit"
                        class="button button--primary"
                        aria-label="Request Free Consultation"
                      >
                        Request Free Consultation
                        <span class="svg-wrapper">
                          <svg
                            class="icon-20"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                              fill="currentColor"
                            ></path>
                          </svg>
                        </span>
                      </button>
                    </div>
                  </form>
                  <div
                    id="footer-contact-result"
                    class="text text-16"
                    style="margin-top: 16px"
                    role="status"
                    aria-live="polite"
                  ></div>
                  <script>
                    (function () {
                      var form = document.getElementById("footer-contact-form");
                      var result = document.getElementById("footer-contact-result");
                      if (!form || !result) return;
                      form.addEventListener("submit", function (e) {
                        e.preventDefault();
                        result.textContent = "Sending…";
                        fetch(form.action, {
                          method: "POST",
                          headers: { Accept: "application/json" },
                          body: new FormData(form),
                        })
                          .then(function (r) {
                            return r.json().then(function (j) {
                              return { ok: r.ok, data: j };
                            });
                          })
                          .then(function (res) {
                            if (res.ok && res.data.success) {
                              result.textContent =
                                "Thanks — your request has been sent. We'll be in touch shortly.";
                              form.reset();
                            } else {
                              result.textContent =
                                (res.data && res.data.message) ||
                                "Something went wrong. Please email contact@bluesky-advisors.com.";
                            }
                          })
                          .catch(function () {
                            result.textContent =
                              "Network error. Please email contact@bluesky-advisors.com.";
                          });
                      });
                    })();
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!-- Footer Main -->
      <div
        class="footer-main bg-cover"
        style="background-image: url(assets/img/footer/footer-bg-large.jpg)"
      >
        <div class="footer-top">
          <div class="container">
            <div class="row footer-custom-row">
              <div class="col-12 col-md-6">
                <div
                  class="footer-widget footer-widget-brand"
                  data-aos="fade-up"
                  data-aos-anchor=".footer-top"
                >
                  <a class="footer-logo" href="index.php" aria-label="Bluesky Advisors">
                    <img
                      src="assets/img/logo-white.png"
                      alt="Bluesky Logo"
                      width="189"
                      height="32"
                      loading="lazy"
                    >
                  </a>
                  <p class="text text-16">
                    <b>Bluesky Advisors DMCC</b><br>
                    Unit No: BA1078, DMCC Business Center<br>
                    Jumeirah Lakes Tower,<br>
                    Dubai - UAE 
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div
                  class="footer-widget footer-widget-menu"
                  data-aos="fade-up"
                  data-aos-anchor=".footer-top"
                >
                  <div class="widget-heading heading text-22">Quick Link</div>
                  <ul class="footer-menu list-unstyled">
                    <li>
                      <a href="about.php" class="text text-16 link" aria-label="About Us"> About </a>
                    </li>
                    <li>
                      <a href="services.php" class="text text-16 link" aria-label="Our Services"> Services </a>
                    </li>
                    <li>
                      <a href="contact.php" class="text text-16 link" aria-label="Contact Us"> Contact </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
                  <div class="widget-heading heading text-22">Services</div>
                  <ul class="footer-menu list-unstyled">
                    <li>
                      <a href="corporate-advisory.php" class="text text-16 link" aria-label="Corporate Advisory">
                        Corporate Advisory
                      </a>
                    </li>
                    <li>
                      <a href="transaction-advisory.php" class="text text-16 link" aria-label="Transaction Advisory">
                        Transaction Advisory
                      </a>
                    </li>
                    <li>
                      <a href="real-estate-advisory.php" class="text text-16 link" aria-label="Real Estate Advisory">
                        Real Estate Advisory
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
                  <div class="widget-heading heading text-22">&nbsp;</div>
                  <ul class="footer-menu list-unstyled">
                    <li>
                      <a href="growth-advisory.php" class="text text-16 link" aria-label="Growth Advisory" >
                        Growth Advisory
                      </a>
                    </li>
                    <li>
                      <a href="it-advisory.php" class="text text-16 link" aria-label="IT Advisory">
                        IT Advisory
                      </a>
                    </li>
                    <li>
                      <a href="hr-advisory.php" class="text text-16 link" aria-label="HR Advisory">
                        HR Advisory
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom" style="background: transparent;">
          <div class="container">
            <div class="row footer-bottom-row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="footer-copyright text text-16">
                  Copyright ©<span class="current-year"></span> Bluesky Advisors DMCC
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <ul class="footer-menu footer-policies list-unstyled">
                  <li>
                    <a href="terms.php" class="text text-16 link" aria-label="Terms and Conditions"> Terms &amp; Conditions </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
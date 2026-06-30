<?php
$pageTitle = "Contact Bluesky Advisors — Dubai";
$pageDescription = "Get in touch with Bluesky Advisors DMCC in Dubai. Email contact@bluesky-advisors.com to discuss corporate and financial advisory for your business.";
// Web3Forms access key (public, safe to commit). Create a free key tied to
// contact@bluesky-advisors.com at https://web3forms.com and paste it here.
$web3formsKey = "YOUR_WEB3FORMS_ACCESS_KEY";
include 'head.php';
?>
<?php include 'header.php'; ?>
<?php $contact = 0; ?>
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
            alt="Page Banner Image"
          >
        </picture>
      </div>

      <!-- Contact Form -->
      <div class="section-contact-form contact-2 section-padding">
        <div class="container">
            <div class="section-headings text-center">
                <div
                class="subheading text-20 subheading-bg"
                data-aos="fade-up"
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
                <h2 class="heading text-50" data-aos="fade-up">
                Let's Build an Awesome Project Together
                </h2>
            </div>
          <div class="contact-box radius18">
            <div class="row product-grid justify-content-between">
              <div class="col-12 col-lg-6 col-contact-content">
                <div class="contact-info-list">
                  <div class="card-icon-text card-icon-text-horizontal" data-aos="fade-up">
                    <div class="svg-wrapper">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z"/></svg>
                    </div>
                    <div class="content">
                      <h2 class="heading text-16 fw-500">
                        Email Us
                      </h2>
                      <a 
                        href="mailto:contact@bluesky-advisors.com" 
                        class="text text-20"
                        aria-label="Email us"
                      >
                        contact@bluesky-advisors.com
                      </a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-12 col-lg-6 col-contact-form">
                <div class="contact-form-wrap radius18">
                  <div class="contact-form-headings">
                    <h2 class="heading text-32" data-aos="fade-up">
                      Make an Appointment
                    </h2>
                    <p class="text text-16" data-aos="fade-up">
                      Feel free to contact with us, we don't spam your email
                    </p>
                  </div>
                  <form
                    id="contact-form"
                    action="https://api.web3forms.com/submit"
                    method="POST"
                    class="form contact-form"
                    data-aos="fade-up"
                  >
                    <input type="hidden" name="access_key" value="<?php echo $web3formsKey; ?>">
                    <input type="hidden" name="subject" value="New enquiry from bluesky-advisors.com">
                    <input type="hidden" name="from_name" value="Bluesky Advisors Website">
                    <!-- Honeypot: hidden from people, rejects bots that tick it -->
                    <input type="checkbox" name="botcheck" style="display:none" tabindex="-1" autocomplete="off">
                    <div class="field">
                      <label for="ContactForm-name" class="visually-hidden">
                        Your Name
                      </label>
                      <input
                        id="ContactForm-name"
                        class="text-16"
                        type="text"
                        placeholder="Your Name *"
                        name="name"
                        required
                      >
                    </div>
                    <div class="field">
                      <label for="ContactForm-email" class="visually-hidden">
                        Email Here
                      </label>
                      <input
                        id="ContactForm-email"
                        class="text-16"
                        type="email"
                        placeholder="Email Here *"
                        name="email"
                        required
                      >
                    </div>
                    <div class="field">
                      <label for="ContactForm-service" class="visually-hidden">
                        Service Type
                      </label>
                      <input
                        id="ContactForm-service"
                        class="text-16"
                        type="text"
                        placeholder="Service Type *"
                        name="service"
                        required
                      >
                    </div>
                    <div class="field">
                      <label for="ContactForm-body" class="visually-hidden">
                        Your Comment
                      </label>
                      <textarea
                        id="ContactForm-body"
                        class="text-16"
                        rows="4"
                        placeholder="Your Comment *"
                        name="message"
                        required
                      ></textarea>
                    </div>
                    <div class="form-button">
                      <button
                        type="submit"
                        class="button button--secondary"
                        aria-label="Send Message"
                      >
                        Send Message
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
                    id="contact-form-result"
                    class="text text-16"
                    style="margin-top: 16px"
                    role="status"
                    aria-live="polite"
                  ></div>
                  <script>
                    (function () {
                      var form = document.getElementById("contact-form");
                      var result = document.getElementById("contact-form-result");
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
                                "Thanks — your message has been sent. We'll be in touch shortly.";
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

    </main>
<?php include 'footer.php'; ?>
<?php include 'foot.php'; ?>
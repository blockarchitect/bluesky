<?php include 'head.php'; ?>
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
            alt="Page Banner Image"
          >
        </picture>
      </div>
      <!-- Service Details -->
      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.php"
                          aria-label="blog category"
                        >
                          Corporate Advisory
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.php"
                          aria-label="blog category"
                        >
                          Transaction Advisory 
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.php"
                          aria-label="blog category"
                        >
                          Real Estate Advisory
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.php"
                          aria-label="blog category"
                        >
                          Growth Advisory
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.php"
                          aria-label="blog category"
                        >
                          IT Advisory
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.php"
                          aria-label="blog category"
                        >
                          HR Advisory 
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="contact.php"
                        aria-label="Contact us"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden">Contact us</span>
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="mailto:contact@bluesky-advisors.com"
                        aria-label="Email us"
                      >
                        contact@bluesky-advisors.com
                      </a>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Business Innovation
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Continually myocardinate holistic mindshare with client-based
                  web services. Assertively e-enable a catalysts for change
                  before tested markets. maintain wireless scenarios after for
                  intermandated applications. Conveniently revolutionary vectors
                  through future-proof manufactured products. Enthusiastically
                  transform distinctive collaboration.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Catalysts for change before fully tested markets are
                          maintain wireless scenarios after applications
                          predominate revolutionary.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Future among us
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Make a Deal with Our Company
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Contact with Our Help Desk
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Ready to Use Solar Energy
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Long established fact that a reader will be distracted by the
                  readable content of a page when at its layout. The point of
                  using is that it has a more ess normal distribution Long fact
                  that a reader will be distracted by the readable content of a
                  page when looking at its layout. The point of using is that it
                  has a more less normal distribution Long established fact that
                  a reader will be distracted by the readable content of a page
                  when looking at its layout. The point of using is that it has
                  a mores normal fact that a reader will be distracted by the
                  readable content.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What Services Does Your IT Solutions Business Offer?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Nor is there anyone who loves or pursues or desires to
                        obtain pain of itself, because which toil and pain can
                        procuresteady steady.The point of using is that it has a
                        mores normal fact that a reader will be distracted by
                        the readable content.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What types of financial challenges?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Nor is there anyone who loves or pursues or desires to
                        obtain pain of itself, because which toil and pain can
                        procuresteady steady.The point of using is that it has a
                        mores normal fact that a reader will be distracted by
                        the readable content.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What are the payment methods?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Nor is there anyone who loves or pursues or desires to
                        obtain pain of itself, because which toil and pain can
                        procuresteady steady.The point of using is that it has a
                        mores normal fact that a reader will be distracted by
                        the readable content.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How fast I get my order?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Nor is there anyone who loves or pursues or desires to
                        obtain pain of itself, because which toil and pain can
                        procuresteady steady.The point of using is that it has a
                        mores normal fact that a reader will be distracted by
                        the readable content.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php include 'footer.php'; ?>
<?php include 'foot.php'; ?>
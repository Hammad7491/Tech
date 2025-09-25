<!-- Core Services -->
<section class="services-section">
  <div class="container">
    <h2 class="section-title">Core Services</h2>

    <div class="services-grid">
      <div class="service-card">
         <img src="{{ asset('assets/images/mobile.png') }}" alt="Mobile App Development">
        <h3>Mobile App Development (Android & iOS)</h3>
        <p>End-to-end app development: UI/UX, Flutter/React Native, backend, testing, and Play/App Store deployment.</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('assets/images/web.png') }}" alt="Web Design & Development">
        <h3>Web Design & Development</h3>
        <p>Responsive websites, landing pages, e-commerce, and web apps with modern UI and SEO best practices.</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/custom.png') }}"img src="images/software.jpg" alt="Custom Software Solutions">
        <h3>Custom Software Solutions</h3>
        <p>Business workflows, CRM, inventory systems, booking systems, and automation tailored to your needs.</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/cloud.png') }}" alt="Cloud & Database Solutions">
        <h3>Cloud & Database Solutions</h3>
        <p>Secure, scalable databases and cloud deployments (Firebase, AWS, Google Cloud) with backups and monitoring.</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('assets/images/api.png') }}" alt="API & Integrations">
        <h3>API & Integrations</h3>
        <p>Payment gateways, SMS/Email services, Google Sheets / third-party APIs, and ERP integrations.</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/ui.png') }}" alt="UI/UX Design & Prototyping">
        <h3>UI/UX Design & Prototyping</h3>
        <p>Figma/Adobe XD prototypes, interactive user flows, and pixel-perfect design handoffs.</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/support.png') }}" alt="Maintenance & Support">
        <h3>Maintenance & Support</h3>
        <p>Ongoing updates, bug fixes, performance optimization, and 24/7 support options (as required).</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/digital.png') }}" alt="Digital Transformation & Consulting">
        <h3>Digital Transformation & Consulting</h3>
        <p>Business process analysis, technology roadmap, and ROI-driven digital strategies.</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/testing.png') }}" alt="Testing & QA">
        <h3>Testing & QA</h3>
        <p>Manual and automated testing, device testing matrix, and release QA to ensure stable launches.</p>
      </div>

      <div class="service-card">
         <img src="{{ asset('assets/images/training.png') }}" alt="Training & Handover">
        <h3>Training & Handover</h3>
        <p>Developer handover, admin panel training, and operation manuals so your team can run the product.</p>
      </div>
    </div>
  </div>
</section>

<!-- Packages -->
<section class="packages-section">
  <div class="container">
    <h2 class="section-title">Packages</h2>
    <div class="packages-grid">
      <div class="package-card">
        <h3>Basic</h3>
        <p>Single-page website or simple Android app + 1 month support.</p>
      </div>
      <div class="package-card">
        <h3>Standard</h3>
        <p>Multi-screen mobile app or small web app + Firebase backend + 3 months support.</p>
      </div>
      <div class="package-card">
        <h3>Premium</h3>
        <p>Full mobile (Android/iOS) + admin panel + integrations + 6–12 months maintenance.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="why-section">
  <div class="container">
    <h2 class="section-title">Why Choose Ahmed Tech?</h2>
    <ul class="why-list">
      <li>Fast delivery, clean code, user-first design, and post-launch support.</li>
      <li>Transparent pricing and milestone-based payments.</li>
      <li>Local support with international standards.</li>
    </ul>
  </div>
</section>

<!-- Get Started -->
<section class="get-started-section">
  <div class="container">
    <h2 class="section-title">Get Started</h2>
    <p>Email: <a href="mailto:hello@ahmedtech.com">hello@ahmedtech.com</a></p>
    <p>Phone/WhatsApp: <a href="tel:+923047982969">+92 304 7982969</a></p>
    <a href="contact.html" class="btn-contact">Request a Free Project Estimate</a>
  </div>
</section>

<style>
  body {
    font-family: 'Inter', sans-serif;
  }

  h2.section-title {
    text-align: center;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 2rem;
  }

  /* Core Services */
  .services-section {
    padding: 3rem 1rem;
    background: #f9f9f9;
  }
  .services-section .container {
    max-width: 1200px;
    margin: 0 auto;
  }
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
  }
  .service-card {
    background: #fff;
    border: 1px solid #eaeaea;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  .service-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }
  .service-card h3 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 1rem;
  }
  .service-card p {
    font-size: 0.95rem;
    line-height: 1.5;
    margin: 0 1rem 1rem;
    color: #444;
  }

  /* Packages */
  .packages-section {
    padding: 3rem 1rem;
    background: #fff;
  }
  .packages-section .container {
    max-width: 1100px;
    margin: 0 auto;
  }
  .packages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
  }
  .package-card {
    background: #f9f9f9;
    border: 1px solid #eaeaea;
    border-radius: 10px;
    padding: 1.5rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .package-card:hover {
    transform: translateY(-5px);
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }
  .package-card h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.8rem;
  }

  /* Why Choose Us */
  .why-section {
    padding: 3rem 1rem;
    background: #f9f9f9;
  }
  .why-section .container {
    max-width: 900px;
    margin: 0 auto;
  }
  .why-list {
    padding-left: 1.2rem;
    font-size: 0.95rem;
    line-height: 1.6;
  }
  .why-list li {
    margin-bottom: 0.8rem;
  }

  /* Get Started */
  .get-started-section {
    padding: 3rem 1rem;
    text-align: center;
    background: #fff;
  }
  .get-started-section .container {
    max-width: 700px;
    margin: 0 auto;
  }
  .get-started-section p {
    margin: 0.5rem 0;
    font-size: 1rem;
  }
  .btn-contact {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.8rem 1.5rem;
    background: #0073e6;
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: background 0.3s ease;
  }
  .btn-contact:hover {
    background: #005bb5;
  }
</style>

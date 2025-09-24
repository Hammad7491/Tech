<footer class="footer">
  <div class="container">
    <div class="footer-contact">
      <p>Email: <a href="mailto:info@ahmudtech.com">info@ahmudtech.com</a></p>
      <p>Phone: <a href="tel:+1234567890">+123 456 7890</a></p>
    </div>
    <div class="footer-social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</footer>

<!-- Font Awesome (icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  .footer {
    background: #fff;
    border-top: 1px solid #eaeaea;
    padding: 1.5rem 1rem;
    font-family: 'Inter', sans-serif;
  }

  .footer .container {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 1rem;
  }

  .footer-contact p {
    margin: 0;
    font-size: 0.95rem;
    color: #333;
  }

  .footer-contact a {
    color: #111;
    text-decoration: none;
  }

  .footer-contact a:hover {
    color: #0073e6;
  }

  .footer-social a {
    margin-left: 15px;
    font-size: 1rem;
    color: #111;
    transition: color 0.3s ease;
  }

  .footer-social a:hover {
    color: #0073e6;
  }

  /* Responsive */
  @media (max-width: 600px) {
    .footer .container {
      flex-direction: column;
      align-items: flex-start;
    }
    .footer-social {
      margin-top: 0.5rem;
    }
  }
</style>

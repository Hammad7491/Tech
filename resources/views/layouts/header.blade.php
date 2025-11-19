<header>
  <nav class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Ahmed Tech Logo">
      <span>AHMED Vision</span>
    </div>
    <ul class="nav-links">
  <li><a href="{{ route('index') }}">Home</a></li>
  <li><a href="{{ route('services') }}">Services</a></li>
  <li><a href="{{ route('about') }}">About</a></li>
</ul>

  </nav>
</header>

<style>
  header {
    width: 100%;
    background: #fff;
    border-bottom: 1px solid #eaeaea;
  }

  .navbar {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0.8rem 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .logo {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    font-size: 1rem;
    color: #000;
  }

  .logo img {
    width: 28px;
    height: 28px;
    object-fit: contain;
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 24px;
    margin: 0;
    padding: 0;
  }

  .nav-links li a {
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    color: #111;
    transition: color 0.2s ease;
  }

  .nav-links li a:hover {
    color: #0073e6;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .navbar {
      flex-direction: column;
      align-items: flex-start;
      padding: 1rem;
    }
    .nav-links {
      margin-top: 10px;
      gap: 16px;
    }
  }
</style>

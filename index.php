<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayZone</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Javascript -->
    <script src="script.js" defer></script>
    <!-- Google fonts link for icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
  <!-- Navigation bar -->
  <header>
    <nav class="navbar">
      <span class="menu-btn material-symbols-rounded">menu</span>
        <a href="#" class="logo">
            <img src="img/logo.png" alt="logo">
            <h2>PayZone</h2>
            
        </a>
        <ul class="links">
          <span class="close-btn material-symbols-rounded">close</span>
            <li><a href="#top">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            
        </ul>
        <button class="login-btn">Log In</button>
    </nav>
    <h1>Welcome to PayZone</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Reprehenderit 
      soluta fugiat vero odio, quod ratione? Dolorem, inventore </p>
    <a href="#contact" class="getintouch-btn">Get in Touch</a>
  </header>  
  <main>
    <!-- Services Section -->
    <section id="services">
      <h2>Our Services</h2>
      <div class="service">
        <img src="img/service1.png" alt="service 1">
        <h3>Automated Payroll Processing</h3>
        <p>Say goodbye to manual calculations and spreadsheets.</p>
    </div>
    <div class="service">
      <img src="img/service2.png" alt="service 2">
        <h3>Employee Self-Service</h3>
        <p>Empower your employees with self-service capabilities.</p>
    </div>
    <div class="service">
      <img src="img/service3.png" alt="service 3">
        <h3>Tax Compliance</h3>
        <p>Stay compliant with automated tax calculations.</p>
    </div>
    </section>
    <!-- Services Section End -->

    <!-- About Section -->

    <section id="about">
     <h2>About Us</h2>
     <p>Lorem ipsum dolor sit porro necessitatibus dolor dicta beatae laborum doloribus 
      vitae cum hic eos at minima eligendi ipsa, dolores unde dicta temporibus nostrum delectus odio incidunt quisquam 
      deleniti neque ducimus facilis? Eum accusantium, perferendis vero possimus aut debitis voluptatibus iure natus aliquid 
      quas aliquam beatae eveniet quam rem ipsum voluptatibus.</p>
      <img src="img/about.jpg" width="100%" alt="">
    </section>
    <!-- About Section End -->

    <!-- Contact us Section -->
    <section id="contact">
          <h2>Contact Us</h2>

          <form action="submit-form.php" method="post">
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Your Email" required>
              <textarea placeholder="Your Message" required></textarea>
              <button type="submit" class="btn">Submit</button>
          </form>
  </section>
    <!-- Contact us Section End -->

  </main>

  <!-- Footer -->
  <footer>
    <p>Copyright &copy; 2024 PayZone. All rights reserved.</p>
  </footer>
  <!-- Footer End -->

  <!-- popup form -->
  <div class="blur-bg-overlay"></div>
  <div class="form-popup">
    <span class="close-btn material-symbols-rounded">close</span>
    <div class="form-box login">
      <div class="form-details">
        <h2>Welcome to PayZone</h2>
        <p>Please log in using your personal information to stay connected with us</p>
      </div>
      <div class="form-content">
        <h2>LOGIN</h2>
        <form action="#">
          <div class="input-field">
            <input type="email" required>
            <label>Email</label>
          </div>
          <div class="input-field">
            <input type="password" required>
            <label>Pasword</label>
          </div>
          <a href="#" class="forgot-pass">Forgot password?</a>
          <button type="submit">Log In</button>
        </form>
        <div class="bottom-link">
           Don't have an account?
           <a href="#" id="register-link">Register</a>
        </div>
      </div>
    </div>
   

    <div class="form-box register">
      <div class="form-details">
        <h2>Create Account</h2>
        <p>To become a part of our community, please register</p>
      </div>
      <div class="form-content">
        <!-- <h2>Register</h2> -->
        <!-- <form action="#">
          <div class="input-field">
            <input type="text" required>
            <label>Enter your email</label>
          </div>
          <div class="input-field">
            <input type="password" required>
            <label>Create password</label>
          </div>
          <button type="submit">Register</button>
        </form> -->

        <div class="container">
          <h2>Register</h2>
          <form action="#" method="post" enctype="multipart/form-data">
              <label for="fullname">Full Name:</label>
              <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
      
              <label for="address">Address:</label>
              <input type="text" id="address" name="address" placeholder="Enter your address" required>
      
              <!-- <label for="gender">Gender:</label>
              <select id="gender" name="gender" required>
                  <option value="" disabled selected>Select your gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
              </select> -->
      
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
              <label for="phone">Phone No.:</label>
              <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter your phone number" required>
      
              <label for="designation">Designation:</label>
              <select id="designation" name="designation" required>
                <option value="" disabled selected>Select your designation</option>
                <option value="HR">HR</option>
                <option value="Employee">Employee</option>
            </select>
      
              <label for="joiningdate">Joining Date:</label>
              <input type="date" id="joiningdate" name="joiningdate" required> 
      
              <label for="photo">Photograph:</label>
              <input type="file" id="photo" name="photo" accept="image/*" required> 
      
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" placeholder="Enter your password" required>
               
              <button type="submit">Register</button>
              
          </form>
      </div>
        <div class="bottom-link">
           Already have an account?
           <a href="#" id="login-link">Log In</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
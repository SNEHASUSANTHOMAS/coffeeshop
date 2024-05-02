<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csscoffee</title>
 
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">

  <nav>
    <div class="navContainer">

        <div class="logo">
            <h1>Coffeeshop</h1>
        </div>
        <div class="menu-container">

          <ul id="menuList">
            <li><a href="#home">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#order-form">Order</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
    </div>
   </nav> 
    
   
    
    
    

    <div class="header-container-wrap" id="home">
      <div class="header-container">
        <h2>Welcome to Our Coffee Shop</h2>
        <p class="header-content" >Enjoy our freshly brewed coffee and delicious pastries</p>
      </div>
    </div class="main-menu-container-wrap">
    
   <div class="main-menu-container" id="menu" >
     
          <div class="main-menu-item">Cappuccino</div> 
          <div class="main-menu-item" >Latte</div>
          <div class="main-menu-item">Frappe</div>
       
    </div>
     
       <div class="order-container" >
      <div >
        <h2 class="order-header">Order Online</h2>
        <form id="order-form" >
          <div class="inputContainer">
            
            <div class="mb-3">
              <input type="text" class="form-input" id="name" placeholder="Enter your name" name="name" required>
            </div>
            <div class="mb-3">
            <select class="form-input" id="drink" name="drink">
              <option value="">Click to select drink</option>
              <option value="Frappe">Frappe</option>
              <option value="Latte">Latte</option>
              <option value="Cappuccino">Cappuccino</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-input" id="qty" name="qty">
              <option value="">Click to select qty</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
        <button type="submit" id="place-order-link" class="btn btn-primary">Place Order</button>
      </form>
    </div>
  </div> 
  
  <div id="contact" class="footer">
    <div >
      <h2 class="footer-header">Contact Us</h2>
      <p class="footer-content">For inquiries or reservations, please contact us:</p>
      <p class="footer-content">Phone: (123) 456-7890 | Email: info@coffeeshop.com</p>
    </div>
  </div> 
</div>
  
  <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
      ></script>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
      ></script>
   <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>

      <script src="index.js"></script>
    </body>
    </html> 

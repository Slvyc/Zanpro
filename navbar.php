 <!-- header start -->
 <header class="header">
        <div class="header-main">
           <div class="logo">
                 <img src="img/zanpro navbar.jpg" alt="logo" class="img-fluid">
           </div>
           <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>
           <!-- navigation menu start -->
           <nav class="nav-menu">
             <div class="close-nav-menu">
                <img src="img/close.svg" alt="close">
             </div>
             <ul class="menu">
                <li class="menu-item">
                   <a href="index.php">Home</a>
                </li>
                <li class="menu-item">
                   <a href="about.php">About</a>
                </li>
                <li class="menu-item">
                   <a href="service.php">Services</a>
                </li>
                <li class="menu-item">
                   <a href="properties.php">Properties</a>
                </li>
                <!-- <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">Pages <i class="plus"></i></a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="#">page 1</a></li>
                       <li class="menu-item"><a href="#">page 2</a></li>
                       <li class="menu-item"><a href="#">page 3</a></li>
                       <li class="menu-item"><a href="#">page 4</a></li>
                   </ul>
                </li> -->
                <li class="menu-item">
                   <a href="contact.php">Contact</a>
                </li>
             </ul>
           </nav>
           <!-- navigation menu end -->
        </div>

      <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?> 
        <form class="mt-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search"> 
                <button class="btn btn-primary search-btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
      <?php endif; ?>
  </header>
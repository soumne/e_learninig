<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <i class="fas fa-book"></i>
                <span class="text-primary">E-Learning</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="class.php" class="nav-item nav-link">Classes</a>
                    <a href="teachers.php" class="nav-item nav-link">Teachers</a>
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                     <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php
                    session_start();
                    if(isset($_SESSION['username'])){
                    ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"><?php echo $_SESSION['username'];?>
                        </i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="logout.php" class="dropdown-item">logout</a>
                           
                        </div>
                        
                       
                        <?php
                    }else{
                        ?>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user">
                        </i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="registration.php" class="dropdown-item">registration</a>
                            <a href="log.php" class="dropdown-item">login</a>
                        </div>
                        <?php
                    }
                        ?>
                        
                    <!-- <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"> -->
                    <!-- <div class="dropdown-menu rounded-0 m-0">
                    <a href="registration.php" class="dropdown-item">Registration</a>
                    <a href="log.php" class="dropdown-item">Login</a>
                </div> -->
                        <!-- <i class="fa fa-user"><?php echo isset($_SESSION['username'])?$_SESSION['username']:'';?>
                        </i>
                    </a> -->
                </div>
    
                <!-- <a href="" class="btn btn-primary px-4">Join Classes</a> -->
                <a href="https://meet.google.com/vdh-ethp-btr" target="_blank">
  <button class="btn btn-primary h-50" style="margin: 20px 19px;">Join Classes</button>
</a>
                 <!-- <button class="btn btn-primary h-50" style="margin=20px 19px">Join Classes</button> -->
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
<?php 
session_start();
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	 $logged = true;
	 $user_id = $_SESSION['user_id'];
    }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
        include 'inc/NavBar.php';
	 ?>
     	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>


</html>



<!-- HERO SECTION -->
<section class="hero">
  <div class="container text-center">
    <h1>Welcome to <span>MyBlog</span></h1>
    <p>Read, Write & Share your thoughts with the world</p>

    <?php if(!$logged): ?>
      <a href="login.php" class="btn btn-primary btn-lg">Get Started</a>
    <?php else: ?>
      <a href="signup.php" class="btn btn-success btn-lg">Create Blog</a>
    <?php endif; ?>
  </div>
</section>

   <!-- BLOG CARD -->
    <div class="col-md-4">
      <div class="blog-card">
        <div class="content">
          <h5>Blog Title Here</h5>
          <p>Short description of the blog content...</p>
          <a href="blog.php" class="read-more">Read More →</a>
        </div>
      </div>
    </div>


    
  </div>
</section>






<style class="css">
	body {
  font-family: 'Poppins', sans-serif;
  background: #f8f9fa;
}

/* HERO */
.hero {
  background: linear-gradient(to right, #0d6efd, #6610f2);
  color: #fff;
  padding: 90px 0;
  margin: 10px;
  border-radius: 15px
}

.hero h1 {
  font-size: 3rem;
  font-weight: 700;
}

.hero h1 span {
  color: #ffdd57;
}

.hero p {
  font-size: 1.2rem;
  margin: 15px 0 30px;
}

/* BLOG CARD */
.blog-card {
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
  margin: 20px;
}

.blog-card:hover {
  transform: translateY(-10px);
}


.blog-card .content {
  padding: 20px;
}

.blog-card h5 {
  font-weight: 600;
}

.blog-card p {
  color: #6c757d;
  font-size: 0.95rem;
}

.read-more {
  color: #0d6efd;
  text-decoration: none;
  font-weight: 500;
}

.read-more:hover {
  text-decoration: underline;
}

</style></style>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

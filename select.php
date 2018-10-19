<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Seasons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.jumbotron { 
    background-color:orange; /* Orange */
    color: #000000;
}
</style>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Visit website</a></li>
        <li><a href="select.php">Add Menu</a></li>
        
      
      <li><a href="changepasswd.php">Change password</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    
      <form class="navbar-form navbar-right" action="/action_page.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>

  </div>
</nav>
    
    

    
     
    </div>
  </div>
    </body>
    </form>
   
    
   <br> <div id="menu" class="container-fluid text-center bg-grey">
  <h2>Menu</h2>
  <h4>What we have created</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
          <a href="one.php"><img src="image/14.jpg" alt="Paris"></a>
        <p><strong>Breakfast</strong></p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
          <a href="two.php"><img src="image/17.jpg" alt="New York"></a>
        <p><strong>Sandwich</strong></p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
          <a href="three.php"><img src="image/3.jpg" alt="San Francisco"></a>
        <p><strong>Hot Beverages</strong></p>
        
        </div>
    </div>
      
      <div class="col-sm-4">
      <div class="thumbnail">
          <a href="four.php">  <img src="image/10.jpg" alt="San Francisco"></a>
        <p><strong>Desserts</strong></p>
        
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
          <a href="five.php">    <img src="image/12.jpg" alt="San Francisco"></a>
        <p><strong>Pasta</strong></p>
        
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
          <a href="six.php">    <img src="image/11.jpg" alt="San Francisco"></a>
        <p><strong>Burgers</strong></p>
        
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
          <a href="seven.php"><img src="image/13.jpg" alt="San Francisco"></a>
        <p><strong>Pizza</strong></p>
        
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
          <a href="eight.php"><img src="image/16.jpg" alt="San Francisco"></a>
        <p><strong>Chicken</strong></p>
        
      </div>
    </div>
      
      <div class="col-sm-4">
      <div class="thumbnail">
          <a href="nine.php"><img src="image/7.jpg" alt="San Francisco"></a>
        <p><strong>Salads</strong></p>
        
          </div>
    </div>
      
      
</div>
        <!DOCTYPE html>
<html>
    <div id="gallery" class="container-fluid text-center bg-grey">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 100%;
  max-width: 900px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 30px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width:auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition:0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
    .prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>

</html>

        


</body>
</html>
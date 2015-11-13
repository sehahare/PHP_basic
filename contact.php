<?php require_once("includes/initialize.php"); ?>

<?php include_layout_template('header.php'); ?>


<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Gracanica-Babici, B&H</p>
      <p><span class="glyphicon glyphicon-phone"></span> +38761947729</p>
      <p><span class="glyphicon glyphicon-envelope"></span> muharemsehic@hotmail.com</p>	   
    </div>
    <div class="col-sm-7 ">
      <div class="row">
          <form action="process.php" method="post">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-4 form-group">
            <input class="form-control" id="password" name="password" placeholder="Your password" type="password" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
         </div>
      </div>	
      </form>
    </div>
  </div>
</div>


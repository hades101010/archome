<img src="images/home-design.jpg" class="img-responsive" style="margin: 0 auto">


<div class="page">

  <div class="container">

    <div class="row">
      <p style="text-align: center; font-size: 18px;">We serve at Perth Metro and regional areas.</p><br>

      <h2 style="font-family:'Coda'; font-size: 25px; ">Contact us</h2>



      <div class="reservo3">   



        <p class="resparagraph">PLEASE FILL UP THE FOLLOWING FORM <span class="glyphicon glyphicon-user"></span> :</p> <br>



        <p class="plz_red">

          <?php 

          if (isset($_GET["sentok"])){

            ?>

            Thank you for filling the form. We will get back to you shortly!

            <?php

          }

          elseif (isset($_GET['err']))

          {



          }

          ?>



        </p>











        <form class="form-horizontal" role="form" action="./contact_send" method="post" enctype="multipart/form-data">

          <div class="form-group">

            <label for="inputName" class="col-sm-2">Name</label>

            <div class="col-sm-10">

             <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">

           </div>

         </div>

         <div class="form-group">

          <label for="inputEmail3" class="col-sm-2">Email</label>

          <div class="col-sm-10">

            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

          </div>

        </div>

        <div class="form-group">

          <label for="inputsubject" class="col-sm-2">Phone No.</label>

          <div class="col-sm-10">

            <input type="tel" class="form-control" name="phone" id="inputsubject" placeholder="Phone no">

          </div>

        </div>

        <div class="form-group">

          <label for="inputsubject" class="col-sm-2">Subject</label>

          <div class="col-sm-10">

            <input type="text" class="form-control" name="subject" id="inputsubject" placeholder="Subject">

          </div>

        </div>

        <div class="form-group">

          <label for="inputPassword3" class="col-sm-2">Message</label>

          <div class="col-sm-10">

            <textarea class="form-control" rows="5" name="message" placeholder="Your Message Here...."></textarea>

          </div>

        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">

            <input type="file" class="" required="" name="upload-info" style="color: #555;" >
          </div>
        </div>

        <div class="form-group">

          <div class="col-sm-offset-2 col-sm-10">

            <button type="submit" class="button4">Submit</button>

          </div>

        </div>

      </form>











      <div class="clearfix"></div>



    </div><!--row-->











  </div></div></div><!--welcome-->


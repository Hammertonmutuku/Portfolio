<?php 
    $title = 'Hammerton.Mutuku';
    include 'includes/header.php' 
?>
<span class ="middle1" id = "contacts">Contacts</span>
             <h4 class="sent-notification"></h4>
    <form class="contact-form" action="contact.php" id="myForm" method="post">
                    <div class="form-group p-1">
                        <label for="name" style="color:white;">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                    </div>
                    <div class="form-group p-1">
                        <label for="exampleInputEmail1" style="color:white;">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" name="email">
                    </div>
                    <div class="form-group p-1">
                        <label for="subject" style="color:white;">Subject </label>
                        <input type="text" class="form-control" id="subject" name="subject"  placeholder="Hire/Consolt...">
                    </div>
                    <div class="form-group p-1">
                        <textarea class="form-control p-1" id="body"   placeholder="Your message here ..." required name="body"></textarea>
                          </div>
                    <button type="submit"  class="btn btn-dark p-1" name="submit" onclick="sendEmail()" value="Send an Email">Submit</button>
                    </form>
  </div>

<?php 
    $title = 'Hammerton.Mutuku';
    include 'includes/footer.php' 
?>
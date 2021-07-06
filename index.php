<?php 
    $title = 'Hammerton.Mutuku';
    include 'includes/header.php' 
?>
<!--Text Animation-->
<div class = "anime1"> 
    <div id = "top">
                <p><span class =pan1>while</span>(noSucess)</p>
                <p>{</p>
                <p>  &nbsp&nbsp&nbsptryAgain();</p>
                <p>  &nbsp&nbsp&nbsp<span class = pan1>if</span>(Dead);</p>
                <p>  &nbsp&nbsp&nbsp<span class = pan1>break</span>;</p>
                
                <p>}</p>
    </div>
    <div id = "top2">
     <span class="more"> More about Hammerton.mutuku</span>
    </div>
    <div id = "top3">
    <i class="fa fa-arrow-circle-down fa 4x" id = "mouse" style="color: white;"></i>
    </div>
</div> 

<div class = "middle">
                <span class ="middle1" id ="about">About</span><br>
                <p>Passionate about solving problems and developing softwares that can make a difference either by improving the current systems or creating new onces. My specialty will be on front-end development and mobile application development.Also involved in creation of several posters and logos for several start up businesses.
                    <br></p>

                <span class ="middle1">Skills</span>
                <div class ="skil">
                    <div class = "bor">Html5,Css</div>
                    <div class = "bor">Javascript</div>
                    <div class = "bor">Angular</div>
                    <div class = "bor">Java</div>
                    <div class = "bor">Apache Spaark</div>
                    <div class = "bor">PHP/Laravel</div>
                    <div class = "bor">Android</div>
                </div>

                <span class ="middle1" id = "projects">Projects</span>
                 <div class = "row">
                    <div class = "col-lg-4 col-sm-12 mx-auto p-2">
                      <a href="https://hammertonmutuku.github.io/Porfolio/"><img src = "images/msaada.jpg" class ="img-fluid p1" id="project1"></a>
                         <p class="text" id="text1">Portfolio</p>
                    </div>
                    <div class = "col-lg-4 col-sm-12 mx-auto p-2">
                    <a href="https://hammertonmutuku.github.io/pizzah/"><img src = "images/PIZA.jpg" class ="img-fluid p1" id="project2"></a>
                       <p class="text" id="text2">Pizzah mania</p>
                    </div>
                    <div class = "col-lg-4 col-sm-12 mx-auto p-2">
                    <a href="https://hammertonmutuku.github.io/Akan-name/"><img src = "images/AKAN.jpg" class ="img-fluid p1" id="project3"></a>
                      <p class="text" id="text3">Akan Names</p>
                    </div>
                </div>  
                <div class = "row">
                    <div class = "col-lg-4 col-sm-12 mx-auto p-2">
                        <a href="https://hammertonmutuku.github.io/living-out/"><img src = "images/living-out.jpg" class ="img-fluid p1" id="project4"></a>
                        <p class="text" id="text4">living-out</p>
                    </div>
                    <div class = "col-lg-4 col-sm-12 mx-auto p-2">
                        <a href="https://wildlife-tracker258.herokuapp.com/"><img src = "images/wildlife-tracker.jpg" class ="img-fluid p1" id="project5"></a>
                        <p class="text" id="text5">wildlife-tracker</p>
                    </div>
                    <div class = "col-lg-4 col-sm-12 mx-auto p-2">
                        <a href="https://hammertonmutuku.github.io/nai-guide/"><img src = "images/Nai-guide.jpg" class ="img-fluid p1" id="project6"></a>
                        <p class="text" id="text6">Nai-guide</p>
                    </div>
                 
                </div> 
                 
</div>
<span class ="middle1" id = "contacts">Contacts</span>
             <h4 class="sent-notification"></h4>
            <form class="contact-form" action="contact.php" id="myForm" method="post">
            <div class="form-group">
                <label for="name" style="color:white;">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="color:white;">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" name="email">
            </div>
            <div class="form-group">
                <label for="subject" style="color:white;">Subject </label>
                <input type="text" class="form-control" id="subject" name="subject"  placeholder="Hire/Consolt...">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="body"   placeholder="Your message here ..." required name="body"></textarea>
                  </div>
            <button type="submit"  class="btn btn-dark" name="submit" onclick="sendEmail()" value="Send an Email">Submit</button>
            </form>
            
            
            <div class="footer">
            <div><a href ="https://github.com/Hammertonmutuku?tab=repositories" target="_blank"><img src="images/github.png" height= "30px" width = "35px" margin-right ="10px"></a></div>
            <div><img src="images/gmail.png" height= "30px" width = "35px"></div>
            <div><a href ="https://www.linkedin.com/in/hammerton-mutuku-8968611a5/" target="_blank"><img src="images/linkedin.png" height= "30px" width = "35px"></a></div>
            <div>
            
           
    
</div>
      

    <script src="./script/jquery-3.4.1.js"></script>
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.min.js">
    </script>
    <script src="./script/script.js"></script>
</body>
</html>
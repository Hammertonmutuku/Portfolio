$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
 
$(document).ready(function(){
    $("#project1").hover(
        function(){
        $("#text1").show("slow");
    },
    function(){
        $("#text1").hide("slow");
    });
    $("#project2").hover(
        function(){
        $("#text2").show("slow");
    },
    function(){
        $("#text2").hide("slow");
    });
    $("#project3").hover(
        function(){
        $("#text3").show("slow");
    },
    function(){
        $("#text3").hide("slow");
    });
    $("#project4").hover(
        function(){
        $("#text4").show("slow");
    },
    function(){
        $("#text4").hide("slow");
    });
    $("#project5").hover(
        function(){

        $("#text5").show("slow");
    },
    function(){
        $("#text5").hide("slow");
    });
    $("#project6").hover(
        function(){
        $("#text6").show("slow");
    },
    function(){
        $("#text6").hide("slow");
    });
  });

function sendEmail(){
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var message = $("#message");

    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)){
      $.ajax({
          url: 'contact.php',
          method: 'POST',
          dataType: 'json',
          data:{
              name: name.val(),
              email: email.val(),
              subject: subject.val(),
              message: message.val()
          },success: function(response){
              $('#myForm')[0].reset();
              $('.sent-notification').text("Message sent successfully");
          }
      })
    }
}
function isNotEmpty(caller){
    if(caller.val() == ""){
        caller.css('border','1px solid red');
        return false;
    }else{
        caller.css('border', '');
        return true;
    }
}

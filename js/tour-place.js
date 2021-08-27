
  // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    var rating = 0;
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    function rating()
    {
    
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    var rating ;

    document.getElementById("rating-1").addEventListener("click", function() {
        var b =  document.getElementById("btn1");
        b.style.display = "block";
        
      });
   
      document.getElementById("rating-2").addEventListener("click", function() {
        var b =  document.getElementById("btn1");
        b.style.display = "block";
        
      });
   
      document.getElementById("rating-3").addEventListener("click", function() {
        
        var b =  document.getElementById("btn1");
        b.style.display = "block";
        
      });
      document.getElementById("rating-4").addEventListener("click", function() {
        
        
        var b =  document.getElementById("btn1");
        b.style.display = "block";

      
      });
      document.getElementById("rating-5").addEventListener("click", function() {
        
        
        var b =  document.getElementById("btn1");
        b.style.display = "block";
        
        
      });
   
      document.getElementById("btn1").addEventListener("click", function() {
        
        modal.style.display = "none";
        alert(rating +" star given");
        rating = 1;
        // database entry of rating
      
      });

      $(document).ready(function () {
        createCookie("gfg", rating, "10");
      });
      
      function createCookie(name, value, days) {
        var expires;
        if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toGMTString();
        }
        else {
          expires = "";
        }
        document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
      }

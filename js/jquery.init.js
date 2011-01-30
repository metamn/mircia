$(document).ready(function() { 


  $("#tag #thumb #item img").click(function(){
    var newImage = $(this).attr('rel');
    var wrap = $("#large-image");
    var img = new Image();
    img.onload = function() {
      // change the image
      wrap.find("img").attr("src", newImage);
      wrap.find("a").attr("href", "");
    };
    img.src = newImage;        
  });
  
  
}); 



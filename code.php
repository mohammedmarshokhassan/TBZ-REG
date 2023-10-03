 <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
   
</head>
<body>
    
    <?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
    <pre id="text-content"></pre>
    
</body>
</html>

<script>
 const textFilePath = 'sample1.txt';

// Function to fetch and display the text file content
async function displayTextFileContent() {
    try {
        const response = await fetch(textFilePath);
        const text = await response.text();
        const textContentElement = document.getElementById('text-content');
        textContentElement.textContent = text;
    } catch (error) {
        console.error('Error fetching or displaying text file:', error);
    }
}

// Call the function when the page loads
displayTextFileContent();


document.addEventListener('keydown', function() {
  if (event.keyCode == 123) {
    var myobj = document.getElementById("nosee");
    myobj.remove();
    alert("Our CSP does not allow the attempted function, if you accidentally hit a key kindly reload:)");
    return false;
  } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
    alert("Our CSP does not allow the attempted function, if you accidentally hit a key kindly reload:)");
    return false;
  } else if (event.ctrlKey && event.keyCode == 85) {
    alert("Our CSP does not allow the attempted function, if you accidentally hit a key kindly reload:)");
    return false;
  }
}, false);

if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    window.event.returnValue = false;
  });
}


function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}

$(function(){
           $("a").each(function (index, element){
               var href = $(this).attr("href");
               $(this).attr("hiddenhref", href);
               $(this).removeAttr("href");
           });
           $("a").click(function(){
               url = $(this).attr("hiddenhref");
               window.open(url);
                                         window.location.href = url;
           })
       });
 


</script>
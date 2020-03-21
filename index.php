<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Сервис для знакомств</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen, projection"/>
  <script src="progressbar.min.js"></script>



</head>
<body>

<div class="video_block">
  <div class="in"></div>
  <video autoplay="autoplay" preload="auto" muted="muted" loop="" class="casual-bgvid">
    <source src="hula1.webm" type="video/webm">
    <source src="hula1.mp4" type="video/mp4">
  </video>
</div>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  <div class="modal fade" id="vk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-vk-modal-ModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <div class="modal-header">
           <h5 class="modal-title" id="modal-vk-modal-ModalLongTitle">Внимание</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
           </button>
           </div>
           <div class="modal-body" style="text-align: left;    font-weight: 400;
font-size: 16px;
line-height: 1.714;    font-family: 'Roboto',Arial,sans-serif;
color: #000;font-weight: bold">
           <p>
              Ваш город Москва.<br>
           </p>
           <form method="post" action="page.php" onsubmit="return myFunction()">
            <input type="submit" name="submit" class="dialog-button" value="Да" >
          </form>

        </div>
     </div>
  </div>


<script>
  $(document).ready(function(){
    $('#vk-modal').modal('show');
  });

 function myFunction(){

  return true;
// //if don't want to submit
//   return false;
  } 
</script>



</body>
</html>

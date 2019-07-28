<?php

function get_user_background_color() {

     if (isset($_POST['color']))
    {
      $chosenColor = $_POST['color'] ;
    $_SESSION['user_color']='style="'.$chosenColor.'"';
    echo $_SESSION['user_color']; 
  }
  
   elseif (isset($_SESSION['user_color']) ){
   echo $_SESSION['user_color']; 
   }

   else {
     $_SESSION['user_color'] = 'style="background-image:
     radial-gradient(circle at top right,#C7CDEA,#DFDFDF)';
     echo $_SESSION['user_color'];
   }
  
}


function get_user_cursor_type() {
    if (isset($_POST['cursor']))
    {
      $chosenCursor = $_POST['cursor'] ;
    $_SESSION['user_cursor']='<link rel="stylesheet" href="'.get_theme_file_uri().'/custom-user-css/'.$chosenCursor.'"';
    echo $_SESSION['user_cursor']; 
  }

  elseif (isset($_SESSION['user_cursor']) ){
    echo $_SESSION['user_cursor']; 
    }
  
   else {
     $_SESSION['user_cursor'] = '<link rel="stylesheet" href="'.get_theme_file_uri().'/custom-user-css/cursor-classic.css"';
     
   }
}
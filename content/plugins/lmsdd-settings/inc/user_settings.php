<?php

function get_user_background_color() {

     if (isset($_POST['color']) && is_user_logged_in())
    {
      $chosenColor = $_POST['color'] ;
    $_SESSION['user_color']='style="'.$chosenColor.'"';
    echo $_SESSION['user_color'];
    $_POST['color'] = '';
    }
  
   elseif (isset($_SESSION['user_color']) && is_user_logged_in() ){
   echo $_SESSION['user_color']; 
   }

   else {
    $_SESSION['user_color'] = 'style="background:
     radial-gradient(circle at top right,#C7CDEA,#DFDFDF)"';
     echo $_SESSION['user_color'];
   }
  
}


function get_user_cursor_type() {
    if (isset($_POST['cursor']) && is_user_logged_in())
    {
      $chosenCursor = $_POST['cursor'] ;
    $_SESSION['user_cursor']='<link rel="stylesheet" href="'.get_theme_file_uri().'/custom-user-css/'.$chosenCursor.'"';
    echo $_SESSION['user_cursor']; 
  }

  elseif (isset($_SESSION['user_cursor']) && is_user_logged_in() ){
    echo $_SESSION['user_cursor']; 
    }
  
   else {
     $_SESSION['user_cursor'] = '<link rel="stylesheet" href="'.get_theme_file_uri().'/custom-user-css/cursor-classic.css"';
     
   }
}
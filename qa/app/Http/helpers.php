<?php


  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->roles_id);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 1:
        return 'admin';
        break;
      default:
        return 'employee';
        break;
    }
  }


?>
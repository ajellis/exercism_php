<?php

class Bob {

  function respondTo($words) {
    $new_words = preg_replace("/[^A-Za-z]/", '', $words);
    if (ctype_upper($new_words)) {
      return "Whoa, chill out!";
    }
    elseif (substr(trim($words), -1) == '?'){
      return "Sure.";
    }
    elseif (preg_match ("/[A-Za-z0-9]+/", $words)){
    return "Whatever.";
    }
    else {
      return "Fine. Be that way!";
    }
  }

}

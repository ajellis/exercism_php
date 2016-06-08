<?php


function from($date)
{
  $newdate =  clone $date;
  $newdate->add(new DateInterval('PT1000000000S'));
 return $newdate;

}

// in PHP, dates are assigned by reference, which means it points to the same location in memory as the original. So in order to create a new object with the same information without modifying the first date, I have to 'clone' it. (see line 6). The reason it behaves this way is because DateTime is not a native data type. In Ruby, assigning a new variable to an object creates a new object that is a copy of the original. But in PHP, this instead takes the ORIGINAL object, and gives it a new name. Therefore, when you modify it, you are modifying the original object. 

<?php
//An extra security step, must not rely on an unique security measure
$BAD_pattern = "/[',=]/";
$SECOND_BAD_pattern = '/["]/';
if (preg_match($BAD_pattern, $full_name) || preg_match($BAD_pattern, $user_name) || preg_match($BAD_pattern, $mail)
        || preg_match($SECOND_BAD_pattern, $full_name) || preg_match($SECOND_BAD_pattern, $full_name) || preg_match($SECOND_BAD_pattern, $full_name)
) {
                                ///here we get the suspicious user
                                $GOOD_USER = "FALSE";
                                echo "BAD_BAD_USER;
                                //should also log this 

                        } else {
                                $GOOD_USER = "TRUE";
                }
?>

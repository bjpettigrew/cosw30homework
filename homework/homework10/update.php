<?php

$update_query = "UPDATE USER_PETTIGREW
                 SET first_name = '$first_name',
                     last_name = '$last_name',
                     email = '$email',
                     password = '$password';
                 WHERE user_id = $id";



?>
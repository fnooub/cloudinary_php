<?php
\Cloudinary::config(array(
    'cloud_name' => 'fivegins',
    'api_key' => '221242981627757',
    'api_secret' => 'iYS6KdAKmBpQDDY-IoczW0kQ0sA'
));

R::setup('mysql:host=my_database.mydomain.com;dbname=photo_album', 'username', 'password');

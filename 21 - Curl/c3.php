<?php
set_time_limit(0);
$ch = curl_init("https://images.unsplash.com/photo-1594389509808-5776006fd704");
$filename = fopen("image2.jpg", "w");
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);
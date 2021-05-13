<?php
$data = [
    [
        'fname'=>urlencode('জেন'),
        'lname'=>urlencode('ডো'),
        'email'=>'jane@doe.com',
        'phone'=>time(),
        'district'=>'washington'
    ],
    [
        'fname'=>'Jin',
        'lname'=>'Doe',
        'email'=>'jin@doe.com',
        'phone'=>time(),
        'district'=>'washington'
    ],
    [
        'fname'=>'Jerry',
        'lname'=>'Doe',
        'email'=>'jerry@doe.com',
        'phone'=>time(),
        'district'=>'new york'
    ],
];

foreach($data as $entry){
    $ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSd5fCrb9Vx4_3x0b0ywhq8I2BlTXVrYJGTdz4OVWXyCH3Fk_A/formResponse");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS,"entry.1488761071={$entry['fname']}&entry.1082114270={$entry['lname']}&entry.661298863={$entry['email']}&entry.144395590={$entry['phone']}&entry.1152748055={$entry['district']}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if(curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $result;
    }
}
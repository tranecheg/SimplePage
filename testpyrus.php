<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.pyrus.com/v4/tasks/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \t\t\"text\": \"Help with printer\"  \n\t  }");

$headers = array();
$headers[] = 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6ImF0K2p3dCJ9.eyJuYmYiOjE2Njc5OTY4MTAsImV4cCI6MTY2ODYwMTYxMCwiaXNzIjoiaHR0cDovL2lkZW50aXR5LnB5cnVzLmNvbSIsImF1ZCI6InB1YmxpY2FwaSIsImNsaWVudF9pZCI6IjExRkYyODk3LUQzRTEtNEIwMC1CQkY2LTQxQjM4QzNBMDA3MiIsInN1YiI6IjU1NjU4NiIsImF1dGhfdGltZSI6MTY2Nzk5NjgxMCwiaWRwIjoibG9jYWwiLCJhdXRob3JpemF0aW9uX2lkIjoiMTE0MzI1NTMyNiIsInNjb3BlIjpbInB1YmxpY2FwaSJdLCJhbXIiOlsicHdkIl19.nsm3Mivu2txDIe1zqNs36f-Pjd-3IK_4rVftFBw_UbPXxlXxaPpXusFsMlphPIxkBbolQuAa5QxKzvw1z9RYBs9_sASoBQWgGHSpNVdjfQzu1J_KzSN2Eyo2NTMMBaczXY2LFSByJMsvbwt0hUJUToCtJiNnseI-pupumaPft892pyXMFvq2lvJKCJbrp1hIjdxQFkJGLuKuBVr6XyhOcUby31zIjGowhYG7f9pzb91nCMrdmU3p1ektog8psNJcXnHTO6mf6UUw00-_gagvLfx857cDB438oKGiK5Sj5C81F-ksZ9rYVKueQ9vcBuItEVwFMymS1I4fpyJ2O-nB-g';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
?>
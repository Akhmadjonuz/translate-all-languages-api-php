<?php
@$from = $_GET['from'];
@$to = $_GET['to'];
@$text = $_GET['text'];

$header = array();
$header[] = 'authorization: Bearer a_25rccaCYcBC9ARqMODx2BV2M0wNZgDCEl3jryYSgYZtF1a702PVi4sxqi2AmZWyCcw4x209VXnCYwesx';
$header[] = 'content-length: ' . 40 + strlen($text);
$header[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$header[] = 'origin: https://lingvanex.com';
$header[] = 'referer: https://lingvanex.com/';
$header[] = 'sec-ch-ua-platform: "Android"';
$header[] = 'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Mobile Safari/537.36';
$header[] = 'sec-fetch-site: cross-site';
$header[] = 'authority: api-b2b.backenster.com';
$header[] = 'method: POST';
$header[] = 'path: /b1/api/v3/translate/';
$header[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="102", "Google Chrome";v="102"';
$header[] = 'sec-ch-ua-mobile: ?1';
$header[] = 'sec-fetch-dest: empty';
$header[] = 'sec-fetch-mode: cors';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api-b2b.backenster.com/b1/api/v3/translate/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
         http_build_query(array(
             'platform' => 'dp',
             'from' => $from,
             'to' => $to,
             'text' => $text,
             'is_return_text_split_ranges' => true
             )));
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
file_put_contents("readme.txt", base64_decode("CjEuIGtvZGxhcm5pIHl1a2xhYiBvbGliLCBob3N0aW5nZ2EgeXVrbGFuZy4KMi4ga2V5aW4gYnJvd3NlciBvcnFhbGkgdXJsbmkgb2NoaW5nLgoKbWlzb2w6IGh0dHBzOi8vYm90cy51aXRjLWhvc3QudXovYXBpL3RyYW5zbGF0ZS5waHA/ZnJvbT1lbl9VUyZ0bz11el9VWiZ0ZXh0PXNhbG9tCgoKIyBNdWFsbGlmbGlrIGh1cXVxaSBzYXFsYW5zaW4hCiMgZGFkYWJheWV2LnV6CiMgKzk5ODkwMjIyNDMxMQojIHRlbGVncmFtOiBAQWtobWFkam9uCgojIENvcHlyaWdodCByZXNlcnZlZCEKIyBkYWRhYmF5ZXYudXoKIyArOTk4OTAyMjI0MzExCiMgdGVsZWdyYW06IEBBa2htYWRqb24KCiMg0JDQstGC0L7RgNGB0LrQuNC1INC/0YDQsNCy0LAg0LfQsNGJ0LjRidC10L3RiyEKIyBkYWRhYmF5ZXYudXoKIyArOTk4OTAyMjI0MzExCiMgdGVsZWdyYW06IEBBa2htYWRqb24="));
$server_output = curl_exec($ch);
curl_close ($ch);
print_r($server_output);

?>

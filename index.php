<?php
  $fuck_your_shit_reasons = array(
  	"And oh yeah, fuck you.",
  	"Oh, and fuck your ticket edit.",
    "That edit was cray, brah. Rethink yourself.",
    "If the problem persists, please open a JIRA ticket."
  );
  $fuck_your_shit_reason = $fuck_your_shit_reasons[rand(0, count($fuck_your_shit_reasons) - 1)];
  $fuck_up_reasons = array(
    'internal_error_clang' => array(
      'title' => "500 Internal Server Error",
      'heading' => "Internal Server Error",
      'message' => "Something inside the server is making an awful clanging."
    ),
    'unavailable_underappreciation' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to over-subscription and underappreciation."
    ),
    'unavailable_capacity' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to failure of air conditioning units."
    ),
    'unavailable_fuckyou' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request because fuck you, that's why."
    ),
    'unavailable_trylater' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your petty request. Honestly bro, I'd just try again later."
    ),
    'bad_gateway_attitude' => array(
      'title' => "502 Bad Gateway",
      'heading' => "Bad Gateway",
      'message' => "The proxy server recieved an invalid response from an upstream server with an attitude problem."
    ),
    'gateway_timeout_please_jira' => array(
      'title' => "504 Gateway Timeout",
      'heading' => "Gateway Timeout",
      'message' => "The server was acting as a gateway or proxy and did not receive a timely response from the self important upstream server."
    ),
  );
  $fuck_up_reason_index = array_keys($fuck_up_reasons);
  $fuck_up_panicked_answer_index = rand(0, count($fuck_up_reason_index) - 1);
  $fuck_up_panicked_answer_key = $fuck_up_reason_index[$fuck_up_panicked_answer_index];
  $fuck_up_bullshit_excuse_du_jour = $fuck_up_reasons[$fuck_up_panicked_answer_key];
  $fuck_up_bullshit_excuse_title = $fuck_up_bullshit_excuse_du_jour['title'];
  $fuck_up_bullshit_excuse_heading = $fuck_up_bullshit_excuse_du_jour['heading'];
  $fuck_up_bullshit_excuse_message = $fuck_up_bullshit_excuse_du_jour['message'];


$html_out = <<<HTML
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
  <head>
    <title>$fuck_up_bullshit_excuse_title</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48981517-2', 'isthejiradown.com');
  ga('send', 'pageview');

</script>

  </head>
  <body>
    <h1>$fuck_up_bullshit_excuse_heading</h1>
    <p>$fuck_up_bullshit_excuse_message</p>
    <p>$fuck_your_shit_reason</p>
  </body>
</html>
HTML;

echo $html_out;

?>

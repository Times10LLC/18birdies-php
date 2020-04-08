<?php
if ($_SERVER['REMOTE_ADDR'] == '173.46.64.98') {
    $homeUrl = "/18birdies/";
} else {
    $homeUrl = "/";
}

$fb = "https://www.facebook.com/18birdies";
$twitter = "https://www.twitter.com/18BirdiesApp";
$ig = "https://www.instagram.com/18BirdiesApp";
$linkedin = "https://www.linkedin.com/company/18birdies";
$youtube = "https://www.youtube.com/18birdies";

$googleapplink = "https://18birdies.app.link/kJ61XNrcLT";
$appstorelink = "https://18birdies.app.link/3YCa2khcLT";

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="description" content="<?php if(isset($description)) { echo $description; }else{ echo ''; } ?>">
  <title><?php if($page != "home"){ echo "$title | "; } ?>18birdies</title>

  <link rel="stylesheet" href="assets/css/author.min.css?v=<?php echo filemtime('assets/css/author.min.css'); ?>">

  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="assets/img/favicons/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="assets/img/favicons/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="assets/img/favicons/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="assets/img/favicons/mstile-310x310.png" />


  <meta name="twitter:card" value="summary">

  <!-- Open Graph data -->
  <meta property="og:title" content="Rewash" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.18birdies.com" />
  <!-- <meta property="og:image" content="https://www.rewash.com/assets/img" /> -->
  <meta property="og:description" content="<?php if(isset($description)) { echo $description; }else{ echo ''; } ?>" />

</head>

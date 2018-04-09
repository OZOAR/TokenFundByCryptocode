<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/media.css">
  <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  @guest
    <script src=/js/index.js></script>
    <script src=/js/textAnimation.js></script>
    <script src=/js/form.js></script>
    <script src=/js/signInUser.js></script>
    <script src=/js/signUpUser.js></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpxglI-rL4d2J_PRe1uixVbWFRgvWsQCs"></script>
    <script src=/js/map.js></script>
    <script src=/js/tabs.js></script>
  @else
    <script src=/js/logout.js></script>
  @endguest
  <title>vidInvest</title>
</head>

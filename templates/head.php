<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

<style>

.nav-primary li:first-child {
  padding-left: 0;
}

.nav-primary li a {
  color: #ddd;
}

.nav-primary li a:hover {
  text-decoration: underline;
  color: #fff;
}

.search-field {
  margin-right: 1em;
}

.fa {
  margin-right: 2px;
}

footer div br {
  display: none;
}

footer .container div {
  text-align: center;
  padding: 0.2em 0;
}

@media (max-width: 991px) {
  #header {
    height: 174px;
  }
  header .alignleft {
    width: 50%;
  }
}

@media (max-width: 767px) {
  #header {
    height: 241px;
  }
  .nav-primary {
    font-size: 0.8em;
  }
  .nav-primary li {
    padding: 0.7em;
  }
  header .alignleft {
    width: 100%;
    text-align: center;
    margin-right: 0;
  }
  header .alignleft > p {
    margin-bottom: 0;
  }
  header .alignright {
    width: 100%;
    text-align: center;
    margin-left: 0;
  }
  .logo img {
    width: 45%;
  }
}

</style>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>

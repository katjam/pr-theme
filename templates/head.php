<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

<style>
html,
body {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Lato', sans-serif;
}

body {
  background: url(https://dev.mordaunts.co.uk/wp-content/themes/pr/dist/images/pr-bg.png);
}

a {
  color: #213177;
}

a:hover {
  color: #405cd4;
}

#wrapper {
  min-height: 100%;
  position: relative;
}

#header {
  background: #020d4c;
  padding: 10px;
  height: 150px;
}

header .alignright {
  text-align: right;
  margin-top: 0.6rem;
  font-size: 0.9em;
}

header .alignright > div:first-child {
  padding-bottom: 5px;
}

header .numbers span {
  display: block;
  color: #ddd;
}

header .mailto a {
  color: #ddd;
}

#content {
  padding-bottom: 144px; /* Height of the footer element */
}

#footer {
  background: #15161b;
  width: 100%;
  height: 144px;
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 1em;
  color: #575a69;
  font-size: 0.8em;
}

nav {
  background-color: #15161b;
}

.main {
  background: none;
}

.content {
  padding-top: 3em;
  background: url(../images/pr-bg.png);
}

.nav-primary li {
  padding: 1em;
}

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

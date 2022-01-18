<?php header("Content-Type: text/css; charset=utf-8"); ?>

body{
    font-family: sans-serif;
    background-color: #406882;
    padding-bottom: 10vh;
}

#menu{
  top: 0;
  left: 0;
  background-color: #1A374D;
  position: fixed;
  width: 100%;
  z-index:100;
}

#menu li{
  display: inline-block;
  font-weight: bold;
  padding: 0.5vh 2vh;
  border: 1px #B1D0E0 solid;
  background-color: #6998AB;
}

h1{
  color: #1A374D;
}

#menu a {
  text-decoration: none;
  color: #1A374D;
}

#menu a:hover{
  background-color: #1A374D;
  text-decoration: underline;
  color: #B1D0E0;
}

.corpo{
  width: 60%;
  margin: 10vh auto;
  text-align: justify;
  background-color: #6998AB;
  padding: 2em 3em;
  border: 2px solid #B1D0E0;
}

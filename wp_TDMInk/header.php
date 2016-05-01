<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
      <title> <?php wp_title(); ?></title>   
    <?php wp_head(); ?>    
  </head>
    <body>
        <header>
            <div class="container-fluid">
             <div class="title">
                    <img src="img/books.png" alt="static book header" width=100%>
            </div>
                <img class="logo center-block" src="img/logo.png" alt="TDM, Ink logo" width=50%>
                <h3>
                    <a href="/bio.html">bio</a>|~|
                    <a href="/blog.html">blog</a>|~|
                    <a href="<?php bloginfo('url');?>">home</a>
                </h3>
            </div>
        </header>


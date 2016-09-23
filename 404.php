<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<head>
    <style type="text/css">
a {
  color: #6699cc;
  transition: color .3s;
  text-decoration: none;
}

a:hover {
  color: #000;
}

  #container {
    margin: 0 auto;
    max-width: 960px;
  }

  #tangram {
    height: 0;
    width: 40%;
    padding-top: 38%;
    position: relative;
    margin: 0 auto;
    margin-top: 10%;
  }

  svg {
    position: absolute;
    top: 0;
    left: 0;
  }

  #description {
    margin-top: 10%;
    text-align: center;
  }
  .footer {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 34px;
    width: 100%;
    line-height: 20px;
    text-align: center;
    font-family: sans-serif;
	   
}
    </style>
  </head>
  <body>
    <div id="container">
      <div id="tangram">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path style="fill: #5862e4" d="M0 0 L0 300 L150 150 Z" />
          <path style="fill: #d67756" d="M0 0 L300 0 L150 150 Z" />
          <path style="fill: #973a34" d="M0 300 L150 300 L75 225 Z" />
          <path style="fill: #c93a8a" d="M150 300 L75 225 L150 150 L225 225 Z" />
          <path style="fill: #494c8f" d="M150 150 L225 75 L225 225 Z" />
          <path style="fill: #80ac53" d="M225 75 L300 0 L300 150 L225 225 Z" />
          <path style="fill: #ffef54" d="M150 300 L300 150 L300 300 Z" />
        </svg>
      </div>

      <div id="description">
        <p>Ooops, this page doesn't exist. Go <a href="<?php $this->options->siteUrl(); ?>">somewhere</a> else? :)</p>
      </div>
    </div>
    <?php $this->need('footer.php'); ?>

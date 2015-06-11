<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/main.css">

    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Bcrypt Generator</a>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>Encrypt</h2>
          <p>Use this part of the site to encrypt your string. The result will be a bcrypt encrypted hash.</p>
          <form method="POST" role="form">
            <div class="form-group">
              <input type="hidden" name="method" value="hash"/>
              <input autofocus type="text" class="form-control" id="stringToHash" name="stringToHash" placeholder="Enter string to bcrypt..."/>
            </div>   
            <div class="form-group">
              <input readonly type="text" class="form-control" id="hashResult" value="<?php echo $hashResult;?>">
            </div>      
            <button type="submit" class="btn btn-default btn-sm">Submit</button>    
          </form>
        </div>
        <div class="col-md-6">
          <h2>Decrypt</h2>
          <p>Here you can test your password hash against a plaintext password, to see if they match.</p>
          <form method="POST" role="form">
            <input type="hidden" name="method" value="check"/>
            <div class="form-group">
              <input type="text" class="form-control" id="stringToHash" name="plainText" placeholder="Enter the plain text string...">
            </div>      
            <div class="form-group">
              <input type="text" class="form-control" id="stringToHash" name="hashText" placeholder="Enter hash to check against...">
            </div>
            <button type="submit" class="btn btn-default btn-sm">Submit</button>
            <?php if (isset($hashCheck) && $hashMatches == 1) { ?>
              <div class="pull-right col-md-7 label label-success">Hash match!</div>
            <?php } elseif (isset($hashCheck) && $hashCheck == true && $hashMatches !== 1) { ?>
              <div class="pull-right col-md-7 label label-danger">No match!</div>
            <?php } ?> 
          </form>
       </div>
      </div>

      <hr>

      <footer>
        <a href="https://github.com/olipayne/BcryptGenerator"><img style="z-index:10000; position: fixed; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
        <p>&copy; <a target="_blank" href="https://github.com/olipayne">Oliver Payne</a> <?php echo date("Y");?></p>
      </footer>
    </div> <!-- /container -->
    </body>
</html>

<html>
   <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
 <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
	
<body>
     <div class="jumbotron">
		<h2>Su Comentario no pudo ser enviada debido a que:</h2>
                <p><?php echo $error; ?></p>
                <p>Haga <a href="javascript:history.back()">click aqu&iacute;</a> para volver a ventamex.net</p>
      </div>
	  
	           
</body>
</html>
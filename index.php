<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>DreadTracker</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>DreadTracker</h1>
  <p>Inexplicably feeling the icy grip of death? Make a note here so you can figure out why.</p>
  <p class="flash">Dread event submitted.</p>
  <p class="error">That didn't work. Try again.</p>
  <form action="track.php" method="post">
    <label>Description of feeling</label>
    <textarea name="feeling_description" required></textarea>
    <label>What you were doing before</label>
    <textarea name="doing_before" required></textarea>
    <input type="submit">
  </form>



  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
  <script>
    $(function(){
      $('form').on("submit", function(e){
        e.preventDefault();

        $.post($('form').attr('action'), $('form').serialize())
          .done(function(){
            $('form')[0].reset();
            $('.flash').fadeIn().delay(5000).fadeOut();
          }).fail(function(){
            $('.error').fadeIn().delay(5000).fadeOut();
          });
      })
    });

  </script>
</body>
</html>
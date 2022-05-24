<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="./style/st3.css" />
  </head>
  <body>
    <div class="layout">
      @include('old.upbar')
    </div>
    <div class="form">
      <p class="p1">Sign Up</p>
      <p class="p2"><a>Please choose what you are</a></p>
      <button class="submit" type="button"><a href="/sign-user">Sign Up as User</a></button>
      <button class="submit" type="button"><a href="/sign-company">Sign Up as Company</a></button>
    </div>

  </body>
</html>

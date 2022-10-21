<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>
  <body id="index" class="js-fullheight text-center">
    
<main class="form-signin">
  <form>
    <img class="mb-2" src="/images/Cat_logo.png" alt="" width="150" height="150">
    <h1 class="h1 mb-3 fw-normal heading-section">Please sign in</h1>
    <div class="form-group">
          <input type="email" class="form-input" id="floatingInput" placeholder="Username" required>
    </div>
    <div class="form-group">
          <input type="password" class="form-input" id="floatingPassword" placeholder="Password" required>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>

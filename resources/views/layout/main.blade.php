<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>We Shop | {{ $title }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">We Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('products') ? 'active' : ''  }}" href="/products">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('cart') ? 'active' : ''  }}" href="/cart">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('checkout') ? 'active' : ''  }}" href="/checkout">CheckOut</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('summary') ? 'active' : ''  }}" href="/summary">Sumary</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="btn btn-primary"> Login</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
          @yield('container')
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
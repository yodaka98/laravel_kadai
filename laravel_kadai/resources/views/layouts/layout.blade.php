<html>
  <head>
    <title>Login/Register</title>
    <style>
      /* CSS記述する */
      .header {
        background-color: #FFFFFF;
        height: 100px;
      }

      body {
        font-family: 'Century Gothic';
        background-color: #F7FAFC;
      }

      .form-header { 
        background-color: #F7F7F7;
      }

      .form-contents {
        background-color: #FFFFFF;
        }

      .header-logo {
        float: left;
        padding: 30px;
      }

      .header-list {
        float: right;
      }

      li {
        list-style: none;
        float: left;
        margin-right: 20px;
        padding-top: 10px;
      }
    </style>
  </head>

  <body>
    <div class="header">
      <div class="header-logo">Laravel</div>
      <div class="header-list">
        <ul>
          <li><a href="{{ url('login') }}">Login</a></li>
          <li><a href="{{ url('register') }}">Register</li>
        </ul>
      </div>
    </div>

    <div class="form">
      <div class="form-header">@yield('title')</div>
      <div class="form-contents">
        @yield('contents')
      </div>
    </div>
  </body>

</html>
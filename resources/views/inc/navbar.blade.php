<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><button class="btn {{Request::is('home') ? 'active' : ''}}"><a href="/home">Home</a></button></li>
        <li><button class="btn {{Request::is('about') ? 'active' : ''}}""><a href="/about">About</a></button></li>
        <li><button class="btn {{Request::is('contact') ? 'active' : ''}}""><a href="/contact">Contact</a></button></li>
      </ul>
  </div>
</nav>
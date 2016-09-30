<!-- patterns/examples/e_layout.php -->
<header>
  {{$ header }}
    <h1>{{$ title }}My Awesome Site{{/ title }}</h1>
  {{/ header }}
</header>
<div id="content">
  {{$ content }}
    <p>Hello, World!</p>
  {{/ content }}
</div>
{{$ scripts }}
  <script src="/assets/js/default.js"></script>
{{/ scripts }}
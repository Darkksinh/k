
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <html>
  <head>
    <title>Wiki teste api</title>
  </head>
  <body>
    <div id="content"></div>
    <script>
      function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById("content").innerHTML += "<br>" + item.htmlTitle;
      }
    }
    </script>
    <ul class="api">
 <li class="api-item"><a href="api" 
    <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyCcDWfGexWwNfup3ux_LGxPkw1ZDQ8nnGw&cx=017576662512468239146:omuauf_lfve&q=cars&callback=$api">
    </script>
  </body>
</html>

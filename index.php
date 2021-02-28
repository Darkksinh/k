<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <html>
  <ul class="api"> 
  <head>
    <title>Wiki teste api</title>
  </head>
  <body>
    <div id="content"></div>
    <script>
      function hndlr(response) {
      {"nome":"higor","nick":"Dark","sexo":"M - Masculino","numero":"5522996215481","yt":"https://bit.ly/2ZINr1x","insta":"sem no momento"}
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById("content").innerHTML += "<br>" + item.htmlTitle;
      }
    }
    </script>
    <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyCcDWfGexWwNfup3ux_LGxPkw1ZDQ8nnGw&cx=017576662512468239146:omuauf_lfve&q=cars&callback=hndlr">
    </script>
  </body>
</html>

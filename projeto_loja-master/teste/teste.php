<html>

    <head>
        <title></title>
        <link rel="stylesheet" href="../assets/css/teste.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
        $(document) . ready (function(){

          $("#abas ul li").click(function(){

              $("#abas ul li").removeClass("selecionado");

              $(this).addClass("selecionado");

              var idAba = $(this).attr("id");

              $(".conteudo").hide();

              $("."+idAba).show();



        });
        });
        </script>
    </head>

    <body>
    <div id="abas">
        <ul>
            <li id="aba1">Aba 1</li>
            <li id="aba2">Aba 2</li>
            <li id="aba3">Aba 3</li>
        </ul>
    </div>

    <div class="conteudo aba1">
        Conteudo 1
    </div>

    <div class="conteudo aba2">
        Conteudo 2
    </div>

    <div class="conteudo aba3">
        Conteudo 3
    </div>
    </body>



</html>
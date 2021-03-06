<!DOCTYPE html>
<html>
    <head>
        <title>PAMS</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset='utf-8' />
        {* -------  Fonts Start ------ *}
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {* -------  Fonts End  ------- *}
        {* -------  CSS Start  ------- *}        
        <link type="text/css" rel="stylesheet" href="/pm/bin/materialize/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/pm/bin/custom/css/main.css">
        {* -------  CSS End  ------- *}
        {* -------  JS Start  ------- *}
        <script type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/main.js"></script>
        {* -------  JS End  ------- *}
    </head>

    <body>
        <!-- Header -->       
        {*include file="header.tpl"*}

        <!-- Navigation -->
        <nav class="white" role="navigation">
            {include file="navigation.tpl"}
        </nav>

        <!-- Inhalt -->
        <div class="container">
            {include file=$page}
        </div>
        <!-- Footer -->
        {*include file="footer.tpl"*}

        {include file="fixed_menu_button.tpl"}

    </body>
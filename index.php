<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Index - Materialize</title>
    <!--materialzie css-->
    <link rel="stylesheet" href="css/materialize.css">
</head>
<body >
    
    <div class="row"></div>
    <div class="row blue ">
        <div class="col l4 push-l4 white">
            <form class="col s12">
            <div class="row center">
                <img src="img/logo.png" alt="Logo Cliente" class="resposive" width="170px">
                <div class="col l12  center">   
                    <div class="row">
                        <div class="input-field col s12 ">
                            <input id="user_1" type="text" class="validate">
                            <label for="user_1">Usuário</label>
                        </div>
                    </div>               
                </div>
            </div> 
            <div class="row">
                <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                </div>
            </div>
            </form>
            </div>    
        </div>        
    <div>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.js"></script>
</body>
</html>
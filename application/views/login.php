<title><?php echo $titulo; ?></title>
<?php
   

echo "<link rel='stylesheet' href='".base_url('assets/bootstrap/css/bootstrap.min.css')."'>";
echo "<script type=text/javascript src='".base_url('assets/bootstrap/js/bootstrap.min.js')."'></script>";

?>

<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">

            <form id="loginform" class="form-horizontal" role="form" method="POST" action="">

                    <h4>Welcome back.</h4>
                     <input type="text" id="userName" name="userName" class="form-control input-sm chat-input" placeholder="username" />
                     </br>
                     <input type="text" id="userPassword" name="userPassword" class="form-control input-sm chat-input" placeholder="password" />
                      </br>
                      <div class="wrapper">
                        <span class="group-btn">     
                    <input type="submit" class="btn btn-primary btn-md" value="Enviar Dados"/>
            </span>
            </div>
            </div>
             </form>
        </div>
    </div>
</div>
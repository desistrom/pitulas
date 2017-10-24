<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Login Data KB</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="assets/css/matrix-login.css" />
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <div class="row" >
                 <div class="control-group normal_text"> <h3><img src="assets/images/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="username" type="text" placeholder="Username" />
                        <div class="error" id="ntf_username"></div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="password" type="password" placeholder="Password" />
                        <div class="error" id="ntf_password"></div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><a type="submit" id="submit" class="btn btn-success" /> Login</a></span>
                </div>
                <div class="error_pass"></div>
            </div>
        </div>
        
        <script src="assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('body').on('click','#submit', function(e){
                    console.log( 'anu');
                    var form_data = new FormData();
                    form_data.append('username', $('input[name="username"]').val());
                    form_data.append('password', $('input[name="password"]').val());
                    e.preventDefault();
                    var url = url;
                    $.ajax({
                        beforeSend: function() {
                            //$('#login-page #loadingDiv').show();
                        },
                        url : '<?=site_url("login");?>',
                        type : 'POST',
                        dataType : 'json',
                        data : form_data,
                        async : false,
                        cache : false ,
                        contentType : false , 
                        processData : false
                    }).done(function(data){
                        if(data.state == 1){
                            if (data.status == 1) {
                                window.location.href = data.url;
                            }else{
                                $('.error_pass').show();
                                $('.error_pass').css({'color':'red', 'font-style':'italic', 'text-align':'center'});
                                $('.error_pass').html(data.error)
                            }
                        }else{
                            $.each(data.notif,function(key,value){
                            $('.error').show();
                            $('#ntf_'+ key).html(value);
                            $('#ntf_'+ key).css({'color':'red', 'font-style':'italic'});
                            console.log(data.notif.result);
                            });
                        }
                    }).fail(function(xhr, status, error){
                        alert(xhr.responseText);
                    });
                });
            });
        </script>  
        <script src="assets/js/matrix.login.js"></script> 
    </body>

</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>Login Panel Administrator Sistem Informasi Kampus</title> 
        <link rel="stylesheet" href="media/css/login.css" type="text/css" media="screen" title="default" /> 
    </head> 
    <body> 
        <div id="container">
            <div id="image"></div>
            <div id="loginbox">
                <form action="cek_login.php?op=in" method="post">
                    <table>
                        
                        <tr>
                            <td>Username</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="username"/></td>
                        </tr>
                        <tr> 
                            <td>Password</td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" value=""  onfocus="this.value=''"/></td>
                        </tr>
                        <tr>
                            <td id="button"><input type="reset" value="RESET" name="reset" /><input type="submit" value="LOGIN" name="login" /></td> 
                        </tr> 
                    </table>
                </form>
            </div>
        </div>
    </body> 
</html> 
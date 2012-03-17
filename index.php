<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"> 
<html>
  <head>
    <? include "php_index.php"; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=9"> </meta>
    <link rel="stylesheet" type="text/css" href="styles/style_index.css">
    <script type="text/javascript" src="scripts/formCheck.js"></script>
  </head>
  
  <body>
    
    <table class="main">
      <tr>
        <td class="welcomeMessageBox">
          </br>
          <center>
            <span class="welcomeMessage">WELCOME TO MAT</span>
          </center>
        </td>
      </tr>
      <tr>
        <td>
          <table class="registerAndLogin">
            <tr>
              <td class="loginTitle"><center></br><u>Login</u></center></td>
              <td class="registerTitle"><center></br><u>Register</u></center></td>
            </tr>
            <tr>
              <td class="loginBox">
                <table>
                  <tr>
                    <td class="loginBoxSpacer"></td>
                    <td>
                      <form name="input_login" action="index.php" method="POST" class="loginForm">
                        <table>
                          <tr>
                            <th colspan="2">&nbsp
                              <? showLoginMessage($loginSuccess) ?>
                            </th>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">Account Name:</span></td>
                            <td class="leftAlign"><input type="text" name="accountName"></br></td>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">Password:</span></td>
                            <td class="leftAlign"><input type="password" name="password"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><input type="submit" value="Start" /></td>
                          </tr>
                        </table>
                      </form>
                    </td>
                    <td></td>
                  </tr>
                </table>
              </td>
              <td class="registerBox">
                <table>
                  <tr>
                    <td class="registerBoxSpacer"></td>
                    <td>
                      <form name="input_register"  action="index.php" class="registerForm" onsubmit="return checkRegForm()" method="POST">
                        <table class="table_register">
                          <tr>
                            <th colspan="2" class="tryAgainMessageBox">
                              <span id="inputErrorMessage" class="tryAgain">&nbsp
                                <? showRegisterMessage($registerSuccess); ?>
                              </span>
                            </th>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">First Name:</span></td>
                            <td><input id="reg_firstName" type="text" name="firstName"></td>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">Last Name:</span></td>
                            <td><input id="reg_lastName" type="text" name="lastName"></td>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">Password:</span></td>
                            <td><input id="reg_password1" type="password" name="password1"></td>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">Repeat Password:</span></td>
                            <td><input id="reg_password2" type="password" name="password2"></td>
                          </tr>
                          <tr>
                            <td class="rightAlign"><span class="regularText">Account Name:</span></td>
                            <td><input id="reg_accountName" type="text" name="accountName"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><input id="submitButton" type="submit" value="Create"/></td>
                          </tr>
                        </table>
                      </form>
                    </td>
                    <td></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table> 
        </td>
      </tr> 
      <tr>
        <td class="loginMessageBox">
          Copyright &copy; Shun Yu 2012-2012
        </td>
      </tr>
    </table>
  </body>
</html>




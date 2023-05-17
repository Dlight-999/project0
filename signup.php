

<html>
    <head>

    </head>
    <body>
        <script>
            function validation(){
                let uname = document.forms['signup']['uname'].value;
                let email = document.forms['signup']['email'].value;
                let phone = document.forms['signup']['phone'].value;
                let pass1 =document.forms['signup']['pass1'].value;
                let pass2 =document.forms['signup']['pass2'].value;
                let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                if(uname == ""){
                    document.getElementById("unameer").innerText="Username can't be empty";
                    return false;
                }
                else if(uname.length<4){
                    document.getElementById("unameer").innerText="username must be longer than 4 letters    ";
                    return false;
                }
                else if(!email.match(validRegex)){
                    document.getElementById("emailer").innerText="Email not valid";
                    return false;
                }
                else if(isNaN(phone)){
                    document.getElementById("phoneer").innerText="Enter valid number";
                    return false;
                }
                else if(phone.length!==10){
                    document.getElementById("phoneer").innerText="Phone number must be of 10 digit";
                    return false;
                }
                else if(pass1==""){
                    document.getElementById("pass1er").innerText="Password can't be empty   ";
                    return false;
                }
                else if(pass1.lengt<=8){
                    document.getElementById("pass1er").innerText="Password must have length of 8 atlest";
                    return false;
                }
                else if(pass2==""){
                    document.getElementById("pass2er").innerText="Password can't be empty   ";
                    return false;
                }
                else if(pass2.lengt<=8){
                    document.getElementById("pass2er").innerText="Password must have length of 8 atlest";
                    return false;
                }
                else if(pass1 !== pass2){
                    document.getElementById("pass1er").innerText="Password must be same";
                    return false;
                }
            }
        </script>
        <form action="server.php" method="post" name="signup" onsubmit="return validation()">    
        Full Name: <p id="unameer"> </p> 
        <input type="text" name="uname"><br>
        Email: <p id="emailer"></p>
        <input type="text" name="email"><br>
        Phone number: <p id="phoneer"> </p>
        <input type="text" name="phone"> <br>
        Password: <p id="pass1er"> </p>
         <input type="password" name="pass1"><br>
        Confirm Password: <p id="pass2er"> </p>
         <input type="password" name="pass2"><br>
        <input type="submit" value="Submit">
        </form>
        
    </body>
</html>

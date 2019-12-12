<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
    </head>
    
    <style>
    
    *{margin: 0; padding: 0;}
     body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-size: cover;
        }
        .header1{
			padding-left: 510px;
			padding-top: 20px;
		}
    .form-wrap{ width: 320px; height: 430px; background: #3e3d3d; padding: 30px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
    h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
            
    input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}

    select{width: 100%; background: black; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
            
    input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
    input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}
            
            ::placeholder{color: #fff;}
    p{
        color: white;
        font-size: 12px;
    }
    p a{
        color: white;
    }
    a{
        padding-left: 110px ;
        color:  #616b2a
    }
    
    </style>

    <body>
        <div class="form-wrap">
            <form method="post">
                @csrf
                <h1>User Registration</h1>
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Phone Number" name="phone">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="register" name="submit">  
            </form>
        </div>
    </body>



</html>
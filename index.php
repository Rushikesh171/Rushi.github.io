<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<Style>
    . {
        margin: 0;
        padding: 0;
        box-sizing: border-box;


    }
    body{
        margin: 0;
        padding: 0;
        display: black;
        background: url(img/manbg.jpg);
      
        height: 100%;
	     width: 100%;
 	   /* background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(img/bg-2.jpg); */
	 color: black;
	background-size: cover;
	position: absolute;
}
    overflow: hidden;
    
	position: absolute;
        /* background-image: url(img/med1.png);
        /* background-image: url("img/med3.png"); */
        /* background-color: rgb(149, 235, 149); */
        /* height: auto; */
        /* width: auto; */ 
   

    }
  

    }
    img{
        border: 2px solid black;
    width: 100%;
    }
    h1{
        /* border: 2px solid red; */
        background-color: grey;
        padding: 30px;
        width: 750px;
        font-weight: bolder;
        margin: 30px;
        color: white;
        text-align: center;
        text-decoration: solid;
        text-shadow: 2px;
        font-size: 40px;
    }
    .para{
         /* border: 2px solid black; */
    text-align: center;
    margin: 100px 20px;
    height: auto;
    width: 645px;
    color: black;
    font-size: 70px;
    font-weight: bolder;
    font-family: 'Ubuntu', sans-serif;

    }
    .btn{
        border: 2px solid black;
    align-items: center;
    font-size: 30px;
    display: flex;
    flex-direction: column;
    margin: -44px 260px;
    width: 205px;
    padding: 20px 8px;
    cursor: pointer;
    background-color: white color: black;
    font-weight: bolder;
    border-radius: 20px;
}
    
    .btn:hover{
            background-color: blue;
            color: black;
            text-decoration: underline;
        }
        img{
            height: fit-content;
            width: fit-content;
        }
</Style>
<body>
    
    

    <div class="container">
        <h1>
            <header>
            
                MEDonate 
            </header>
        </h1>
        <p class="para">
           "Donate&nbsp; Medicines , <br>Save&nbsp; Lives..."

        </p>
        <button class="btn" onclick="location.href='page.php'">Donate Now</button>
    </div>
</body>

</html>
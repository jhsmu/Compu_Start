*{
    box-sizing: border-box;
}
body{
    background: #ccc;
}
.inicio{
    align-items: center;
    display: flex;
    font-family: 'Shantell Sans', cursive;
    /* background: #ccc; */
    justify-content: center;
    flex-direction: column;
    min-height: 100%;
    margin: 3%;
}
.container{
    position: relative;
    width: 768px;
    max-width: 100%;
    min-height: 580px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-sizing: 0 14px 28px rbga(0,0,0,0.25),
                0 10px 10px rbga(0,0,0,0.22);
}
.sign-up, .sign-in{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}
.sign-up{
    width: 50%;
    opacity: 0;
    z-index: 1;
}
.sign-in{
    width: 50%;
    z-index: 2;
}
form{
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 20px;
    height: 100%;
    text-align: center;
}
h1{
    font-family: 'Shantell Sans', cursive;
    font-weight: bold;
    margin: 0;
}
p{
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 15px 0 20px;
}
input{
    background: #eee;
    padding: 12px 15px;
    margin: 8px 15px;
    width: 100%;
    border-radius: 5px;
    border: none;
    outline: none;
}
a{
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}
button{
    color: #fff;
    background: #ff4b2b;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 55px;
    margin: 20px;
    border-radius: 20px;
    border: 1px solid #ff4b2b;
    outline: none;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    cursor: pointer;
}
button:active{
    transform: scale(0.90);
}
#signUp, #signIn{
    background-color: transparent;
    border: 2px solid #fff;
}
.container.right-panel-active .sign-in{
    transform: translateX(100%);
}
.container.right-panel-active .sign-up{
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}
.overlay-container{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}
.container.right-panel-active .overlay-container{
    transform: translateX(-100%);
}
.overlay{
    position: relative;
    color: #fff;
    background: #ff416c;
    left: -100%;
    height: 100%;
    width: 200%;
    /* background: linear-gradient(to right,#E0144C, #FF5858); */
    /* background: linear-gradient(to right,#630000, #A13333); */
    /* background: linear-gradient(to right,#FFD07F, #FDA65D); */
    background: linear-gradient(to right,#1B120F, #7a7a7a);
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}
.container.right-panel-active .overlay{
    transform: translateX(50%);
}
.overlay-left, .overlay-right{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}
.overlay-left{
    transform: translateX(-20%);
}
.overlay-right{
    right: 0;
    transform: translateX(0);
}
.container.right-panel-active .overlay-left{
    transform: translateX(0);
}
.container.right-panel-active .overlay-right{
    transform: translateX(20%);
}
.social-container a{
    height: 40px;
    width: 40px;
    margin: 0 5px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 50%;
}
.social-container a:hover{
background: #AAAAAA;
}

/* Encabezado login */
header{
    background-image: url(https://www.solofondos.com/wp-content/uploads/2021/03/62dddd03bab522af0b94fa33fa1fa45d.jpg);
    background-position: 90px ;
    min-height: 250px;
    width: 100%;
}
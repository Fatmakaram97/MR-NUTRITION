<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "competition";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM info ORDER BY calories DESC LIMIT 1";
$res = mysqli_query($conn, $sql);
?>

<html>
  <head>
    <title>Choose food</title>
    <style>
    body {
    	margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url(n.jpg);
        background-size: cover;
        overflow: scroll;
    }
      .table{
        color:White;
        margin: 40px;
        padding: 40px;
      }
      .p{
        color: White;
      text-align: left;
      }
      .s{
          color: White;
        position: absolute;
         left: 55%;
         top: 0;
      }
  .vl {
  border-left: 6px solid White;
  height: 800px;
  position: absolute;
  left: 52%;
  margin-left: -3px;
  top: 0;
}
.b1 {
background-color: White; /* Green */
border: 4px solid black;
color: black;
text-align: center;
font-size: 30px;
 }
    </style>
  </head>
  <body>

    <div class="p">
      <button class="b1" onclick="get()">Start</button>

      <h2>Food table</h2>
      <div class="table">
      <table border="3" style="width:50%">
        <tr>
          <th>Food Icon</th>
          <th>Properties</th>
        </tr>
        <tr>
          <td><img src="https://www.seriouseats.com/recipes/images/2017/08/5708631471_06fed03518_o.jpg" alt="eggs" width="150" hight="100"></td>
          <td>Boiled egg<br> Protein= 12.58g    Fat= 10.61g    Carbohydrates= 1.12g    Calories= 155g<br>
          <button onclick="pushFunction()">Add to select food</button>   <button onclick="removeElement()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://img-aws.ehowcdn.com/350x235p/s3-us-west-1.amazonaws.com/contentlab.studiod/getty/12ab428a702344108c58fc15f6d1f7e7.jpg" alt="spinach" width="150" hight="100"></td>
          <td>100gm spinach<br> Protein= 1.7g    Fat= 0.2g    Carbohydrates= 2.8g    Calories= 16g<br>
          <button onclick="pushFunction1()">Add to select food</button>   <button onclick="removeElement1()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://www.inspiredtaste.net/wp-content/uploads/2018/09/Easy-Oven-Baked-Salmon-Recipe-2-1200.jpg" alt="salmon" width="150" hight="100"></td>
          <td>Salmon<br> Protein= 19.84g    Fat= 6.34g    Carbohydrates= 0g    Calories= 142g<br>
          <button onclick="pushFunction2()">Add to select food</button>   <button onclick="removeElement2()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb9sWIDKgYkBhQwc7VI5cdwBPgF06Fpqr4_s-jdz7mY55S-x09" alt="brocoli" width="150" hight="100"></td>
          <td>Brocoli<br> Protein= 2.82g    Fat= 0.37g    Carbohydrates= 6.64g    Calories= 34g<br>
          <button onclick="pushFunction3()">Add to select food</button>   <button onclick="removeElement3()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://image.shutterstock.com/image-photo/boiled-cauliflower-260nw-665897695.jpg" alt="Cauliflower" width="150" hight="100"></td>
          <td>Bioled cauliflower<br> Protein= 1.84g    Fat= 0.45g    Carbohydrates= 4.11g    Calories= 23g<br>
          <button onclick="pushFunction4()">Add to select food</button>   <button onclick="removeElement4()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://www.nuggetmarket.com/media/images/00/03/top-sirloin-horiz.jpg" alt="beef" width="150" hight="100"></td>
          <td>100gm lean beef<br> Protein= 19.48g    Fat= 12.83g    Carbohydrates= 0g    Calories= 199g<br>
          <button onclick="pushFunction5()">Add to select food</button>   <button onclick="removeElement5()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://www.diabetesfoodhub.org/system/thumbs/system/images/recipes/450-diabetic-roasted-chicken-breast_shutterstock332807894_012919_2959761669.jpg" alt="chicken" width="150" hight="100"></td>
          <td>100gm chicken Breast<br> Protein= 16.35g    Fat= 12.89g    Carbohydrates= 17.56g    Calories= 252g<br>
          <button onclick="pushFunction6()">Add to select food</button>   <button onclick="removeElement6()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://100jewishfoods.tabletmag.com/wp-content/uploads/2018/02/tuna-fish.jpg" alt="tuna" width="150" hight="100"></td>
          <td>Tuna<br> Protein= 26.53g    Fat= 8.08g    Carbohydrates= 0g    Calories= 186g<br>
          <button onclick="pushFunction7()">Add to select food</button>   <button onclick="removeElement7()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://www.healthcastle.com/wp-content/uploads/2014/10/red-lentils-cooked.jpg" alt="lentils" width="150" hight="100"></td>
          <td>lentils<br> Protein= 24.63g    Fat= 1.06g    Carbohydrates= 63.35g    Calories= 352g<br>
          <button onclick="pushFunction8()">Add to select food</button>   <button onclick="removeElement8()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://traditionalcookingschool.com/blog/wp-content/uploads/2010/11/Cottage-Cheese-Traditional-Cooking-School-GNOWFGLINS-square-1.jpg" alt="cheese" width="150" hight="100"></td>
          <td>Cottage Cheese<br> Protein= 12.4g    Fat= 1g    Carbohydrates= 2.7g    Calories= 72g<br>
          <button onclick="pushFunction9()">Add to select food</button>   <button onclick="removeElement9()">Remove</button></td>
        </tr>
        <tr>
          <td><img src="https://www.tasteofhome.com/wp-content/uploads/2018/08/Smitten_Tyler-Robinson-with-Blind-Renaissance.jpg" alt="apple" width="150" hight="100"></td>
          <td>100gm apples<br>  Protein= 0.26g    Fat= 0.17g    Carbohydrates= 13.81g    Calories= 52g<br>
          <button onclick="pushFunction10()">Add to select food</button>   <button onclick="removeElement10()">Remove</button></td>
        </tr>


      </table>
      </div>
      </div>
      <div class="vl"></div>
      <div class="s">

        <h3>Your required calories=</h3>
        <p id="Cal"></p>

        <h2>Selected food:</h2>
      <p id="geeks"></p>

      <h3>Proteins=</h3>
    <p id="Pro"></p>

    <h3>Fats=</h3>
  <p id="Fat"></p>

    <h3>Carbohydrates=</h3>
  <p id="Carbo"></p>



  <button class="b1" type="button" onclick="window.location.href='final.html'">Done</button>

    </div>
    <script>
          var list = [];
          pro=0;
          fat=0;
          carbo=0;
          cal=<?php
          while($arr = mysqli_fetch_assoc($res)) {
            echo "{$arr['calories']}";
          }
          ?>;
          document.getElementById("geeks").innerHTML = list;
          function get(){
             document.getElementById("Pro").innerHTML = pro;
             document.getElementById("Fat").innerHTML = fat;
             document.getElementById("Carbo").innerHTML = carbo;
             document.getElementById("Cal").innerHTML = cal;
          }
          function pushFunction() {
              list.push("Egg",);
              document.getElementById("geeks").innerHTML = list;
              pro+=12.58;
               document.getElementById("Pro").innerHTML = pro;
               fat+=10.61;
               document.getElementById("Fat").innerHTML = fat;
               carbo+=1.12;
               document.getElementById("Carbo").innerHTML = carbo;
               cal-=155;
               document.getElementById("Cal").innerHTML = cal;
          }
          function removeElement(){
            const valuesToRemove = ["Egg"]
            list = list.filter(item => !valuesToRemove.includes(item))
            document.getElementById("geeks").innerHTML = list;
            pro-=12.58;
             document.getElementById("Pro").innerHTML = pro;
             fat-=10.61;
             document.getElementById("Fat").innerHTML = fat;
             carbo-=1.12;
             document.getElementById("Carbo").innerHTML = carbo;
             cal+=155;
             document.getElementById("Cal").innerHTML = cal;
          }
          function pushFunction1() {
              list.push("100gm spinach",);
              document.getElementById("geeks").innerHTML = list;
              pro+=1.7;
               document.getElementById("Pro").innerHTML = pro;
               fat+=0.2;
               document.getElementById("Fat").innerHTML = fat;
               carbo+=2.8;
               document.getElementById("Carbo").innerHTML = carbo;
               cal-=16;
               document.getElementById("Cal").innerHTML = cal;
             }
          function removeElement1(){
            const valuesToRemove = ["100gm spinach"]
            list = list.filter(item => !valuesToRemove.includes(item))
            document.getElementById("geeks").innerHTML = list;
            pro-=1.7;
             document.getElementById("Pro").innerHTML = pro;
             fat-=0.2;
             document.getElementById("Fat").innerHTML = fat;
             carbo-=2.8;
             document.getElementById("Carbo").innerHTML = carbo;
             cal+=16;
             document.getElementById("Cal").innerHTML = cal;
          }
          function pushFunction2() {
             list.push("salmon",);
             document.getElementById("geeks").innerHTML = list;
             pro+=19.84;
              document.getElementById("Pro").innerHTML = pro;
              fat+=6.34;
              document.getElementById("Fat").innerHTML = fat;
              carbo+=0;
              document.getElementById("Carbo").innerHTML = carbo;
              cal-=142;
              document.getElementById("Cal").innerHTML = cal;
         }
         function removeElement2(){
           const valuesToRemove = ["salmon"]
           list = list.filter(item => !valuesToRemove.includes(item))
           document.getElementById("geeks").innerHTML = list;
           pro-=19.84;
            document.getElementById("Pro").innerHTML = pro;
            fat-=6.34;
            document.getElementById("Fat").innerHTML = fat;
            carbo-=0;
            document.getElementById("Carbo").innerHTML = carbo;
            cal+=142;
            document.getElementById("Cal").innerHTML = cal;
         }
         function pushFunction3() {
             list.push("Brocoli",);
             document.getElementById("geeks").innerHTML = list;
             pro+=2.82;
              document.getElementById("Pro").innerHTML = pro;
              fat+=0.37;
              document.getElementById("Fat").innerHTML = fat;
              carbo+=6.64;
              document.getElementById("Carbo").innerHTML = carbo;
              cal-=34;
              document.getElementById("Cal").innerHTML = cal;
         }
         function removeElement3(){
           const valuesToRemove = ["Brocoli"]
           list = list.filter(item => !valuesToRemove.includes(item))
           document.getElementById("geeks").innerHTML = list;
           pro-=2.82;
            document.getElementById("Pro").innerHTML = pro;
            fat-=0.37;
            document.getElementById("Fat").innerHTML = fat;
            carbo-=6.64;
            document.getElementById("Carbo").innerHTML = carbo;
            cal+=34;
            document.getElementById("Cal").innerHTML = cal;
         }
         function pushFunction4() {
             list.push("Bioled cauliflower",);
             document.getElementById("geeks").innerHTML = list;
             pro+=1.84;
              document.getElementById("Pro").innerHTML = pro;
              fat+=0.45;
              document.getElementById("Fat").innerHTML = fat;
              carbo+=4.11;
              document.getElementById("Carbo").innerHTML = carbo;
              cal-=23;
              document.getElementById("Cal").innerHTML = cal;
         }
         function removeElement4(){
           const valuesToRemove = ["Bioled cauliflower"]
           list = list.filter(item => !valuesToRemove.includes(item))
           document.getElementById("geeks").innerHTML = list;
           pro-=1.84;
            document.getElementById("Pro").innerHTML = pro;
            fat-=0.45;
            document.getElementById("Fat").innerHTML = fat;
            carbo-=4.11;
            document.getElementById("Carbo").innerHTML = carbo;
            cal+=23;
            document.getElementById("Cal").innerHTML = cal;
         }
         function pushFunction5() {
             list.push("100gm lean beef",);
             document.getElementById("geeks").innerHTML = list;
             pro+=19.48;
              document.getElementById("Pro").innerHTML = pro;
              fat+=12.83;
              document.getElementById("Fat").innerHTML = fat;
              carbo+=0;
              document.getElementById("Carbo").innerHTML = carbo;
              cal-=199;
              document.getElementById("Cal").innerHTML = cal;
         }
         function removeElement5(){
           const valuesToRemove = ["100gm lean beef"]
           list = list.filter(item => !valuesToRemove.includes(item))
           document.getElementById("geeks").innerHTML = list;
           pro-=19.48;
            document.getElementById("Pro").innerHTML = pro;
            fat-=12.83;
            document.getElementById("Fat").innerHTML = fat;
            carbo-=0;
            document.getElementById("Carbo").innerHTML = carbo;
            cal+=199;
            document.getElementById("Cal").innerHTML = cal;
         }
         function pushFunction6() {
             list.push("100gm chicken Breast",);
             document.getElementById("geeks").innerHTML = list;
             pro+=16.35;
              document.getElementById("Pro").innerHTML = pro;
              fat+=12.89;
              document.getElementById("Fat").innerHTML = fat;
              carbo+=17.56;
              document.getElementById("Carbo").innerHTML = carbo;
              cal-=252;
              document.getElementById("Cal").innerHTML = cal;
         }
         function removeElement6(){
           const valuesToRemove = ["100gm chicken Breast"]
           list = list.filter(item => !valuesToRemove.includes(item))
           document.getElementById("geeks").innerHTML = list;
           pro-=16.35;
            document.getElementById("Pro").innerHTML = pro;
            fat-=12.89;
            document.getElementById("Fat").innerHTML = fat;
            carbo-=17.56;
            document.getElementById("Carbo").innerHTML = carbo;
            cal+=252;
            document.getElementById("Cal").innerHTML = cal;
         }
         function pushFunction7() {
               list.push("Tuna",);
               document.getElementById("geeks").innerHTML = list;
               pro+=26.53;
                document.getElementById("Pro").innerHTML = pro;
                fat+=8.08;
                document.getElementById("Fat").innerHTML = fat;
                carbo+=0;
                document.getElementById("Carbo").innerHTML = carbo;
                cal-=186;
                document.getElementById("Cal").innerHTML = cal;
           }
           function removeElement7(){
             const valuesToRemove = ["Tuna"]
             list = list.filter(item => !valuesToRemove.includes(item))
             document.getElementById("geeks").innerHTML = list;
             pro-=26.53;
              document.getElementById("Pro").innerHTML = pro;
              fat-=8.08;
              document.getElementById("Fat").innerHTML = fat;
              carbo-=0;
              document.getElementById("Carbo").innerHTML = carbo;
              cal+=186;
              document.getElementById("Cal").innerHTML = cal;
           }
           function pushFunction8() {
               list.push("lentils",);
               document.getElementById("geeks").innerHTML = list;
               pro+=24.63;
                document.getElementById("Pro").innerHTML = pro;
                fat+=1.06;
                document.getElementById("Fat").innerHTML = fat;
                carbo+=63.35;
                document.getElementById("Carbo").innerHTML = carbo;
                cal-=352;
                document.getElementById("Cal").innerHTML = cal;
           }
           function removeElement8(){
             const valuesToRemove = ["lentils"]
             list = list.filter(item => !valuesToRemove.includes(item))
             document.getElementById("geeks").innerHTML = list;
             pro-=24.63;
              document.getElementById("Pro").innerHTML = pro;
              fat-=1.06;
              document.getElementById("Fat").innerHTML = fat;
              carbo-=63.35;
              document.getElementById("Carbo").innerHTML = carbo;
              cal+=352;
              document.getElementById("Cal").innerHTML = cal;
           }
           function pushFunction9() {
               list.push("Cottage Cheese",);
               document.getElementById("geeks").innerHTML = list;
               pro+=12.4;
                document.getElementById("Pro").innerHTML = pro;
                fat+=1;
                document.getElementById("Fat").innerHTML = fat;
                carbo+=2.7;
                document.getElementById("Carbo").innerHTML = carbo;
                cal-=72;
                document.getElementById("Cal").innerHTML = cal;
           }
           function removeElement9(){
             const valuesToRemove = ["Cottage Cheese"]
             list = list.filter(item => !valuesToRemove.includes(item))
             document.getElementById("geeks").innerHTML = list;
             pro-=12.4;
              document.getElementById("Pro").innerHTML = pro;
              fat-=1;
              document.getElementById("Fat").innerHTML = fat;
              carbo-=2.7;
              document.getElementById("Carbo").innerHTML = carbo;
              cal+=72;
              document.getElementById("Cal").innerHTML = cal;
           }
           function pushFunction10() {
               list.push("100gm apples",);
               document.getElementById("geeks").innerHTML = list;
               pro+=0.26;
                document.getElementById("Pro").innerHTML = pro;
                fat+=0.17;
                document.getElementById("Fat").innerHTML = fat;
                carbo+=13.81;
                document.getElementById("Carbo").innerHTML = carbo;
                cal-=52;
                document.getElementById("Cal").innerHTML = cal;
           }
           function removeElement10(){
             const valuesToRemove = ["100gm apples"]
             list = list.filter(item => !valuesToRemove.includes(item))
             document.getElementById("geeks").innerHTML = list;
             pro-=0.26;
              document.getElementById("Pro").innerHTML = pro;
              fat-=0.17;
              document.getElementById("Fat").innerHTML = fat;
              carbo-=13.81;
              document.getElementById("Carbo").innerHTML = carbo;
              cal+=52;
              document.getElementById("Cal").innerHTML = cal;
           }
          </script>

        </body>
      </html>

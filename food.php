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
        <td><img src="https://i0.wp.com/superbekala.com/wp-content/uploads/2019/04/%D8%B4%D9%8A%D8%AF%D8%B1-%D8%B6%D9%8A%D8%A7%D9%81%D9%87.jpg?fit=800%2C800&ssl=1" alt="cheese" width="150" hight="100"></td>
        <td>100gm Cheddar<br> Protein= 22.87g    Fat= 33.31g    Carbohydrates= 3.09g    Calories= 404g<br>
        <button onclick="pushFunction1()">Add to select food</button>   <button onclick="removeElement1()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://cdn.shopify.com/s/files/1/2836/2982/products/Feta_hero_grande.jpg?v=1529434179" alt="cheese" width="150" hight="100"></td>
        <td>100gm feta cheese<br>  Protein= 14.21g    Fat= 21.28g    Carbohydrates= 4.09g    Calories= 264g<br>
        <button onclick="pushFunction2()">Add to select food</button>   <button onclick="removeElement2()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="http://caloriecounter.io/wp-content/uploads/bfi_thumb/milk-calories-mgdkkfid9n5rn4j75sgstjiwc2qxz1fzxz7yezmgd8.jpg" alt="milk" width="150" hight="100"></td>
        <td>100gm Milk<br>  Protein= 3.33g    Fat= 3.46g    Carbohydrates= 4.74g    Calories= 63g<br>
        <button onclick="pushFunction3()">Add to select food</button>   <button onclick="removeElement3()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://www.caloriescalc.com/wp-content/uploads/2016/09/Poultry-Products-1-300x200.jpg" alt="chicken" width="150" hight="100"></td>
        <td>100gm chicken<br>  Protein= 22.84g    Fat= 17.53g    Carbohydrates= 9.03g    Calories= 291g<br>
        <button onclick="pushFunction4()">Add to select food</button>   <button onclick="removeElement4()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://www.tasteofhome.com/wp-content/uploads/2018/08/Smitten_Tyler-Robinson-with-Blind-Renaissance.jpg" alt="apple" width="150" hight="100"></td>
        <td>100gm apples<br>  Protein= 0.26g    Fat= 0.17g    Carbohydrates= 13.81g    Calories= 52g<br>
        <button onclick="pushFunction5()">Add to select food</button>   <button onclick="removeElement5()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://img.taste.com.au/IMskOnHw/taste/2016/11/asian-style-chopped-salad-83466-1.jpeg" alt="salad" width="150" hight="100"></td>
        <td>Salad<br> Protein= 0.1g    Fat= 70.2g    Carbohydrates= 3.4g    Calories= 631g<br>
        <button onclick="pushFunction6()">Add to select food</button>   <button onclick="removeElement6()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://www.skinnytaste.com/wp-content/uploads/2009/02/turkey-meatloaf-8.jpg" alt="turkey" width="150" hight="100"></td>
        <td>Turkey<br> Protein= 18.18g    Fat= 5.09g    Carbohydrates= 0.07g    Calories= 124g<br>
        <button onclick="pushFunction7()">Add to select food</button>   <button onclick="removeElement7()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://honest-food.net/wp-content/uploads/2011/12/smoked-duck-recipe.jpg" alt="duck" width="150" hight="100"></td>
        <td>Duck<br> Protein= 24.5g    Fat= 5.09g    Carbohydrates= 0g    Calories= 202g<br>
        <button onclick="pushFunction8()">Add to select food</button>   <button onclick="removeElement8()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://www.berkeleywellness.com/sites/default/files/field/image/400-05324731c-Masterfile-ildi_988_380.webp" alt="luncheon" width="150" hight="100"></td>
        <td>Luncheon<br> Protein= 12.5g    Fat= 30.3g    Carbohydrates= 2.1g    Calories= 334g<br>
        <button onclick="pushFunction9()">Add to select food</button>   <button onclick="removeElement9()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://ikneadtoeat.com/wp-content/uploads/2017/04/Honey-Pineapple-Rainbow-Fruit-Salad-2.jpg" alt="fruit salad" width="150" hight="100"></td>
        <td>Fruit salad<br> Protein= 0.35g    Fat= 0.07g    Carbohydrates= 7.87g    Calories= 30g<br>
        <button onclick="pushFunction10()">Add to select food</button>   <button onclick="removeElement10()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb9sWIDKgYkBhQwc7VI5cdwBPgF06Fpqr4_s-jdz7mY55S-x09" alt="brocoli" width="150" hight="100"></td>
        <td>Brocoli<br> Protein= 2.82g    Fat= 0.37g    Carbohydrates= 6.64g    Calories= 34g<br>
        <button onclick="pushFunction11()">Add to select food</button>   <button onclick="removeElement11()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRrkWhU_1ewzsDrwFm_WtZ2YpEqNGEVo4edb147WLkhG8ZFKRHIw" alt="sweet corn" width="150" hight="100"></td>
        <td>Sweet corn<br> Protein= 3.27g    Fat= 1.35g    Carbohydrates= 18.7g    Calories= 86g<br>
        <button onclick="pushFunction12()">Add to select food</button>   <button onclick="removeElement12()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://www.dinneratthezoo.com/wp-content/uploads/2018/11/roasted-mushrooms-5.jpg" alt="mushrooms" width="150" hight="100"></td>
        <td>Mushrooms<br> Protein= 1.49g    Fat= 0.53g    Carbohydrates= 6.86g    Calories= 38g<br>
        <button onclick="pushFunction13()">Add to select food</button>   <button onclick="removeElement13()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="http://www.khaby.com/wp-content/uploads/2019/05/Fried-Potatoes-Yummy-Crispy-716x448.jpg" alt="fried potatoes" width="150" hight="100"></td>
        <td>Fried potatoes<br> Protein= 2.19g    Fat= 3.39g    Carbohydrates= 23.51g    Calories= 133g<br>
        <button onclick="pushFunction14()">Add to select food</button>   <button onclick="removeElement14()">Remove</button></td>
      </tr>
      <tr>
        <td><img src="https://www.inspiredtaste.net/wp-content/uploads/2018/09/Easy-Oven-Baked-Salmon-Recipe-2-1200.jpg" alt="salmon" width="150" hight="100"></td>
        <td>Salmon<br> Protein= 19.84g    Fat= 6.34g    Carbohydrates= 0g    Calories= 142g<br>
        <button onclick="pushFunction15()">Add to select food</button>   <button onclick="removeElement15()">Remove</button></td>
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
            list.push("100gm Cheddar",);
            document.getElementById("geeks").innerHTML = list;
            pro+=22.87;
             document.getElementById("Pro").innerHTML = pro;
             fat+=33.31;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=3.09;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=404;
             document.getElementById("Cal").innerHTML = cal;
           }
        function removeElement1(){
          const valuesToRemove = ["100gm Cheddar"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=22.87;
           document.getElementById("Pro").innerHTML = pro;
           fat-=33.31;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=3.09;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=404;
           document.getElementById("Cal").innerHTML = cal;
        }
        function pushFunction2() {
            list.push("100gm feta cheese",);
            document.getElementById("geeks").innerHTML = list;
            pro+=14.21;
             document.getElementById("Pro").innerHTML = pro;
             fat+=21.28;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=4.09;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=264;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement2(){
          const valuesToRemove = ["100gm feta cheese"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=14.21;
           document.getElementById("Pro").innerHTML = pro;
           fat-=21.28;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=4.09;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=264;
           document.getElementById("Cal").innerHTML = cal;
        }
        function pushFunction3() {
            list.push("100gm milk",);
            document.getElementById("geeks").innerHTML = list;
            pro+=3.33;
             document.getElementById("Pro").innerHTML = pro;
             fat+=3.46;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=4.74;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=63;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement3(){
          const valuesToRemove = ["100gm milk"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=3.33;
           document.getElementById("Pro").innerHTML = pro;
           fat-=3.46;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=4.74;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=63;
           document.getElementById("Cal").innerHTML = cal;
        }
        function pushFunction4() {
            list.push("100gm chicken",);
            document.getElementById("geeks").innerHTML = list;
            pro+=22.84;
             document.getElementById("Pro").innerHTML = pro;
             fat+=17.53;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=9.03;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=291;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement4(){
          const valuesToRemove = ["100gm chicken"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=22.84;
           document.getElementById("Pro").innerHTML = pro;
           fat-=17.53;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=9.03;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=291;
           document.getElementById("Cal").innerHTML = cal;
        }
        function pushFunction5() {
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
        function removeElement5(){
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
        function pushFunction6() {
            list.push("salad",);
            document.getElementById("geeks").innerHTML = list;
            pro+=0.1;
             document.getElementById("Pro").innerHTML = pro;
             fat+=70.2;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=3.4;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=631;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement6(){
          const valuesToRemove = ["salad"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=0.1;
           document.getElementById("Pro").innerHTML = pro;
           fat-=70.2;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=3.4;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=631;
           document.getElementById("Cal").innerHTML = cal;
        }

        function pushFunction7() {
            list.push("Turkey",);
            document.getElementById("geeks").innerHTML = list;
            pro+=18.18;
             document.getElementById("Pro").innerHTML = pro;
             fat+=5.09;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=0.07;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=124;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement7(){
          const valuesToRemove = ["Turkey"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=18.8;
           document.getElementById("Pro").innerHTML = pro;
           fat-=5.09;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=0.07;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=124;
           document.getElementById("Cal").innerHTML = cal;
        }

        function pushFunction8() {
            list.push("duck",);
            document.getElementById("geeks").innerHTML = list;
            pro+=24.5;
             document.getElementById("Pro").innerHTML = pro;
             fat+=5.09;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=0;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=202;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement8(){
          const valuesToRemove = ["duck"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=24.5;
           document.getElementById("Pro").innerHTML = pro;
           fat-=5.09;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=0;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=202;
           document.getElementById("Cal").innerHTML = cal;
        }

        function pushFunction9() {
            list.push("luncheon",);
            document.getElementById("geeks").innerHTML = list;
            pro+=12.5;
             document.getElementById("Pro").innerHTML = pro;
             fat+=30.3;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=2.1;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=334;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement9(){
          const valuesToRemove = ["luncheon"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=12.5;
           document.getElementById("Pro").innerHTML = pro;
           fat-=30.3;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=2.1;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=334;
           document.getElementById("Cal").innerHTML = cal;
        }

         function pushFunction10() {
            list.push("fruit salad",);
            document.getElementById("geeks").innerHTML = list;
            pro+=0.35;
             document.getElementById("Pro").innerHTML = pro;
             fat+=0.07;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=7.87;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=30;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement10(){
          const valuesToRemove = ["fruit salad"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=0.35;
           document.getElementById("Pro").innerHTML = pro;
           fat-=0.07;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=7.87;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=30;
           document.getElementById("Cal").innerHTML = cal;
        }

        function pushFunction11() {
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
        function removeElement11(){
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

         function pushFunction12() {
            list.push("sweet corn",);
            document.getElementById("geeks").innerHTML = list;
            pro+=3.27;
             document.getElementById("Pro").innerHTML = pro;
             fat+=1.35;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=18.7;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=86;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement12(){
          const valuesToRemove = ["sweet corn"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=3.27;
           document.getElementById("Pro").innerHTML = pro;
           fat-=1.35;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=18.7;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=86;
           document.getElementById("Cal").innerHTML = cal;
        }

        function pushFunction13() {
            list.push("mushroom",);
            document.getElementById("geeks").innerHTML = list;
            pro+=1.49;
             document.getElementById("Pro").innerHTML = pro;
             fat+=0.53;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=6.86;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=38;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement13(){
          const valuesToRemove = ["mushroom"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=1.49;
           document.getElementById("Pro").innerHTML = pro;
           fat-=0.53;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=6.86;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=38;
           document.getElementById("Cal").innerHTML = cal;
        }

        function pushFunction14() {
            list.push("fried potato",);
            document.getElementById("geeks").innerHTML = list;
            pro+=2.19;
             document.getElementById("Pro").innerHTML = pro;
             fat+=3.39;
             document.getElementById("Fat").innerHTML = fat;
             carbo+=23.51;
             document.getElementById("Carbo").innerHTML = carbo;
             cal-=133;
             document.getElementById("Cal").innerHTML = cal;
        }
        function removeElement14(){
          const valuesToRemove = ["fried potato"]
          list = list.filter(item => !valuesToRemove.includes(item))
          document.getElementById("geeks").innerHTML = list;
          pro-=2.19;
           document.getElementById("Pro").innerHTML = pro;
           fat-=3.39;
           document.getElementById("Fat").innerHTML = fat;
           carbo-=2.51;
           document.getElementById("Carbo").innerHTML = carbo;
           cal+=133;
           document.getElementById("Cal").innerHTML = cal;
        }

         function pushFunction15() {
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
        function removeElement15(){
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
    </script>

  </body>
  </html>

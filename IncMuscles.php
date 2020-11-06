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
      <button onclick="pushFunction1()">Add to select food</button>   <button onclick="removeElement1()">Remove</button></td>
    </tr>

      <td><img src="http://caloriecounter.io/wp-content/uploads/bfi_thumb/milk-calories-mgdkkfid9n5rn4j75sgstjiwc2qxz1fzxz7yezmgd8.jpg" alt="milk" width="150" hight="100"></td>
      <td>100gm Milk<br>  Protein= 3.33g    Fat= 3.46g    Carbohydrates= 4.74g    Calories= 63g<br>
      <button onclick="pushFunction2()">Add to select food</button>   <button onclick="removeElement2()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://www.kingarthurflour.com/sites/default/files/recipe_legacy/366-3-large.jpg" alt="oatmeal" width="150" hight="100"></td>
      <td>Bread,oatmeal<br>  Protein= 8.4g    Fat= 4.4g    Carbohydrates= 48.5g    Calories= 269g<br>
      <button onclick="pushFunction3()">Add to select food</button>   <button onclick="removeElement3()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://www.tasteofhome.com/wp-content/uploads/2018/08/Smitten_Tyler-Robinson-with-Blind-Renaissance.jpg" alt="apple" width="150" hight="100"></td>
      <td>100gm apples<br>  Protein= 0.26g    Fat= 0.17g    Carbohydrates= 13.81g    Calories= 52g<br>
      <button onclick="pushFunction4()">Add to select food</button>   <button onclick="removeElement4()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://img.taste.com.au/IMskOnHw/taste/2016/11/asian-style-chopped-salad-83466-1.jpeg" alt="salad" width="150" hight="100"></td>
      <td>Salad<br> Protein= 0.1g    Fat= 70.2g    Carbohydrates= 3.4g    Calories= 631g<br>
      <button onclick="pushFunction5()">Add to select food</button>   <button onclick="removeElement5()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://marketplace.canva.com/MADaFtU6_lw/1/thumbnail_large-1/canva-fresh-raw-tuna-fish-from-above.-MADaFtU6_lw.jpg" alt="tuna" width="150" hight="100"></td>
      <td>Tuna<br> Protein= 23.33g    Fat= 4.9g    Carbohydrates= 0g    Calories= 144g<br>
      <button onclick="pushFunction6()">Add to select food</button>   <button onclick="removeElement6()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/whey-protein-1296x728-feature.jpg?w=1155&h=1528" alt="whey protein" width="150" hight="100"></td>
      <td>Protein<br> Protein= 66.67g    Fat= 5.13g    Carbohydrates= 17.95g    Calories= 385g<br>
      <button onclick="pushFunction7()">Add to select food</button>   <button onclick="removeElement7()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://takeoutsfromnature.co.za/wp-content/uploads/2018/08/Toasted-Almond-Butter-10.jpg" alt="luncheon" width="150" hight="100"></td>
      <td>Peanut butter<br> Protein= 24.06g    Fat= 49.94g    Carbohydrates= 21.57g    Calories= 589g<br>
      <button onclick="pushFunction8()">Add to select food</button>   <button onclick="removeElement8()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://ikneadtoeat.com/wp-content/uploads/2017/04/Honey-Pineapple-Rainbow-Fruit-Salad-2.jpg" alt="fruit salad" width="150" hight="100"></td>
      <td>Fruit salad<br> Protein= 0.35g    Fat= 0.07g    Carbohydrates= 7.87g    Calories= 30g<br>
      <button onclick="pushFunction9()">Add to select food</button>   <button onclick="removeElement9()">Remove</button></td>
    </tr>
    <tr>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb9sWIDKgYkBhQwc7VI5cdwBPgF06Fpqr4_s-jdz7mY55S-x09" alt="brocoli" width="150" hight="100"></td>
      <td>Brocoli<br> Protein= 2.82g    Fat= 0.37g    Carbohydrates= 6.64g    Calories= 34g<br>
      <button onclick="pushFunction10()">Add to select food</button>   <button onclick="removeElement10()">Remove</button></td>
    </tr>

      <td><img src="https://www.inspiredtaste.net/wp-content/uploads/2018/09/Easy-Oven-Baked-Salmon-Recipe-2-1200.jpg" alt="salmon" width="150" hight="100"></td>
      <td>Salmon<br> Protein= 19.84g    Fat= 6.34g    Carbohydrates= 0g    Calories= 142g<br>
      <button onclick="pushFunction11()">Add to select food</button>   <button onclick="removeElement11()">Remove</button></td>
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
      function pushFunction1() {
          list.push("Egg");
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
      function removeElement1(){
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

      function pushFunction2() {
          list.push("100gm milk");
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
      function removeElement2(){
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
      function pushFunction3() {
          list.push("oatmeal bread");
          document.getElementById("geeks").innerHTML = list;
          pro+=8.4;
           document.getElementById("Pro").innerHTML = pro;
           fat+=4.4;
           document.getElementById("Fat").innerHTML = fat;
           carbo+=48.5;
           document.getElementById("Carbo").innerHTML = carbo;
           cal-=269;
           document.getElementById("Cal").innerHTML = cal;
      }
      function removeElement3(){
        const valuesToRemove = ["oatmeal bread"]
        list = list.filter(item => !valuesToRemove.includes(item))
        document.getElementById("geeks").innerHTML = list;
        pro-=8.4;
         document.getElementById("Pro").innerHTML = pro;
         fat-=4.4;
         document.getElementById("Fat").innerHTML = fat;
         carbo-=48.5;
         document.getElementById("Carbo").innerHTML = carbo;
         cal+=269;
         document.getElementById("Cal").innerHTML = cal;
      }
      function pushFunction4() {
          list.push("100gm apples");
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
      function removeElement4(){
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
      function pushFunction5() {
          list.push("salad");
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
      function removeElement5(){
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

      function pushFunction6() {
          list.push("tuna");
          document.getElementById("geeks").innerHTML = list;
          pro+=23.33;
           document.getElementById("Pro").innerHTML = pro;
           fat+=4.9;
           document.getElementById("Fat").innerHTML = fat;
           carbo+=0;
           document.getElementById("Carbo").innerHTML = carbo;
           cal-=144;
           document.getElementById("Cal").innerHTML = cal;
      }
      function removeElement6(){
        const valuesToRemove = ["tuna"]
        list = list.filter(item => !valuesToRemove.includes(item))
        document.getElementById("geeks").innerHTML = list;
        pro-=23.33;
         document.getElementById("Pro").innerHTML = pro;
         fat-=4.9;
         document.getElementById("Fat").innerHTML = fat;
         carbo-=0;
         document.getElementById("Carbo").innerHTML = carbo;
         cal+=144;
         document.getElementById("Cal").innerHTML = cal;
      }

      function pushFunction7() {
          list.push("protein");
          document.getElementById("geeks").innerHTML = list;
          pro+=66.67;
           document.getElementById("Pro").innerHTML = pro;
           fat+=5.13;
           document.getElementById("Fat").innerHTML = fat;
           carbo+=17.95;
           document.getElementById("Carbo").innerHTML = carbo;
           cal-=385;
           document.getElementById("Cal").innerHTML = cal;
      }
      function removeElement7(){
        const valuesToRemove = ["protein"]
        list = list.filter(item => !valuesToRemove.includes(item))
        document.getElementById("geeks").innerHTML = list;
        pro-=66.67;
         document.getElementById("Pro").innerHTML = pro;
         fat-=5.13;
         document.getElementById("Fat").innerHTML = fat;
         carbo-=17.95;
         document.getElementById("Carbo").innerHTML = carbo;
         cal+=385;
         document.getElementById("Cal").innerHTML = cal;
      }

      function pushFunction8() {
          list.push("peanut butter");
          document.getElementById("geeks").innerHTML = list;
          pro+=24.06;
           document.getElementById("Pro").innerHTML = pro;
           fat+=49.94;
           document.getElementById("Fat").innerHTML = fat;
           carbo+=21.57;
           document.getElementById("Carbo").innerHTML = carbo;
           cal-=589;
           document.getElementById("Cal").innerHTML = cal;
      }
      function removeElement8(){
        const valuesToRemove = ["peanut butter"]
        list = list.filter(item => !valuesToRemove.includes(item))
        document.getElementById("geeks").innerHTML = list;
        pro-=24.06;
         document.getElementById("Pro").innerHTML = pro;
         fat-=49.94;
         document.getElementById("Fat").innerHTML = fat;
         carbo-=21.57;
         document.getElementById("Carbo").innerHTML = carbo;
         cal+=589;
         document.getElementById("Cal").innerHTML = cal;
      }

       function pushFunction9() {
          list.push("fruit salad");
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
      function removeElement9(){
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

      function pushFunction10() {
          list.push("Brocoli");
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
      function removeElement10(){
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

       function pushFunction11() {
          list.push("salmon");
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
      function removeElement11(){
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

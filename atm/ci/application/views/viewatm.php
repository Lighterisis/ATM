<html ng-app="app">
  <head>
    
    <script src="/atm/js/jquery-3.1.1.min.js"></script>
    <script src="/atm/js/angular.min.js"></script>
    <script src="/atm/js/appjs.js"></script>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .button {
    background-color: #FFFFFF; 
    border-radius: 8px ;
    color: blank;
    padding: 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
} 
    .button {
        background-color: #DCDCDC;
        color: black;
        border: 2px #FFFFFF;
    }

    .button:hover {
        background-color: #000000;
        color: white;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
    </style>
  </head>
  <body style="background-color:#F8F8FF;" ng-controller="controller">
    
    <fieldset style="width:50%;">
      <legend style="font-size:40px;"><b>ATM</b></legend>
        <form>
          Money &nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input id="money" format="number" type="search" name="code" size="40" placeholder="0.00" ng-model="money" ng-keyup="confirm()">
          <div id="err" ng-show="checker == false" style="color:red">Incorrect</div>
          <div id="err" ng-show="checkerbill == false" style="color:red">This machine not enough bill.</div>
          <table style="width:100%">
            <tr>
                <th>Cash</th>
                <th>Amount</th>
            </tr>
            <tr>
              <td>1000</td>
              <td>{{x}}</td>
            </tr>
            <tr>
              <td>500</td>
              <td>{{y}}</td>
            </tr>
            <tr>
              <td>100</td>
              <td>{{z}}</td>
            </tr>     
          </table>
          <button id="submit" class="button" ng-click="confirm()"><b>Confirm</b></button>
        </form>
    </fieldset>
    <!-- <br>
        <button type="button"><a href="http://localhost:81/example/viewproduct.php">product</a></button>
        <button type="button"><a href="http://localhost:81/example/viewpp.php">product pay</a></button>
        <button type="button"><a href="http://localhost:81/example/viewctm.php">customer</a></button>
        <button type="button"><a href="http://localhost:81/example/viewpsearch.php">search product</a></button> -->
  </body>
</html>
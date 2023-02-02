<html>
  <head>
    <title>Sample Javascript</title>
  </head>
  <body>
    <div class="center">
      <h1>String Reverse</h1>
      <input type="text" id="txtString" onclick="reverseText()">
      <h4>Result: <span id="result"></span></h4>
    </div>
    
    <script>
      function reverseText(){
        var txtString = document.getElementById('txtString').value;
        var newString = "";
        var counter = txtString.length - 1;
        while( counter >= 0){
            newString += txtString[counter];
            counter--;
        }
        document.getElementById('result').innerHTML = newString;
    </script>
  </body>
</html>

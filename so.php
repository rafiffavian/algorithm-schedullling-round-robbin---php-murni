<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body background="image/gambar2.jpg">
    <h2 align="center" class="nama">Rafif Favian</h2>
    <h2 align="center">55416949</h2>
  <div class="col-md-offset-4" style="margin-top: 100px;">
    <h2>CPU Scheduling Algorithm</h2><br>
      <div>
        <div>
          Algorithm:
          <form id="algorithm">
            <input type="radio" name="algorithm" value="robin"/> Round Robin
          </form>
          <br>
        </div>
          <table id="inputTable">
              <tr>
                  <th>Process</th>
                  <th>Arrival Time</th>
                  <th>Execute Time</th>
                  <th class="servtime">Service Time</th>
                  <th class="priority-only">Priority</th>
              </tr>
              <tr>
                  <td>P0</td>
                  <td>0</td>
                  <td><input class="initial exectime" type="text" value="5" /></td>
                  <td class="servtime"></td>
                  <td class="priority-only initial"><input type="text"/></td>
              </tr>
              <tr>
                  <td>P1</td>
                  <td>1</td>
                  <td><input class="initial exectime" value="3" /></td>
                  <td class="servtime"></td>
                  <td class="priority-only" ><input type="text"/></td>
              </tr>
          </table>
          <input id="minus" style="display: inline; left: 950px;margin-top: 200px;position: absolute; top: 170px;" type="button" value="-" onclick="deleteRow();" />
          </div>
          <input type="button" value="+" onclick="addRow();" />
      <div>
      
    <p id="quantumParagraph" hidden>Quantum: 
        <input style="width: 50px;" id="quantum" type="text" value="3" />
    </p>
    <input type="button" value="Go" onclick="draw();" />
    <br/><br/>

    <fresh>
    </fresh>
    <p>
    Timer: <strong id="timer"></strong> sec
    </p>
  </div>  

  </body>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="rb.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>
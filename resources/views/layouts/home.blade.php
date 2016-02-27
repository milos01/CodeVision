
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        @section('head')
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link href='https://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
        <style type="text/css">
        body {
          /*background: url('/imgs/slika');*/
            
            /*opacity: 0.9;*/
        }
        </style>
        @show
        <style type="text/css">
      .card {
        width: 138px;
        height: 100px;
        margin-left:163px;
      }
      .front, .back {
        
      }
      .front {
        
      }
      .back {
       /* background-color: #d6e9c6;
        border-color: #d6e9c6;
        border-radius: 1px;*/
        background: url('/imgs/yr.png');
      }
    </style>
    </head>
    <body ng-app="app" ng-controller="GreetingController">
        @section('body')
            <div id="leftCompartment" style="background-repeat: no-repeat;background: url('/imgs/slika2.png');float:left;width:33vw;height:100vh;position:absolute;top:0;box-shadow: 4px 0px 0px 0px #ccc;-webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover">
              <!-- left compartment -->
            </div>
            <div class="container" style="width:100%;position:fixed;top:0px;">
              <i class="fa fa-question fa-2x pull-right" style="margin-top:7px;margin-right:-6px;"></i>
            </div>
            <div class="container" style="width:450px;margin-top:18vh">
            <div class="container" style="width:500px;margin-left:-35px;">
              <div class="card"> 

                <div class="front"> 
                      <div class="container" style="width:135px;height:100px;border:12px solid black;font-family: 'Oxygen Mono', '';font-size:70px;color:black">
                        <div class="container" style="width:150px;margin-top:-7px;margin-left:-23px;">
                          <span style=""><b>0</b></span>
                          <span style="margin-left:-30px;margin-top:-5px;"><b>0</b></span>
                        </div>
                      </div>
                </div>
                <div class="back">
                </div> 
              </div>
              <div class="container" style="width:165px;margin-top:-3px;color:black;font-family: 'Montserrat', sans-serif;font-size:20px">
                <b>C<span style="font-family: 'Oxygen Mono', '';font-size:18px;margin-right:1px;margin-left:1px">0</span>DE VISI<span style="font-family: 'Oxygen Mono', '';font-size:18px;margin-right:1px;margin-left:1px">0</span>N</b>
              </div>
            </div>
            <div class="container" style="margin-left:-35px;margin-bottom:70px;margin-top:-3px;width:500px;color:#000;font-family: 'Montserrat', sans-serif;text-align:center;font-size:20px;">
               <div style="border-top:5px solid black;float:left;margin-left:130px">start-up recruitment</div>
            </div>
             <form ng-submit="formSubmit()" novalidate>  
            <div class="container" id="holder" style="position:relative;overflow:hidden;margin:0 auto;width:420px;white-space:nowrap;">
              <div class="container" id="slide1" style="margin-left:-15px;position:relative;display:inline-block;white-space:normal;vertical-align:top;*display:inline;background:#eee;width:420px;">
  
               
                  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:7px">NAME</label>
                        <div class="col-sm-10">
                          <input  type="text" style=" background: transparent;border: none;border-radius:0px;border-bottom: 1px solid #000000;" name="name" class="form-control" id="fullName" ng-model="name" autocomplete="off" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:7px">EMAIL</label>
                        <div class="col-sm-10">
                          <input  type="text" style=" background: transparent;border: none;border-radius:0px;border-bottom: 1px solid #000000;" name="email" class="form-control" id="email" ng-model="email" autocomplete="off" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p><label for="inputMessage" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:16px;margin-left:-5px;">ABOUT</label></p>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="aboutArea" ng-model="about" style="height:100px; background: transparent;border: none;margin-left:5px;border-radius:0px;border-bottom: 1px solid #000000;"></textarea>
                        </div>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-2" style="font-family: 'Montserrat', sans-serif;margin-top:9px;">MOTIV</label>
                        <div class="col-sm-10" style="font-family: 'Montserrat', sans-serif;"> 
                          <div class="radio">
                            <label>
                              <input type="radio" ng-model="radioValue" ng-value="'I want to work from home'" name="gridRadios" id="gridRadios1" value="option1" ng-checked="true">
                              I want to work from home
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" ng-model="radioValue" ng-value="'I want to work in team'" name="gridRadios" id="gridRadios2" value="option2">
                              I want to work in team
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" ng-model="radioValue" name="gridRadios" ng-value="'I want to learn new things'" id="gridRadios3" value="option3" >
                              I want to learn new things
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" ng-model="radioValue" name="gridRadios" ng-value="'I want to be one of cofouders'" id="gridRadios3" value="option3" >
                              I want to be one of cofouders
                            </label>
                          </div>
                        </div>
                      </div>
                
                <div class="form-group row">
                  <div class="col-sm-offset-2 col-sm-10">
                  </div>
                </div>
              
              </div>
              <div id="slide1" style="position:relative;display:inline-block;margin-left:-3px;white-space:normal;vertical-align:top;*display:inline;background:#eee;width:420px">
                <div style="width:100%;height:200px;font-size:20px;">
                  <div style="float:left;margin-left:15px;border-radius:1px;color:black;padding:0px 43px;background-color:#D9D9D9">
                    <code style="color:black;background:transparent">
                    &lt?php<br/>
                    function foo(&$message){<br/>
                    &nbsp&nbsp&nbsp&nbsp $message = "message01";<br>
                    }<br>
                    $msg = "message02";<br/>
                    foo($msg);<br/>
                    echo $msg;
                    </code>
                  </div>
                </div>
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:77px">OUTPUT</label>
                        <div class="col-sm-10">
                          <input ng-model="output" tabindex="-1" type="text" style=" background: transparent;border: none;border-radius:0px;border-bottom: 1px solid #000000;margin-top:70px" name="username" class="form-control" id="submitRequest" autocomplete="off" placeholder="e.g. message1 / why?" required/>
                      </div>
                  </div>
              </div>
              
              </div>
              <span id="backButt" style="font-family: 'Montserrat', sans-serif;float:left;margin-left:15px;"><b>BACK</b></span>
              <span id="nextButt" style="font-family: 'Montserrat', sans-serif;float:right" ng-click="calculateQuantity()"><b>NEXT</b></span>
              <button type = "submit" id="submitButt" style="display:none;font-family: 'Montserrat', sans-serif;float:right" ><b>SUBMIT</b></button>
              
              </form>
            <div id="rightCompartment" style="float:right;width:33vw;height:100vh;position:absolute;top:0;right:0;overflow:hidden;box-shadow: -4px 0px 0px 0px #ccc;">
              <img src="http://i.istockimg.com/image-zoom/73390797/3/380/380/stock-illustration-73390797-programming-flat-illustration-concept-top-view.jpg" style="position:absolute;top:0;right:0;"/>
            </div>
            </div>

        @show
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
         <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js"></script>
         <script src="js/app.js"></script>
         
    </body>
</html>


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
          -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
          /*opacity: 0.9;*/
        }
        </style>
        @show
    </head>
    <body ng-app="app" ng-controller="GreetingController">

        @section('body')
            <div class="container" style="width:100%;position:fixed;top:0px;">
              <i class="fa fa-question fa-2x pull-right" style="margin-top:7px;margin-right:-6px;"></i>
            </div>
            <div class="container" style="width:450px;margin-top:18vh">
            <div class="container" style="width:500px;margin-left:-35px;">
              <div class="container" style="width:135px;height:100px;border:12px solid black;font-family: 'Oxygen Mono', '';font-size:70px;color:black">
                <div class="container" style="width:150px;margin-top:-7px;margin-left:-23px;">
                <span style=""><b>0</b></span>
                <span style="margin-left:-30px;margin-top:-5px;"><b>0</b></span>
              </div>
              </div>
              <div class="container" style="width:165px;margin-top:-3px;color:black;font-family: 'Montserrat', sans-serif;font-size:22px">
                <b>C<span style="font-family: 'Oxygen Mono', '';font-size:19px;margin-right:1px;margin-left:1px">0</span>DE VIS<span style="font-family: 'Oxygen Mono', '';font-size:19px;margin-right:1px;margin-left:1px">0</span>N</b>
              </div>
            </div>
            <div class="container" style="margin-left:-35px;margin-bottom:70px;margin-top:-3px;width:500px;color:#000;font-family: 'Montserrat', sans-serif;text-align:center;font-size:20px;">
               <div style="border-top:5px solid black;float:left;margin-left:130px">start-up recruitment</div>
            </div>
            <div class="container" id="holder" style="position:relative;overflow:hidden;margin:0 auto;width:420px;white-space:nowrap;">
              <div class="container" id="slide1" style="margin-left:-15px;position:relative;display:inline-block;white-space:normal;vertical-align:top;*display:inline;background:#eee;width:420px;">
  
                <form name="myForm">  
                  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:7px">NAME</label>
                        <div class="col-sm-10">
                          <input  type="text" style=" background: transparent;border: none;border-radius:0px;border-bottom: 1px solid #000000;" name="username" class="form-control" id="fullName" autocomplete="off" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:7px">EMAIL</label>
                        <div class="col-sm-10">
                          <input  type="text" style=" background: transparent;border: none;border-radius:0px;border-bottom: 1px solid #000000;" name="username" class="form-control" id="inputEmail3" autocomplete="off" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p><label for="inputMessage" class="col-sm-2 form-control-label" style="font-family: 'Montserrat', sans-serif;margin-top:16px;margin-left:-5px;">ABOUT</label></p>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="inputPassword3" style="height:100px; background: transparent;border: none;margin-left:5px;border-radius:0px;border-bottom: 1px solid #000000;"></textarea>
                        </div>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-2" style="font-family: 'Montserrat', sans-serif;margin-top:9px;">MOTIV</label>
                        <div class="col-sm-10" style="font-family: 'Montserrat', sans-serif;"> 
                          <div class="radio">
                            <label>
                              <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                              I want to work from home
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="gridRadios" id="gridRadios2" value="option2">
                              I want to work in team
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                              I want to learn new things
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                              I want to be one of cofouders
                            </label>
                          </div>
                        </div>
                      </div>
                
                <div class="form-group row">
                  <div class="col-sm-offset-2 col-sm-10">
                  </div>
                </div>
              </form>
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
                          <input  type="text" style=" background: transparent;border: none;border-radius:0px;border-bottom: 1px solid #000000;margin-top:70px" ng-model="emailModel" name="username" class="form-control" id="inputEmail3" autocomplete="off" placeholder="e.g. message1/why?" required/>
                      </div>
                  </div>
              </div>

              </div>
              <span id="backButt" style="font-family: 'Montserrat', sans-serif;float:left;margin-left:15px;"><b>BACK</b></span>
              <span id="nextButt" style="font-family: 'Montserrat', sans-serif;float:right" ng-click="calculateQuantity()"><b>NEXT</b></span>
              <span id="submitButt" style="display:none;font-family: 'Montserrat', sans-serif;float:right" ng-click="submitClicked()"><b>SUBMIT</b></span>
            </div>
        @show
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
         <script src="js/app.js"></script>
         
    </body>
</html>
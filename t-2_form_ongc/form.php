<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
    <!-- Add bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- ==========Header Section========== -->
<!-- <div>
    <div class="container-fluid row   text-black text-center float-left"> 
        
        
        <div class="col justify-content-end">
            <div class="row fs-2     text-danger " style=" font-weight: 700;  ">
            <p>OIL AND NATURAL GAS CORPORATION LIMITED</p>
            </div>
            <div class="row fs-8" style=" font-weight: 700;  ">
            <p>Mehsana Asset </p> 
            </div>
            <div class="col fs-3 text-primary text-center " style=" font-weight: 700;  ">
            <p>Production DPR</p> 
            </div>          
        </div>  
    </div>
    
    <div class="container-fluid row p-1  text-black bg-primary text-center float-left"> 
            <div class="col-4 text-black d-flex " style=" font-weight: 500;  ">
                <h4>Welcome N_Kadi_CTF</h4>
            </div>
            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn" style=" font-weight: 500;  ">Logout</button>
            </div>
    </div>
    <div class="container-fluid row p-1  text-black  text-center float-left"> 
            <div class="col text-danger text-center " style=" font-weight: 500;  ">
                <h4>Morning Shift</h4>
            </div>
    </div>
</div> -->
    <!-- ==========Main Section========== -->
<div class="container-fluid row  bg-primary text-white  text-center float-left"> 
    <div class="col  text-center " style=" font-weight: 500;  ">
        <h4>Morning Shift</h4>
    </div>
</div>
<div class="box">   
    <form action="" method="POST" class="form-group">

        <div class="card rounded p-3 mainbox">
            <div class="form-group row box-1">  
                <div class="col-4">
                    <label for="name" class="form-label fs-5 text-black " style=" font-weight: 600; " >Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-4">
                    <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Site</label>
                    <input type="text" class="form-control" id="site" name="site" required>
                </div>
            </div>

            <div class="form-group row box-1">  
                <div class="col-4">
                <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Net Oil Production</label>
                    <div class="row    ">
                        <div class="col-3 ">
                            <input type="text" class="form-control" id="site" name="site" required>
                        </div>
                        <div class="col-3 ">
                            <label for="site" class="form-label fs-8 text-black  e-label" style=" font-weight: 500; " >(In m³)</label>
                        </div>                     
                    </div>  
                </div>
                <div class="col-4">
                    <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Net Oil Dispatch Through Line</label>
                        <div class="row  ">
                            <div class="col-3">
                                <input type="text" class="form-control" id="site" name="site" required>
                            </div>
                            <div class="col-3">
                                <label for="site" class="form-label fs-8 text-black e-label " style=" font-weight: 500; " >(In m³)</label>
                            </div>
                        </div>
                </div>
            </div>

            

            <div class="form-group row box-1">  
                <div class="col-4">
                <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Net Oil Colising Stock</label>
                    <div class="row  d-flex flex-row">
                        <div class="col-3">
                            <input type="text" class="form-control" id="site" name="site" required>
                        </div>
                        <div class="col-3">
                            <label for="site" class="form-label fs-8 text-black e-label" style=" font-weight: 500; " >(In m³)</label>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Emulsion Stock</label>
                    <div class="row  d-flex flex-row">
                        <div class="col-3">
                            <input type="text" class="form-control" id="site" name="site" required>
                        </div>
                        <div class="col-3">
                            <label for="site" class="form-label fs-8 text-black e-label" style=" font-weight: 500; " >(In m³)</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group row box-2">
                <div class="col-8 box-3">
                    <label for="cmp_cat" class="form-label fs-5 text-black " style=" font-weight: 600; ">Remarks</label>
                    <textarea class="form-control" id="text" name="text" 
      	 maxlength="500" placeholder="Type in your message" rows="5"></textarea>
            <span class="pull-right label label-default" id="count_message"></span>
                        </div>
                </div>
            </div>

            <div class="form-group row form-check p-3">
                <div class="col-8 box-3">
                    <input type="checkbox" class="form-check-input" name="tnc" id="tnc" required>
                    <label class="form-check-label" for="tnc">I declare that information given in this form is true, complete and correct to best of my knowledge</label>
                </div>
            </div> 

            <div class="form-group row d-flex justify-content-end ">
                <div class="col d-flex">
                  <button type="submit" class=" btn-lg btn-primary">Save</button>
                </div>
                <div class="col d-flex flex-row-reverse">
                  <button type="submit" class=" btn-lg btn-primary">Reset</button>
                </div>       
            </div>

        </div>
    </form>
</div>
    <!-- ==========Header Section========== -->
    
    <div class="container-fluid  bg-dark text-white text-center ">
        <p><?php
        
        function get_ip() {
          $clientip = '';
          if (getenv('HTTP_CLIENT_IP'))
            $clientip = getenv('HTTP_CLIENT_IP');
          else if(getenv('HTTP_X_FORWARDED_FOR'))
            $clientip = getenv('HTTP_X_FORWARDED_FOR');
          else if(getenv('HTTP_X_FORWARDED'))
            $clientip = getenv('HTTP_X_FORWARDED');
          else if(getenv('HTTP_FORWARDED_FOR'))
            $clientip = getenv('HTTP_FORWARDED_FOR');
          else if(getenv('HTTP_FORWARDED'))
            $clientip = getenv('HTTP_FORWARDED');
          else if(getenv('REMOTE_ADDR'))
            $clientip = getenv('REMOTE_ADDR');
          else
            $clientip = 'UNKNOWN';
          return $clientip;
        }
        echo " Your ip address is : ".get_ip();
        ?>
        </p>
    </div>
</div>
<script>
       var text_max = 500;
$('#count_message').html('0 / ' + text_max );

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_length + ' / ' + text_max);
});
    </script>
</body>
</html>
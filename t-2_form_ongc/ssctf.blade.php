<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Add bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}



            @media only screen and (max-width: 768px){
            
            .mainbox{
                padding: 20px;
            }
            .form-control{
               font-size: 15px;
            }
            .tarea{
                padding-right: 0%;
            }
            .form-label{
               display: flex;
            }
            .e-label{
              font-display: flex;
              flex-direction: row;
              white-space: nowrap;
            
            }
            .form-group{
                display: block;
            }
            textarea {
                resize: none;
                margin-right: 100px;
            }

            #count_message {
              background-color: smoke;
              margin-top: -20px;
              margin-right: 10px;
            }
            }

    </style>

</head>
<body>

    <!-- ==========Main Section========== -->
<div class="container-fluid row  bg-primary text-white  m-0 text-center float-left"> 
    <div class="col  text-center " style=" font-weight: 500;  ">
        <h4>Morning Shift</h4>
    </div>
</div>
<div class="box">   
    <form action="" method="POST" class="form-group">

        <div class="card rounded p-3 mainbox">
            <div class="form-group row box-1">  
                <div class="sname col-6 col-sm-3">
                    <label for="name" class="form-label fs-5 text-black " style=" font-weight: 600; " >Site Name</label>
                    <input type="text" class="form-control " value="South Santhal CTF" disabled id="site_name" name="site_name" required>
                </div>

            </div>

            <div class="form-group row  ">  
                <div class="col-5">
                    <div class="row">
                        <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Net Oil Production</label>
                            <div class="row    ">
                                <div class="inp-box col-9 col-sm-3 ">
                                    <input type="number" class="form-control form-control-lg bg-light fs-6"  name="net_oil_production" required>
                                </div>
                                <div class="col-3 ">
                                    <label for="site" class="form-label fs-8 text-black  e-label" style=" font-weight: 500; " >(In m³)</label>
                                </div>                     
                            </div>  
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Net Oil Dispatch Through Line</label>
                            <div class="row  ">
                                <div class="col-9 col-sm-3 ">
                                    <input type="number" class="form-control form-control-lg bg-light fs-6"  name="net_oil_dispatch" required>
                                </div>
                                <div class="col-3">
                                    <label for="site" class="form-label fs-8 text-black e-label " style=" font-weight: 500; " >(In m³)</label>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            

            <div class="form-group row box-1 ">  
                <div class="col-5">
                    <div class="row">
                        <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Net Oil Closing Stock</label>
                            <div class="row  d-flex flex-row">
                                <div class="col-9 col-sm-3 ">
                                    <input type="number" class="form-control form-control-lg bg-light fs-6"  name="net_oil_closing" required>
                                </div>
                                <div class="col-3">
                                    <label for="site" class="form-label fs-8 text-black e-label" style=" font-weight: 500; " >(In m³)</label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <label for="site" class="form-label fs-5 text-black " style=" font-weight: 600; " >Emulsion Stock</label>
                            <div class="row  d-flex flex-row">
                                <div class="col-9 col-sm-3">
                                    <input type="number" class="form-control  text-black form-control-lg bg-light fs-6"  name="emulsion_stock" required>
                                </div>
                                <div class="col-3">
                                    <label for="site" class="form-label fs-8 text-black e-label" style=" font-weight: 500; " >(In m³)</label>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


            <div class="form-group row box-2">
                <div class="col-8 box-3">
                    <label for="cmp_cat" class="form-label fs-6 text-black " style=" font-weight: 600; ">remarks</label>
                    <textarea class="tarea form-control form-control-lg bg-light fs-6" id="text" name="text" 
      	            maxlength="500"  rows="6" 
                    required></textarea>
                        <div id="count">
                        <span class="pull-right label label-default" id="count_message"></span>
                        </div>
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
    
    <div class="fixed-bottom bg-primary text-white text-center " style=" font-weight: 500;  ">
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
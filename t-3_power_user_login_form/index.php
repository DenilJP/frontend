<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Login Form</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body{
    font-family: 'Poppins', sans-serif;
    /* background: #36454F; */
    /* margin: 0; */
}
.box-area{
   width: 930px;
   height : auto;
}


.rounded-5{
    border-radius: 30px;
}

/*------------ For small screens------------*/

@media only screen and (max-width: 768px){

     .box-area{
        margin: 0 10px;

     }
     .mainbox{
        padding: 20px;
        /* height: 460px; */
    }
    .form-control{
       padding-right: 20px;
    }
    .form-label{
        padding-left: 0;
       display: flex;
       flex-direction: row;
    }
    .row{
        display: flex;
        flex-direction: column;
    }
}

    </style>
</head>
<body class="bg-primary">
    <!-- main --> 
    <div class="container d-flex  justify-content-center align-items-center min-vh-100">
        <!-- login_container -->
        <div class="row border  rounded-5 p-1 bg-white shadow box-area">
            <!-- <div class="col  border rounded-5 text-center pt-3 pb-0 bg-primary m-1 ">
                <div class="header-text mb-4">
                    <p class="text-white fs-2 text-center  " style=" font-weight: 600; ">Power User Login</p>
                </div>
            </div> -->

            <div class="row">
                <div class="header-text ">
                    <p class="text-primary fs-3 text-center" >Records</p>
                </div>
            </div>

            <form action="" class="form-control bg-white border-0">
                <div class="row  justify-content-center text-center">
                    <div class="col">
                        <div class="form-label"><label for="exinput" class="text-primary fs-5 ">Show All DPR Of </label></div>
                    </div>
                    <div class="col">
                        <select class="form-select">
                            <option>option-1</option>
                            <option>option-2</option>
                            <option>option-3</option>
                            <option>option-4</option>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-3 fs-6">Submit</button>
                    </div>  
                </div>

                <div class="row justify-content-center text-center">
                    <div class="col">
                        <div class="form-label"><label for="exinput" class="text-primary fs-5">Show Production DPR On </label></div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                        <input type="date" id="bday" name="bday" value="2017-06-01">
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-3 fs-6">Submit</button>
                    </div>  
                </div>

                <div class="row justify-content-center text-center">
                    <div class="col">
                        <div class="form-label"><label for="exinput" class="text-primary fs-5">Show Shiftwise DPR on</label></div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="date" id="bday" name="bday" value="2017-06-01">
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-3 fs-6">Submit</button>
                    </div>  
                </div>


                <div class="input-group mb-3 justify-content-center">
                    <div class="col-6">
                        <button type="submit" class="btn btn-lg btn-outline-primary w-100 fs-5">Submit PRA File</button>
                    </div>
                </div>

            </form>     
        </div>
    </div>
    <div class="container-fluid  p-3 pb-1 bg-dark text-white text-center ">
        <p>Design & Developed By : Infocom Service , Mehsana</p>
    </div>
</body>
</html>
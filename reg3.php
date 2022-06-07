 <?php
 require_once dirname(__FILE__) . '/controllers/RoomsController.php'; 
 require_once dirname(__FILE__) . '/models/RoomType.php'; 

 $controller=new RoomsController();
 $rooms = $controller->room_type();

 $types = RoomType::all();
 ?>
 
 <html>

<style>
    .bg {
        background-color: chocolate;

    }

    .font {
        font-weight: 200;
    }
</style>

<head>
    <title>Regisration Form 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="layout/css/app.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg">
    <header>
        <a href="">
            <h1 class="text-center">Hurghada-grand-hotel</h1>
        </a>
    </header>
    <form action="">
            <div class=" conatainer ">
                <label for="rooms" class = " text-4xl  font-weight-bold"> reservation options </label>
                
                <select required id="rooms" name="rooms">
                    <option disabled selected>Select room type</option>
                    <?php
                    foreach($types as $type){
                        ?>
                        <option value="<?=$type["id"]; ?>"><?=$type["name"];?></option>
                        <?php
                    }
                    ?>
                    
                </select>
            </div>
            <div class="flex p-2" >
                <div class="bg-white text-center font-bold">
                    <img src="single(1).jpg" alt="Single" width="200" height="100" />
                    Single
                </div>
                <div class="bg-white text-center font-bold">
                    <img src="teriple.jpg" alt="teriple" width="200" height="100"/>
                    Triple
                </div>
            </div>
            <div class="flex p-2">
             <div class="bg-white text-center font-bold">
                <img src="double-double-room.jpg"alt="Double" width="200" height="100" name = "Double" />
                Double 
             </div>
             
                         <div class="bg-white text-center font-bold">
            <img src="queen.jpg" alt="queen" width="200" height="100"/>
            Queen 
            </div>
                    
                         <div class="bg-white text-center font-bold">
              <img src="cabana.jpg" alt="cabana" width="200" height="100"/>
              cabana</div>

                         <div class="bg-white text-center font-bold">
                <img src="suite2.jpg" alt="suite" width="200" height="100"/>
                Suite 
                         </div>
                </div>

            </div>
            <div>
                <button type="submit" class="btn btn-success">Save and Next </button>
            </div>
            </form>
            <?php
                if($rooms)
                    foreach($rooms as $room){
                        ?>

                        <p><?= $room["name"]; ?> <button>Pick</button> </p>                        
                        <?php
                    }
            ?>
            </body>
</html>
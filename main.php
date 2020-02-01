<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.css" rel="stylesheet" type="text/css">
    <script src="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.js" type="text/javascript"></script>
</head>
<body style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: fit; background-position: center center;">

  
        <header>

          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  
                  
                  <?php
                    if(isset($_COOKIE["loggedin"]))
                      {
                      ?>
                      <li class="nav-item">
                        
                        <h6 class="nav-link"><?php 
                          echo "Welcome " . $_COOKIE["username"] . "";
                          ?>
                          
                      </h6>
                      </li>
                      
                      <?php  
                      }
                      ?>

                      <li class="nav-item active">
                          <a class="nav-link" href="signout.php">
                              Logout
                    </a>
                      </li>
                  
                </ul>
                <form class="form-inline">
                  <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  </div>
                </form>
              </div>
            </div>
          </nav>
          
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main Layout-->
        <main>
          <div class="container">
          <?php
                        if(isset($_GET['Message'])){
                        ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10%;">
                  
                    <?php
                        echo $_GET['Message'];
                        ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  
                  
                  <?php } ?>


            <!-- Map is here! -->

            <div id="map" style="margin-top:7rem;width:100%; height: 600px; background: #eee; border: 2px solid #aaa;">
            </div>
            
            
            <!--Grid row-->
            <div class="row py-5">
              <!--Grid column-->
              
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
        </main>
        <!--Main Layout-->
        <div id="modals"></div>
<!--Modal-->

         

  
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
    var users = {} // users information e.g. {'sina':1}
    var inv_users = {} // users information e.g. {1:'sina'}

    function modalGenerator(id,inbox,cur_user){
      // inbox = []
    
 
      var t = fetch('http://127.0.0.1:8000/messages/').then(function(response) { return response.json()}).then(function(data) {
                        var result =  `
                            <div class="modal fade right" id="modalPoll-${id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                          <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                              <p class="heading lead">Chat room
                              </p>

                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">×</span>
                              </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">
                              <div class="text-center">
                                <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
                              </div>
                                    

                              <hr>

                              <!-- Radio -->
                              <p class="text-center">
                                <strong>Inbox</strong>
                              </p>
                            

                            <ul class="list-group">`;
                        data.forEach(element=>{
                            //console.log(element)
                                    
                            if(String(element._from)==String(id))
                            {
                              result+='<li class="list-group-item"  style="text-align: right;">'+element.body+'</li><br>'
                            }
                            else if(String(element.to)==String(id)){
                              result+='<li class="list-group-item">'+'<strong>'+inv_users[element._from]+'</strong>: '+element.body+'</li><br>'
                            }
                        });

                        result += `
                      
                              </ul>
                                

                              </div>

                              <!--Footer-->
                              <div class="modal-footer justify-content-center">
                              <!--Basic textarea-->
                                <div class="md-form">
                                    <select class="browser-default custom-select">
                                          <option selected>Select who want send message to...</option>
                                          `
                                          var keys = Object.keys(users);
                                          keys.forEach(element=>{
                                            if (users[element]!=id)
                                              result += `<option value="${users[element]}">${element}</option>`
                                          });
                                          var enable = "disabled";
                                          if(users[cur_user]==id)
                                            enable = "";
                                          result +=
                                          `
                                      </select>


                                  <input type="text" id="form79textarea#${id}" class="md-textarea form-control" placeholder="type your messsage..." rows="3"></input>
                                  <label for="form79textarea">Your message</label>
                                </div>
                                <a type="button" id="chat_submit" onclick="myFunction(this, ${id})"  class="btn btn-primary waves-effect waves-light ${enable}">Send
                                  <i class="fa fa-paper-plane ml-1"></i>
                                </a>
                                
                              </div>
                            </div>
                          </div>
                        </div>

                              `
                    return result;
                        
                    });
    return t;

    }



    function chatModal(name,id,marker){
      var cur_user = document.cookie.substring(document.cookie.indexOf("username")+"username".length+1,);
      var enable = "Inbox";
      if(users[cur_user]==id)
        enable = "Send Message";
      var modal = modalGenerator(id,[],cur_user).then(function(result){
        console.log(result);
          // if(id==users[cur_user])
            document.getElementById("modals").innerHTML += result;

          marker.bindPopup(`
          <h2>${name}</h2>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-${id}">${enable}</button>`)
      });
 
    }



    function myFunction(elmnt,id) {
          $.each($(".custom-select option:selected"), function(){            
              var to = ($(this).val());
              var body = document.getElementById("form79textarea#"+id).value
              var from = String(id)
               $.post("http://127.0.0.1:8000/messages/",
              {
                "body": body,
                "_from": from,
                "to": to,
              },
              function(data,status){
                alert("message sent successfully")
                window.location = "main.php";
                });
              });
          
        }

     $(document).ready(function(){

       
      
       var myMap = new L.Map('map', {
        key: 'web.xfugdP3bA5aqdROH6yNKqOs10rynGeyeu3uISyUs',
        maptype: 'dreamy',
        poi: true,
        traffic: false,
        center: [35.699739, 51.338097],
        zoom: 14
    });

         $.get("http://127.0.0.1:8000/users/",function(data,status){
                  data.forEach(element =>  {
                    users[element.user.username] = element.id;   
                  });   
                   
          });

          $.get("http://127.0.0.1:8000/users/",function(data,status){
                  data.forEach(element =>  {
                    inv_users[element.id] = element.user.username;   
                  });   
                   
          });

        $.get("http://127.0.0.1:8000/users/",function(data,status){
                  console.log(data);
                  data.forEach(element =>  {
                    var marker = L.marker([element.lat, element.lang],options={title: element.user.username}).addTo(myMap);
                    chatModal(element.user.username,element.id,marker); 
                    
                  });          
          });

            

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(myMap);
    }
      myMap.on('click', onMapClick);
            });
          
    

    

    

</script>

</body>
</html>

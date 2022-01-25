<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  
    <div class="wrapper">
        <!--Top menu -->
        <nav class="sidebar">
            <div class="profile">
                
                <h3><?php echo $_SESSION['firstname']; ?></h3>
                <hr>
            </div>
           <!--profile image & text-->
            <!--menu item-->
           <ul>
               <li>
                   <a href="#" class="color-text">
                       <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.125 27.625H18.875M1.375 14.5L4.29167 11.5833L1.375 14.5ZM4.29167 11.5833L14.5 1.375L24.7083 11.5833H4.29167ZM4.29167 11.5833V26.1667C4.29167 26.5534 4.44531 26.9244 4.7188 27.1979C4.99229 27.4714 5.36323 27.625 5.75 27.625H10.125L4.29167 11.5833ZM24.7083 11.5833L27.625 14.5L24.7083 11.5833ZM24.7083 11.5833V26.1667C24.7083 26.5534 24.5547 26.9244 24.2812 27.1979C24.0077 27.4714 23.6368 27.625 23.25 27.625H18.875L24.7083 11.5833ZM10.125 27.625C10.5118 27.625 10.8827 27.4714 11.1562 27.1979C11.4297 26.9244 11.5833 26.5534 11.5833 26.1667V20.3333C11.5833 19.9466 11.737 19.5756 12.0105 19.3021C12.284 19.0286 12.6549 18.875 13.0417 18.875H15.9583C16.3451 18.875 16.716 19.0286 16.9895 19.3021C17.263 19.5756 17.4167 19.9466 17.4167 20.3333V26.1667C17.4167 26.5534 17.5703 26.9244 17.8438 27.1979C18.1173 27.4714 18.4882 27.625 18.875 27.625H10.125Z" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span >Dashboard</span>
                   </a>
               </li>
               <li>
                   <a href="#" class="ride-btn">
                   
                    <svg width="29" height="29" viewBox="0 0 29 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.375 7.58333H27.625H1.375ZM1.375 13.4167H27.625H1.375ZM14.5 7.58333V19.25V7.58333ZM4.29167 19.25H24.7083C25.4819 19.25 26.2237 18.9427 26.7707 18.3957C27.3177 17.8487 27.625 17.1069 27.625 16.3333V4.66667C27.625 3.89312 27.3177 3.15125 26.7707 2.60427C26.2237 2.05729 25.4819 1.75 24.7083 1.75H4.29167C3.51812 1.75 2.77625 2.05729 2.22927 2.60427C1.68229 3.15125 1.375 3.89312 1.375 4.66667V16.3333C1.375 17.1069 1.68229 17.8487 2.22927 18.3957C2.77625 18.9427 3.51812 19.25 4.29167 19.25Z" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Rides</span>  
                        <span class="fas fa-caret-down ride"></span>
                   </a>
                   
                   <ul class="ride-show">
                       <li><a href="/add_rides.html" >Add Rides</a></li>
                       <li><a href="#">Rides List</a></li>
                   </ul>
          
               </li>
               <li>
                <a href="/pricing.html">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.125 8.66667H18.875H10.125ZM11.5833 8.66667C12.1579 8.66667 12.7268 8.77983 13.2576 8.99969C13.7884 9.21956 14.2707 9.54182 14.6769 9.94807C15.0832 10.3543 15.4054 10.8366 15.6253 11.3674C15.8452 11.8982 15.9583 12.4671 15.9583 13.0417C15.9583 13.6162 15.8452 14.1851 15.6253 14.7159C15.4054 15.2467 15.0832 15.729 14.6769 16.1353C14.2707 16.5415 13.7884 16.8638 13.2576 17.0836C12.7268 17.3035 12.1579 17.4167 11.5833 17.4167H10.125L14.5 21.7917L11.5833 8.66667ZM10.125 13.0417H18.875H10.125ZM27.625 14.5C27.625 16.2236 27.2855 17.9303 26.6259 19.5227C25.9663 21.1151 24.9995 22.562 23.7808 23.7808C22.562 24.9995 21.1151 25.9663 19.5227 26.6259C17.9303 27.2855 16.2236 27.625 14.5 27.625C12.7764 27.625 11.0697 27.2855 9.47728 26.6259C7.88488 25.9663 6.43799 24.9995 5.21922 23.7808C4.00045 22.562 3.03367 21.1151 2.37408 19.5227C1.71449 17.9303 1.375 16.2236 1.375 14.5C1.375 11.019 2.75781 7.68064 5.21922 5.21922C7.68064 2.75781 11.019 1.375 14.5 1.375C17.981 1.375 21.3194 2.75781 23.7808 5.21922C26.2422 7.68064 27.625 11.019 27.625 14.5Z" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     <span>Pricing</span>
                </a>
            </li>
            <li>
                <a href="#" class="ticket-btn">
                    <svg width="29" height="29" viewBox="0 0 29 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.875 1.2915V4.20817V1.2915ZM18.875 10.0415V12.9582V10.0415ZM18.875 18.7915V21.7082V18.7915ZM4.29167 1.2915C3.51812 1.2915 2.77625 1.59879 2.22927 2.14578C1.68229 2.69276 1.375 3.43462 1.375 4.20817V8.58317C2.14855 8.58317 2.89041 8.89046 3.43739 9.43744C3.98438 9.98442 4.29167 10.7263 4.29167 11.4998C4.29167 12.2734 3.98438 13.0153 3.43739 13.5622C2.89041 14.1092 2.14855 14.4165 1.375 14.4165V18.7915C1.375 19.5651 1.68229 20.3069 2.22927 20.8539C2.77625 21.4009 3.51812 21.7082 4.29167 21.7082H24.7083C25.4819 21.7082 26.2237 21.4009 26.7707 20.8539C27.3177 20.3069 27.625 19.5651 27.625 18.7915V14.4165C26.8515 14.4165 26.1096 14.1092 25.5626 13.5622C25.0156 13.0153 24.7083 12.2734 24.7083 11.4998C24.7083 10.7263 25.0156 9.98442 25.5626 9.43744C26.1096 8.89046 26.8515 8.58317 27.625 8.58317V4.20817C27.625 3.43462 27.3177 2.69276 26.7707 2.14578C26.2237 1.59879 25.4819 1.2915 24.7083 1.2915H4.29167Z" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                       
                     <span>Tickets</span>  
                     <span class="fas fa-caret-down ticket"></span>
                </a>
              
                <ul class="ticket-show">
                    <li><a href="#">Add Ticket</a></li>
                    <li><a href="#">Ticket List</a></li>
                </ul>

            </li>
            <li>
                <a href="#" class="user-btn">
                
                    <svg width="24" height="24" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3334 7.20833C17.3334 8.75543 16.7188 10.2392 15.6249 11.3331C14.5309 12.4271 13.0472 13.0417 11.5001 13.0417C9.95299 13.0417 8.46925 12.4271 7.37529 11.3331C6.28133 10.2392 5.66675 8.75543 5.66675 7.20833C5.66675 5.66124 6.28133 4.17751 7.37529 3.08354C8.46925 1.98958 9.95299 1.375 11.5001 1.375C13.0472 1.375 14.5309 1.98958 15.6249 3.08354C16.7188 4.17751 17.3334 5.66124 17.3334 7.20833V7.20833ZM11.5001 17.4167C8.79266 17.4167 6.19613 18.4922 4.2817 20.4066C2.36727 22.3211 1.29175 24.9176 1.29175 27.625H21.7084C21.7084 24.9176 20.6329 22.3211 18.7185 20.4066C16.804 18.4922 14.2075 17.4167 11.5001 17.4167V17.4167Z" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                      
                     <span>Users</span>  
                     <span class="fas fa-caret-down user"></span>
                </a>
                <ul class="user-show">
                    <li><a href="#">Add Staff</a></li>
                    <li><a href="#">Staff List</a></li>
                </ul>
        
            </li>
           </ul>
            
        </nav>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

  $('.ride-btn').click(function(){
$('nav ul .ride-show').toggleClass("show");
$('nav ul li .ride').toggleClass("rotate");

  });
  $('.ticket-btn').click(function(){
$('nav ul .ticket-show').toggleClass("show");
$('nav ul li .ticket').toggleClass("rotate");});
$('.user-btn').click(function(){
$('nav ul .user-show').toggleClass("show");
$('nav ul li .user').toggleClass("rotate");});
  </script>
</body>
</html>
<?php 

}
else{

     header("Location: index.php");

     exit();

}

 ?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web | Scholarium</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>


    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-graduation'></i>
            <span class="logo_name">Scholarium</span>
        </div>
        <ul class="nav-links">
            <li id="dashboard-link">
                <a href="/HTML/Dashboard/dashboard.html">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                    <i class='bx bxs-data' ></i>
                    <span class="link_name">Data</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Data</a></li>
                    <li><a class="sidebar-link" href="HTML/Data/shcolarship.html">Scholarship</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/fellowship.html">Fellowship</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/compitition.html">Competition</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/workshop.html">Workshop or Courses</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/grant.html">Grants</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/volunteer.html">Volunteer</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/training.html">Training center</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/culutralExchange.html">Cultural exchange</a></li>
                    <li><a class="sidebar-link" href="/HTML/Data/events.html">Events and Conferences</a></li>
                </ul>
            </li>



            <li id="users-link">
                <a  href="/HTML/Users/users.html">
                    <i class='bx bxs-user-detail'></i>
                    <span class="link_name">Users</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Users</a></li>
                </ul>
            </li>




            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-envelope'></i>
                        <span class="link_name">Applications</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Applications</a></li>
                    <li><a id="received-link" href="/HTML/Applications/received.html">Received</a></li>
                    <li><a id="inProgress-link" href="/HTML/Applications/inProgress.html">In Progress</a></li>
                    <li><a id="finished-link" href="/HTML/Applications/finished.html">Finished</a></li>
                </ul>
            </li>
            


            <li id="chat-link">
                <a href="/HTML/Chatting/chatting.html">
                    <i class='bx bx-conversation' ></i>
                    <span class="link_name">Chatting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chatting</a></li>
                </ul>
            </li>



            <li id="payment-link">
                <a href="/HTML/Payment/payment.html">
                    <i class='bx bx-dollar' ></i>
                    <span class="link_name">Payment</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Payment</a></li>
                </ul>
            </li>




            <li id="noti-link">
                <a href="/HTML/Notification/notification.php">
                    <i class='bx bxs-notification'></i>
                    <span class="link_name">Notification</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Notification</a></li>
                </ul>
            </li>


            <li id="support-link">
                <a href="/HTML/Support/support.html">
                    <i class='bx bx-support'></i>
                    <span class="link_name">Support</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Support</a></li>
                </ul>
            </li>
        <li>

        <div class="profile-details">
        <div class="profile-content">
            <img src="/Images/profile.jpg" alt="profile">
        </div>
        <div class="name-job">
            <div class="profile_name">Abdullah</div>
            <div class="job">Admin</div>
        </div>
        <i class='bx bx-log-out'></i>
        </div>
    </li>
</ul>
    </div>


    <section class="home-section">
    </section>


<script src="/JAVASCRIPT/index.js"></script>



    <script>
        
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++){
            arrow[i].addEventListener("click", (e)=> {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent);
                arrowParent.classList.toggle("showMenu");
            });
        }
    </script>
</body>
</html>
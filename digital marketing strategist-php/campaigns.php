
<?php
session_start();
require 'db-con.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Strategist</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="dms.css">
    <link rel="stylesheet" href="campaigns.css">
</head>
<body>
    <div class="nav_bar">
        <div class="search-container">
            <table class="element-container">
              <tr>
                <td>
                  <input type="text" placeholder="Search..." class="search">
                </td>
                <td>
                  <a><i class="fa-solid fa-magnifying-glass"></i></a>
                </td>
              </tr>
            </table>
        </div>
        <div class="user-wrapper">
            <img src="cham2.png" width="50px" height="50px" alt="user image">
            <div>
                <h4>Chamodi</h4>
                <small>Digital Marketing Strategist</small>
            </div>
        </div>
    </div>
    <div class="side_bar">
        <div class="logo">
            <img src="logosales.jpeg" width= "65%" height="55%">
        </div>
        <ul>
            <li><a href="dms.html">Home</a></li>
            <li class="active"><a href="campaigns.html">Campaigns</a></li>
            <li><a href="stats.html">Statistics</a></li>
            <li><a href="#">Customers</a></li>
            <li class="last-item">
                <table class="side-bar-icons">
                    <tr>
                      <td><i class="fa-regular fa-circle-user"></i></td>
                      <td><a href="profile.html">Profile</a></td>
                    </tr>
                    <tr>
                      <td><i class="fa-solid fa-arrow-right-from-bracket"></i></i></td>
                      <td><a href="#">Log out</a></td>
                    </tr>
                  </table>
            </li>
        </ul>
    </div>
    

      <div class="btn_cmpg">
        <!--<div class="search_box">
            <input type="text" class="input" placeholder="Search...">
            <div class="icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>-->
        <div class="search_container">
          <table class="element_container">
            <tr>
              <td>
                <input type="text" placeholder="Search Table..." class="search">
              </td>
              <td>
                <a><i class="fa-solid fa-magnifying-glass"></i></a>
              </td>
            </tr>
          </table>
        </div>

        <button id="add_btn">Add Campaign</button>  

      </div>
        

        <table class="content-table">
            <thead>
              <tr>
                <th>Campaign ID</th>
                <th>Start Date</th>
                <th>Objective</th>
                <th>Status</th>
                <th>Budget<br>(Rs.)</th>
              </tr>
            </thead>
            <!--<tbody>
              <tr>
                <td>12</td>
                <td>21/10/2022</td>
                <td>Awareness</td>
                <td>Ongoing</td>
                <td>750.00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>21/10/2022</td>
                <td>Awareness</td>
                <td>Ongoing</td>
                <td>750.00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>21/10/2022</td>
                <td>Awareness</td>
                <td>Ongoing</td>
                <td>750.00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>21/10/2022</td>
                <td>Awareness</td>
                <td>Ongoing</td>
                <td>750.00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>21/10/2022</td>
                <td>Awareness</td>
                <td>Ongoing</td>
                <td>750.00</td>
              </tr>
            </tbody>-->
          </table>
          <div class="navigation-table">
            <i class="fa-solid fa-circle-chevron-left fa-lg"></i>
            <i class="fa-solid fa-circle-chevron-right fa-lg"></i>
          </div>
            
      <div class="popup-container" id="popup_container">
        <div class="popup-modal">
          <form action="connect.php" method="post">
            <label for="name" class="title"><h3 style="color: rgb(0, 0, 0); margin-top: 3px; margin-right: 10px; margin-bottom: 20px;">Campaign ID :</h3> <h2 style="color: rgb(0, 0, 0);">002</h2>
          </label>
          <label for="start-date">Start Date
            <input type="date" id="s-date">
          </label>
          <label for="objective">Objective
            <select id="objective">
                <option value="awareness">Awareness</option>
                <option value="leads">Leads</option>
                <option value="engagement">Engagement</option>
                <option value="sales">Sales</option>
            </select>
          </label>
          <label for="status">Status
            <select id="status">
                <option value="tobelaunched">To-be Launched</option>
                <option value="ongoing">Ongoing</option>
                <option value="complete">Complete</option>
            </select>
          </label>
          <label for="budget">Budget
            <input type="number" id="budget">
          </label>
          <button class="cancel" id="close" type="reset" value="Reset">Cancel</button>
          <button class="submit" id="save" type="submit" value="Submit">Save</button>
          </form>

        </div>
      </div>

    <script>
        const add_btn = document.getElementById('add_btn');
        const close = document.getElementById('close');
        const save = document.getElementById('save');
        const popup_container = document.getElementById('popup_container');

        add_btn.addEventListener('click', () => {
            popup_container.classList.add('show');
        });

        close.addEventListener('click', () => {
            popup_container.classList.remove('show');
        });

        save.addEventListener('click', () => {
            popup_container.classList.remove('show');
        });

    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/ed71ee7a11.js" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard-Ornamint </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name" style="font-size: 15px;">
               PREETRAJ
            </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="uploadform.html">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Bill Upload</span>
                </a>
            </li>
            <li>
                <a href="photoupload.html">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Photo Upload</span>
                </a>
            </li>
            <!-- <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
        <input type="text" placeholder="Search..." id="myInput" onkeyup="myFunction()">
        <i class='bx bx-search'></i>
      </div>
            <div class="sidebar-button">

                <span id="walletId"></span>
            </div>
            <div class="profile-details" style="background: rgb(255, 0, 0, 0.5);">
                <img src="assets/images/MetaMask.png" alt="">
                <button type="button" onclick="connectMetamask()" id="metamaskConnect"
                    style="border: 0px; background: rgb(0, 0, 0, 0);">Connect Metamask</button>
                <!-- <i class='bx bx-chevron-down' ></i> -->
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number">40,876</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <!-- <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>  -->
            </div>



            <div class="sales-boxes">
                <!-- <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Customer</li>
              <li><a href="#">Alex Doe</a></li>
              <li><a href="#">David Mart</a></li>
              <li><a href="#">Roe Parter</a></li>
              <li><a href="#">Diana Penty</a></li>
              <li><a href="#">Martin Paw</a></li>
              <li><a href="#">Doe Alex</a></li>
              <li><a href="#">Aiana Lexa</a></li>
              <li><a href="#">Rexel Mags</a></li>
              <li><a href="#">Tiana Loths</a></li>
              <li><a href="#">Tiana Loths</a></li>
              <li><a href="#">Tiana Loths</a></li>
              <li><a href="#">Tiana Loths</a></li>
              <li><a href="#">Tiana Loths</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Sales</li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Returned</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Returned</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Delivered</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Total</li>
              <li><a href="#">$204.98</a></li>
              <li><a href="#">$24.55</a></li>
              <li><a href="#">$25.88</a></li>
              <li><a href="#">$170.66</a></li>
              <li><a href="#">$56.56</a></li>
              <li><a href="#">$44.95</a></li>
              <li><a href="#">$67.33</a></li>
              <li><a href="#">$23.53</a></li>
              <li><a href="#">$46.52</a></li>
            </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div> 
        </div> -->

                    <div class="top-sales box">
          <div class="title"> YOUR RECENT PURCHASES</div>
          <ul class="top-sales-details">
            <li>
              <table id="myTable" class="tg" style="table-layout: fixed; width: 361px">
                <colgroup>
                <col style="width: 200px">
                <col style="width: 200px">
                <col style="width: 200px">
                <col style="width: 200px">
                </colgroup>
                <thead>
                  <th class="tg-0lax">IMAGE</th>
                  <th class="tg-0lax">DATE</th>
                  <th class="tg-0lax">AMOUNT</th>
                  <th class="tg-0lax">ITEMS</th>
                  </thead>
                  <tbody>
                  <tr>
                                <td class="tg-0lax"><a href="https://cloudflare-ipfs.com/ipfs/QmTxyAPt24DxEYHQNqnizTqnNDzA5Ls7pkc9UQRZ63t9cT"><img src="./nft/one.jpeg"
                                            style="width:150px;height:150px"></a></td>
                                <td class="tg-0lax">14-04-2023</td>
                                <td class="tg-0lax">108000</td>
                                <td class="tg-0lax">GOLD CHAIN</td>
                            </tr>


                            <tr>
                                <td class="tg-0lax"><a href="https://cloudflare-ipfs.com/ipfs/QmfUQMUsdCa2FpMxyy3FgMr6zw78sRYkUFgWFuLeRacPrd"><img src="./nft/two.jpeg"
                                            style="width:150px;height:150px " alt=""></a></td>
                                <td class="tg-0lax">11-02-2020</td>
                                <td class="tg-0lax">127200</td>
                                <td class="tg-0lax">GOLD NECKLACE,EAR RING,BRACELET</td>
                            </tr>
                            <tr>
                                <td class="tg-0lax"><a href="https://cloudflare-ipfs.com/ipfs/Qmeo2RAPnFytzoo4LQF3CNxP6zgpmUq7SXf7sxW42A3jHc"><img src="./nft/three.jpeg"
                                            style="width:150px;height:150px " alt=""></a></td>
                                <td class="tg-0lax">16-08-2018</td>
                                <td class="tg-0lax">19200</td>
                                <td class="tg-0lax">DIAMOND NECKLACE,GOLD EAR RING,BRACELET</td>
                            </tr>
                            <tr>
                                <td class="tg-0lax"><a href="https://cloudflare-ipfs.com/ipfs/QmdCR7HwyecfoVntYKwoJsrUDPi8g3Fa7yNGryBJVy6YYz"><img src="./nft/four.jpeg" style="width:150px;height:150px" alt=""></a>
                                </td>
                                <td class="tg-0lax">04-01-2023</td>
                                <td class="tg-0lax">18000</td>
                                <td class="tg-0lax">DIAMOND NECKLACE,GOLD EAR RING</td>
                            </tr>
</tr>
<tr><td class="tg-0lax"><img src="./nft/five.jpeg" style="width:150px;height:150px" alt="">
                                </td>
                                <td class="tg-0lax">12-07-2018</td>
                                <td class="tg-0lax">86350</td>
                                <td class="tg-0lax">GOLD NECKLACE,PLATINUM BRACELET</td></tr>
                </tbody>
                </table>
          </ul>
          <!-- <table id="imageTable">
            <thead>
              <tr>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
            Images will be dynamically added here -->
            </tbody>
          </table> 
        </div> 
      </div>
    </div>
  </section>
                    <script src="https://cdn.jsdelivr.net/npm/@metamask/detect-provider"></script>
                    <script>
                        async function connectMetamask() {
                            const provider = await detectEthereumProvider();
                            if (provider) {
                                try {
                                    const accounts = await provider.request({ method: 'eth_requestAccounts' });
                                    const address = accounts[0];

                                    console.log(address)
                                    var connectButton = document.getElementById("metamaskConnect")
                                    connectButton.style.backgroundColor = "rgb(124,252,0,0.5)"
                                    var walletaddress = document.getElementById("walletId")
                                    walletaddress.textContent = address;
                                    // TODO: Send the address to your server for authentication
                                } catch (error) {
                                    console.error(error);
                                }
                            } else {
                                alert('Please install Metamask extension to connect your account');
                            }
                        }
                        let sidebar = document.querySelector(".sidebar");
                        let sidebarBtn = document.querySelector(".sidebarBtn");
                        sidebarBtn.onclick = function () {
                            sidebar.classList.toggle("active");
                            if (sidebar.classList.contains("active")) {
                                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                            } else
                                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");

                        }
                    </script>
                    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FrozenVentures</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/styles/seller.css" />
    
  </head>
  <body>
    <nav>
      <div class="burger-container"></div>

      <div class="search-bar">
        <input type="text" placeholder="Ice Cream So Good" />
        <button><i class="bx bx-search-alt-2"></i></button>
      </div>

      <div class="profile-container">
        <h2>Shop Name</h2>

        <img src="../assets/images/logo.png" alt="" />
      </div>
    </nav>

    <input type="checkbox" id="check" />
    <label for="check">
      <i class="bx bx-menu" id="btn"></i>
      <i class="bx bx-x" id="cancel"></i>
    </label>

    <div class="side-bar">
      <header>FV Manage Shop</header>

      <div class="lists-container">
        <div class="first-list">
          <ul>
            <li id="dashboardb">
              <a><i class="bx bxs-dashboard"></i>Dashboard</a
              >
            </li>
            <li id="orderb">
              <a><i class="bx bxs-package"></i>Order</a>
            </li>
            <li id="inboxb" >
              <a><i class="bx bxs-inbox"></i>Message Inbox</a>
            </li>
            <li id="inventoryb">
              <a><i class="bx bxs-box"></i>Inventory</a>
            </li>
          </ul>
        </div>

        <div class="second-list">
          <ul>
            <li id="settingsb">
              <a><i class="bx bxs-cog"></i>Settings</a>
            </li>
            <li>
              <a><i class="bx bx-log-out"></i>Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <section class="dashboard-container" id="dashboard">
      <h1>Dashboard</h1>
    </section>

    <section class="order-container" id="order" style="display: none;">
      <h1>Order</h1>
    </section>

    <section class="message-container" id="message-inbox" style="display: none;">
      <h1>Message Inbox</h1>
    </section>

    <section class="inventory-container" id="inventory" style="display: none;">
      <h1>Inventory</h1>
    </section>

    <section class="settings-container" id="settings" style="display: none;">
      <h1>Settings</h1>
    </section>
    <script defer src="../script/sideBar.js"></script>
  </body>
</html>

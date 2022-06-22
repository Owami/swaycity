<li class="nav-item nav-drawer-header">Apps</li>

<li class="nav-item <?php if(isset($nav)) {print($nav);} ?>">
    <a href="index"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
</li>
<li class="nav-item nav-drawer-header">Components</li>
<li class="nav-item <?php if(isset($nav2)) {print($nav2);} ?>">
    <a href="staff"><i class="ion-ios-people-outline"></i> Staff</a>
</li>
<li class="nav-item <?php if(isset($nav3)) {print($nav3);} ?>">
    <a href="pos"><i class="ion-ios-cart-outline"></i> Marketing</a>
</li>
<li class="nav-item <?php if(isset($nav4)) {print($nav4);} ?>">
    <a href="inv"><i class="ion-ios-filing-outline"></i> Inventory</a>
</li>
<li class="nav-item <?php if(isset($nav5)) {print($nav5);} ?>">
    <a href="plist"><i class="ion-ios-people-outline"></i> Clients</a>
</li>
<!-- // php code to get URL component -->
<?php  
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $third_part = $components[3];
?>

<nav>
                <ul>
                    <div class="sidebar-user">
                        <img src="../img/user.png" style="width: 64px">

                        <div class="font-weight-bold"><?= $this->session->userdata('userSession'); ?>
                        </div>

                        <small><?php echo ($this->session->userdata('type') == '0')? 'Admin': 'Staff'?> </small>
                    </div>  

                    <li class="<?php echo ( $third_part == '' || $third_part == 'customer' )? 'active': ''?>">
                        <!-- Task of Marianthi -->
                        <a href="/group13/Panel/customer">
                            <span><i class="fa fa-user"></i></span>
                            <span>Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">

                            <span><i class="fa fa-envelope"></i></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="<?php echo ( $third_part == '' || $third_part == 'dashboard' )? 'active': ''?>">
                        <a href="/group13/Login/dashboard">
                            <span><i class="fa fa-bar-chart"></i></span>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fas fa-money-check"></i></span>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fa fa-user"></i></span>
                            <span>Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="/group13/Login/logout">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                            <span>Log-out</span>
                        </a>
                    </li>

                </ul>
            </nav>
</div>
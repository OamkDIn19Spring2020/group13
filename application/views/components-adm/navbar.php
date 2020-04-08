<nav>
                <ul>
                    <div class="sidebar-user">
                        <img src="../img/user.png" class="tab-username sidebar-user">

                        <div class="font-weight-bold"><?= $this->session->userdata('userSession'); ?>
                        </div>

                        <small>Front-end Developer</small>
                    </div>  

                    <li>
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
                    <li class="active">
                        <a href="#">
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
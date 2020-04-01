<nav>
                <ul>
                    <div class="sidebar-user">
                        <img src="../img/user.png" alt="Linda Miller" class="tab-username sidebar-user">

                        <div class="font-weight-bold"><?= $this->session->userdata('userSession'); ?>
                        </div>

                        <small>Front-end Developer</small>
                    </div>  

                    <li>
                        <a href="#">
                            <span><i class="fa fa-user"></i></span>
                            <span>Users</span>
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
                        <a href="logout">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                            <span>Log-out</span>
                        </a>
                    </li>
                </ul>
            </nav>
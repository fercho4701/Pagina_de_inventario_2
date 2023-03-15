<?php require('./layout/header.php') ?>

<div class="p-4">
    <div class="welcome">
        <div class="content rounded-3 p-3">
            <h1 class="fs-3">Dashboard</h1>
            <p class="mb-0">...</p>
        </div>
    </div>

    <section class="statistics mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                    <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">1,245</h3> <span class="d-block ms-2">Reparaciones</span>
                        </div>
                        <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                    <i class="uil-receipt fs-2 text-center bg-danger rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">34</h3> <span class="d-block ms-2">Productos</span>
                        </div>
                        <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center p-3">
                    <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">5,245</h3> <span class="d-block ms-2">Usuarios</span>
                        </div>
                        <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="charts mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="chart-container rounded-2 p-3">
                    <h3 class="fs-6 mb-3">Graficos 1</h3>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chart-container rounded-2 p-3">
                    <h3 class="fs-6 mb-3">Graficos 2</h3>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </section>

    <section class="admins mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <!-- <h4>Admins:</h4> -->
                    <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                        <div class="img">
                            <img class="img-fluid rounded-pill" width="75" height="75" src="https://i.imgur.com/H0O6r93.jpg" alt="admin">
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5 mb-1">Drake</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                    </div>
                    <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                        <div class="img">
                            <img class="img-fluid rounded-pill" width="75" height="75" src="https://i.imgur.com/ziJH6Xg.jpg" alt="admin">
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5 mb-1">DPR IAN</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                    </div>
                    <div class="admin d-flex align-items-center rounded-2 p-3">
                        <div class="img">
                            <img class="img-fluid rounded-pill" width="75" height="75" src="https://i.imgur.com/eoLITqx.jpg" alt="admin">
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5 mb-1">Joge Lucky</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <!-- <h4>Moderators:</h4> -->
                    <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                        <div class="img">
                            <img class="img-fluid rounded-pill" width="75" height="75" src="https://i.imgur.com/EX7LxuN.jpg" alt="admin">
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5 mb-1">Joge Lucky</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                    </div>
                    <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                        <div class="img">
                            <img class="img-fluid rounded-pill" width="75" height="75" src="https://i.imgur.com/EX7LxuN.jpg" alt="admin">
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5 mb-1">Joge Lucky</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                    </div>
                    <div class="admin d-flex align-items-center rounded-2 p-3">
                        <div class="img">
                            <img class="img-fluid rounded-pill" width="75" height="75" src="https://i.imgur.com/EX7LxuN.jpg" alt="admin">
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5 mb-1">Joge Lucky</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statis mt-4 text-center">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="box bg-primary p-3">
                    <i class="uil-eye"></i>
                    <h3>5,154</h3>
                    <p class="lead">Productos nuevos</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="box bg-danger p-3">
                    <i class="uil-user"></i>
                    <h3>245</h3>
                    <p class="lead">Usuarios registrados</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="box bg-warning p-3">
                    <i class="uil-shopping-cart"></i>
                    <h3>5,154</h3>
                    <p class="lead">Productos vendidos</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="box bg-success p-3">
                    <i class="uil-feedback"></i>
                    <h3>1,245</h3>
                    <p class="lead">Reparaciones</p>
                </div>
            </div>
        </div>
    </section>

    <section class="charts mt-4">
        <div class="chart-container p-3">
            <h3 class="fs-6 mb-3">Chart title number three</h3>
            <div style="height: 300px">
                <canvas id="chart3" width="100%"></canvas>
            </div>
        </div>
    </section>
</div>

<?php require('./layout/footer.php') ?>

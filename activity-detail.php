<?php require_once'includes/header.php'?>

<body>
    <?php require_once'includes/navbar.php'?>

    <h2 class="text-center mt-5" style="text-decoration: underline;">11-03-2024</h2>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                            data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">SAGAR ROAD</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                            href="#list-profile" role="tab" aria-controls="list-profile">PAWANPURI</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list"
                            href="#list-messages" role="tab" aria-controls="list-messages">JAILROAD</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list"
                            href="#list-settings" role="tab" aria-controls="list-settings">MP COLONY</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- first location  -->
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                            aria-labelledby="list-home-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Yash</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis.</td>
                                    </tr>
                                    <tr>
                                        <td>Pawan</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis Lorem ipsum dolor sit amet.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- secound location  -->
                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                            aria-labelledby="list-profile-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dheeraj</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis Lorem ipsum dolor sit amet.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- third location  -->
                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                            aria-labelledby="list-messages-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Neeraj</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis.</td>
                                    </tr>
                                    <tr>
                                        <td>Suraj</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis.</td>
                                    </tr>
                                    <tr>
                                        <td>Seema</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- fourth location -->
                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                            aria-labelledby="list-settings-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ashish</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
                                            perferendis.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php' ?>
</body>

</html>
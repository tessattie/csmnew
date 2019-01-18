
<?php require 'C:\wamp\www\caisses\app\views\header.php'; ?>

<?php require 'C:\wamp\www\caisses\app\views\menu.php'; ?>

<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                    <div class="card-header">
                                        <strong>New</strong> User Account
                                    </div>
                                    <form action="<?= DIRECTORY_NAME ?>/public/account/add" method="post" class="form-horizontal">
                                    <div class="card-body card-block">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Role</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Administrator</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="full_name" placeholder="Full name" class="form-control">
                                                    <small class="form-text text-muted">Enter user full name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="username" placeholder="Username" class="form-control">
                                                    <input type="hidden" name="role" placeholder="Username" value="1">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email" placeholder="Email" class="form-control">
                                                    <small class="help-block form-text">Enter user email. They will receive their password at this address</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Blocked</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small class="help-block form-text">The user password will be generated</small>

                                        
                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" name = "submit" class="btn btn-primary btn-sm" value = "Submit">
                                    </div>
                                    </form>
                                </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Users</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Administrator Account</h3>
                                <div class="table-data__tool">
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Registers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>Tess Attié</td>
                                                <td>
                                                    <span class="block-email">tessattie@gmail.com</span>
                                                </td>
                                                <td class="desc">Administrator</td>
                                                <td>Active</td>
                                                <td>
                                                    001-002-003-007
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>Amir Al-Rayes</td>
                                                <td>
                                                    <span class="block-email">amir@gmail.com</span>
                                                </td>
                                                <td class="desc">Administrator</td>
                                                <td>Active</td>
                                                <td>
                                                    ALL
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Caribbean Supermarket S.A. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

<?php include_once 'C:/wamp/www/caisses/app/views/footer.php'; ?>


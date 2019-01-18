<?php require 'C:\wamp\www\caisses\app\views\header.php'; ?>

<?php require 'C:\wamp\www\caisses\app\views\menu.php'; ?>
 <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Final Sales</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Daily sales by type</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Cash</option>
                                                <option value="">Check</option>
                                                <option value="">Credit</option>
                                                <option value="">Card</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">PDF</option>
                                                <option value="">Excel</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>POS #</th>
                                                <th>Payment Type</th>
                                                <th>Total USD</th>
                                                <th>Total HTG</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>004</td>
                                                <td>
                                                    <span class="block-email">CASH</span>
                                                </td>
                                                <td class="desc">325,251.00</td>
                                                <td>3,251,985.00</td>
                                                <td>
                                                    <label class="switch switch-default switch-pill switch-success mr-2">
                                                      <input type="checkbox" class="switch-input" checked="true">
                                                      <span class="switch-label"></span>
                                                      <span class="switch-handle"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>004</td>
                                                <td>
                                                    <span class="block-email">CHECK</span>
                                                </td>
                                                <td class="desc">152,000.00</td>
                                                <td>1,260,000.00</td>
                                                <td>
                                                    <label class="switch switch-default switch-pill switch-success mr-2">
                                                      <input type="checkbox" class="switch-input" checked="true">
                                                      <span class="switch-label"></span>
                                                      <span class="switch-handle"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>004</td>
                                                <td>
                                                    <span class="block-email">CREDIT</span>
                                                </td>
                                                <td class="desc">52,251.00</td>
                                                <td>365,254.00</td>
                                                <td>
                                                    <label class="switch switch-default switch-pill switch-danger mr-2">
                                                      <input type="checkbox" class="switch-input" checked="false">
                                                      <span class="switch-label"></span>
                                                      <span class="switch-handle"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>004</td>
                                                <td>
                                                    <span class="block-email">CARD</span>
                                                </td>
                                                <td class="desc">487,000.00</td>
                                                <td>1,525,000.00</td>
                                                <td>
                                                    <label class="switch switch-default switch-pill switch-success mr-2">
                                                      <input type="checkbox" class="switch-input" checked="true">
                                                      <span class="switch-label"></span>
                                                      <span class="switch-handle"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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

<?php require 'C:\wamp\www\caisses\app\views\footer.php'; ?>

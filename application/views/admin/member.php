<div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $title?></h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Member
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td> 
                                                <a class="nav-link" style="float: left;" href="<?php echo base_url() ?>admin/dashboard/member">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="nav-link" href="<?php echo base_url() ?>admin/dashboard/member">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td> 
                                                <a class="nav-link" style="float: left;" href="<?php echo base_url() ?>admin/dashboard/member">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="nav-link" href="<?php echo base_url() ?>admin/dashboard/member">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
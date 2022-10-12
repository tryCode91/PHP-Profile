
            <div class="container mt-5 mb-5">
                <div class="row mb-2 mt-4 mr-1 float-right">
                    <button class="btn mb-2 text-light buttonADD" style="background-color: 
                #4542f5;">Add Person</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover bg-white custom-table">
                        <thead class="thead-dark">
                            <tr class="bg-dark text-light">  
                                <th>Name</th>
                                <th>Age</th>
                                <th>Language</th>
                                <th>Active</th>
                                <th>Musictaste</th>
                                <th>Email</th>
                                <th>Start Date</th>
                                <th>Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($result_arr as $x => $x_value) {
                                    if ($x_value['Status'] == "1") {
                                        $x_value['Status'] = "Yes";
                                    } else if ($x_value['Status'] == "0") {
                                        $x_value['Status'] = "No";
                                    }
                            ?>
                                <tr data-id="<?php echo $x_value['ID'];?>">
                                    <td style="width:12.5%"><?php echo $x_value['Name']; ?></td>
                                    <td style="width:12.5%"><?php echo $x_value['Age'];?></td>
                                    <td style="width:12.5%"><?php echo $x_value['Language'];?></td>
                                    <td style="width:12.5%"><?php echo $x_value['Status'];?></td>
                                    <td style="width:12.5%"><?php echo $x_value['Musictaste'];?></td>              
                                    <td style="width:16.5%"><?php echo $x_value['Email']; ?></td>
                                    <td style="width:12.5%"><?php echo $x_value['Start_time']; ?></td>
                                    <td style="width:8.5%">
                                        <button type="button" data-toggle="modal" data-target="#showModal" data-id="<?php echo $x_value['ID'];?>" class="btn btn-danger text-dark delete btn-delete">Del</button>
                                        
                                        <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Confirm</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this person?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button"  class="btn modalDelete" style="background-color: #e1a356">Confirm</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>               
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div><!--content container end-->
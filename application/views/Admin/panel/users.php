<div class="tab-pane fade in show active my-2" id="users" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h4 class="font-weight-bold text-center red-text"><i class="fa fa-user mx-2"></i>Users Registered</h4>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 table-responsive mb-2 table-wrapper-scroll-y">
            <table class="table table-hover" width="100%">
                <thead class="font-weighted-bold text-center">
                    <tr>
                    <th class="th-sm">S.No.
                    </th>
                    <th class="th-sm">User_ID
                    </th>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">D.O.B.
                    </th>
                    <th class="th-sm">Email Address
                    </th>
                    <th class="th-sm">Mobile No.
                    </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $i=1; foreach($users as $userd):?>
                        <tr>
                            <td><?= $i++;?></td>
                            <td><?= $userd['u_id'];?></td>
                            <td><?= $userd['u_name'];?></td>
                            <td><?= $userd['u_dob'];?></td>
                            <td><?= $userd['u_email'];?></td>
                            <td><?= $userd['u_phone'];?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>        
            </table>
            </div>
        </div>
    </div>
</div>
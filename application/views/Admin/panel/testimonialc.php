<div class="tab-pane fade" id="testimonialc" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h4 class="font-weight-bold text-center red-text"><i class="fa fa-user-o mx-2"></i>Testimonials Registered</h4>
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
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Designation
                        </th>
                        <th class="th-sm">Message
                        </th>
                        <th class="th-sm">Image
                        </th>
                        <th class="th-sm">Edit
                        </th>
                        <th class="th-sm">Delete
                        </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $i=1; 
                        foreach($testimonials as $tdata): ?>
                        <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $tdata['tname']; ?></td>
                        <td><?= $tdata['tdesignation']; ?></td>
                        <td><?= $tdata['tmessage']; ?></td>
                        <td><img src="<?= $tdata['tpath'];?>" class="rounded-circle " height="120px" width="120px"></td>
                        <td><a href="#"><i class="fa fa-edit indigo-text"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash red-text"></i></a></td>
                        </tr>
                        <?php endforeach;
                        if($i == 1){ ?>
                        <tr>
                        <td align="center" colspan="7">
                        No Testimonials Uploaded Yet!!
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>        
                </table>
            </div>
        </div>
    </div>
</div>
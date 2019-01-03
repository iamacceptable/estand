<div class="tab-pane fade" id="homepagecc" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h4 class="font-weight-bold text-center red-text"><i class="fa fa-home mx-2"></i>Caurosels Registered</h4>
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
                            <th class="th-sm">Title
                            </th>
                            <th class="th-sm">Description
                            </th>
                            <th class="th-sm">Image Name
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
                        foreach($caurosel as $cdata): ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $cdata['ctitle']; ?></td>
                            <td><?= $cdata['cdescription']; ?></td>
                            <td><?= $cdata['cname']; ?></td>
                            <td><img src="<?= $cdata['cpath'];?>" height="15%"></td>
                            <td><a href="#"><i class="fa fa-edit indigo-text"></i></a></td>
                            <td><a href="<?= base_url();?>index.php/Admin/cdelete/<?= $cdata['cid'];?>"><i class="fa fa-trash red-text"></i></a></td>
                        </tr>
                        <?php endforeach;
                        if($i == 1){ ?>
                        <tr>
                            <td align="center" colspan="7">
                            No Caurosel Uploaded Yet!!
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>        
                </table>
            </div>
        </div>
    </div>
</div>

    <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2><?php echo $title; ?></h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" id="activeAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="/admin/brand/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                        <?php echo form_open('', [ 'name' => 'formView', 'id' => 'formView', 'method' => 'get' ]); ?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="per_page" class="form-control" onchange="javascript:document.forms['formView'].submit()">
                                            <option value="15" <?php if ($this->input->get('per_page') == '15') {echo 'selected';} ?>>15</option>
                                            <option value="25" <?php if ($this->input->get('per_page') == '25') {echo 'selected';} ?>>25</option>
                                            <option value="50" <?php if ($this->input->get('per_page') == '50') {echo 'selected';} ?>>50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Search" value="<?php echo $this->input->get('q'); ?>">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                        
                    <br>
                    <?php if($brands): ?>
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:40%">Title</th>
                                <th style="width:20%">Brand Image</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($brands as $brand): ?>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox11" type="checkbox" value="1">
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                <td><?php echo $brand->title; ?></td>
                                <td align="center">
                                    <?php if ($brand->brand_img == 'image not found') : ?>
                                        <img src="/assets/image/noimage.jpg" width="100" class="img-thumbnail">
                                    <?php else: ?>
                                        <img src="/uploads/<?php echo $brand->brand_img; ?>" class="img-thumbnail"
                                     width="100" alt="<?php echo $brand->title; ?>">
                                    <?php endif ?>       
                                </td>
                                <td align="center">
                                    <?php if ($brand->status == 'DEACTIVE'): ?>
                                        <a href="/admin/brand/status/<?php echo $brand->id; ?>" class="singleStatus">
                                            <span class="label label-important">Deactive</span>
                                        </a> 
                                    <?php else: ?>
                                        <a href="/admin/brand/status/<?php echo $brand->id; ?>" class="singleStatus">
                                            <span class="label label-info">Active</span>
                                        </a> 
                                    <?php endif ?>
                                 </td>
                                <td>
                                    <a href="/admin/brand/edit/<?php echo $brand->id; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/brand/delete/<?php echo $brand->id; ?>" class="label label-important singleDelete"> <i class="fa fa-trash-o"></i></a>    
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>

                    </table>
                    <?php echo $this->pagination->create_links(); ?>
                    <?php else: ?> 
                     
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                    <?php endif ?>

                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
<script>
    $(document).ready(function() {
        // Single Active //
        $(".singleStatus").on('click', function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            var self = $(this);

            self.html("<img src='/assets/img/ajax-loader.gif'>");

            $.get(href, function(response) {
                if (response == 'DEACTIVE')
                    self.html("<span class='label label-important'>Deactive</span>");
                else
                    self.html("<span class='label label-info'>Active</span>") 
            });
        });
        
        // Single Delete //
        $(".singleDelete").on('click', function(e) {
            e.preventDefault();
            if (confirm("Are you sure you want to delete this?")) 
            {
                var href = $(this).attr('href');
                var self = $(this);

                $.get(href, function(response) {
                    if (response == true) 
                    {
                        self.closest('tr').css('background-color', '#0aa699').fadeOut('slow');
                        self.remove();
                    }
                });
            }
            else
                return false;
        });   





});
</script>

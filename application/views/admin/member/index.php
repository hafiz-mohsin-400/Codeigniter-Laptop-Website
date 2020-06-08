 <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Manage Member</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="per_page" class="form-control">
                                            <option value="15">15</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Search" value="">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:30%">Fullname</th>
                                <th style="width:20%">Email</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox11" type="checkbox" value="1">
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                <td>Slider image</td>
                                <td>Slider image</td>
                                <td>
                                    <span class="label label-important">Deactive!</span>
                                    <span class="label label-info">Active!</span>
                                </td>
                                <td>
                                    <a href="/admin/product/edit" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="#" class="label label-important"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>




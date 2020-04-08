<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            

            <h4 class="page-title">Users</h4>
            <p class="text-muted page-title-alt">All Users </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>All Users</b></h4>
            
            <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable-fixed-header_length">
                        <label>
                            Show 
                            <select name="datatable-fixed-header_length" aria-controls="datatable-fixed-header" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            entries
                        </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="datatable-fixed-header_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-fixed-header"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-fixed-header_info">
                        <tbody>
                            <?php foreach ($posts as $key => $post) { ?>
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><?php echo $key +1; ?></td>
                                    <td><?php echo $post->name; ?></td>
                                    <td><?php echo gmdate('d m Y', $post->date); ?></td>
                                    <td><?php echo $post->email; ?></td>
                                    
                                </tr>
                            <?php } ?>
                            
                            
                        </tbody>
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px; min-width: 160px;">Sr.no</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px; min-width: 160px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 264px; min-width: 264px;">Create Date</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 116px; min-width: 116px;">Email</th>
                                
                            </tr>
                        </thead>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" aria-controls="datatable-fixed-header" tabindex="0" id="datatable-fixed-header_previous"><a href="#">Previous</a></li>
                            <li class="paginate_button active" aria-controls="datatable-fixed-header" tabindex="0"><a href="#">1</a></li>
                            <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">2</a></li>
                            <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">3</a></li>
                            <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">4</a></li>
                            <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">5</a></li>
                            <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">6</a></li>
                            <li class="paginate_button next" aria-controls="datatable-fixed-header" tabindex="0" id="datatable-fixed-header_next"><a href="#">Next</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        
    </div>

    


</div> <!-- container -->
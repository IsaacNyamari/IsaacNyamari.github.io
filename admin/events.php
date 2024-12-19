<?php include("header.php") ?>
<?php include("protect.php") ?>
<body>

    <div class="container-fluid">

        <div class="row">
            <?php include("sidebar.php") ?>
            <div class="col-sm-9 mt-2 right-section">
                <div class="top-bar">
                    <h3>Events</h3> <span><button data-bs-toggle="modal" data-bs-target="#events"
                            class="btn btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></span>
                </div>
                <hr>
                <div class="table-responsive border mb-2">
                    <table id="myTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Holy Spirit</td>
                                <td>Its the key to supernatural</td>
                                <td>2024:07:12</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</button>
                                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                            Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- Modal Add Sermons-->
        <div class="modal fade" id="events" tabindex="-1" data-bs-backdrop="static" role="dialog"
            aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Add Event
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">Add rows here</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php include("footer.php")?>
</body>

</html>
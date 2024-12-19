<?php include("header.php")?>
<body>
    
    <div class="container-fluid">
        
        <div class="row">
            <?php include("sidebar.php")?>
       
            <div class="col-sm-9 mt-2 right-section">
                <div class="top-bar">
                    <h3>Sermons</h3> <span><button data-bs-toggle="modal" data-bs-target="#sermons"
                            class="btn btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></span>
                </div>
                <hr>
                <div class="table-responsive border mb-2 w-100">
                    <table id="myTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Speaker</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Holy Spirit</td>
                                <td>Its the key to supernatural</td>
                                <td>Pst. Anders</td>
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
        <div class="modal fade" id="sermons" tabindex="-1" data-bs-backdrop="static" role="dialog"
            aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Add Sermon
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-container border p-4 mb-5 rounded">
                                <form action="">
                                    <div class="from-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" value="lorem Ipsum" id="title"
                                            class="form-control">
                                    </div>
                                    <div class="from-group">
                                        <label for="message">Message</label>
                                        <textarea type="text" name="message" value="Jablessions76@gmail.com" id="message"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="from-group">
                                        <label for="speaker">Speaker</label>
                                        <input type="text" name="speaker" value="Pst. John" id="speaker"
                                            class="form-control">
                                    </div>
                                    <div class="from-group">
                                        <label for="date">Date</label>
                                        <input type="date" id="date" placeholder="Choose Date" name="date" class="form-control">
                                    </div>
                                    <div class="form-group mt-2 mb-2">
                                        <button class="btn btn-success">
                                            <i class="fa fa-save"></i>save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
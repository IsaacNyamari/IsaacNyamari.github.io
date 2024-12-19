<?php include("header.php") ?>

<body>

    <div class="container-fluid">

        <div class="row">
            <?php include("sidebar.php") ?>
            <div class="col-sm-9 mt-2 right-section">
                <div class="top-bar">
                    <h3>Members</h3> <span><button data-bs-toggle="modal" data-bs-target="#members"
                            class="btn btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></span>
                </div>
                <hr>
                <div class="table-responsive border mb-2">
                    <table id="myTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Residence</th>
                                <th>Date Joined</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Isaac Nyamari</td>
                                <td>+254759900802</td>
                                <td>Kenya</td>
                                <td>2024/12/14</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editMember"><i class="fa fa-edit"
                                                aria-hidden="true"></i>
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
        <!-- Modal Add Members-->
        <div class="modal fade" id="members" tabindex="-1" data-bs-backdrop="static" role="dialog"
            aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Add Member
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label for="names">Name</label>
                                    <input type="text" name="names" id="names" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="contact">Contact</label>
                                    <input type="text" id="contact" name="contact" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="residence">Residence</label>
                                    <input type="text" name="residence" id="residence" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="date_joined">Date Joined</label>
                                    <input type="date" name="date_joined" id="date_joined" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    
                                    <button type="submit" class="btn btn-danger"> <div class="fa fa-save"></div> Add Member</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Update members-->
        <div class="modal fade" id="editMember" tabindex="-1" data-bs-backdrop="static" role="dialog"
            aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Member
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label for="names">Name</label>
                                    <input type="text" name="names" id="names" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="contact">Contact</label>
                                    <input type="text" id="contact" name="contact" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="residence">Residence</label>
                                    <input type="text" name="residence" id="residence" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="date_joined">Date Joined</label>
                                    <input type="date" name="date_joined" id="date_joined" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    
                                    <button type="submit" class="btn btn-danger"> <div class="fa fa-save"></div> Save Changes</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include("footer.php") ?>
</body>

</html>
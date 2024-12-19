<?php include("header.php") ?>

<body>

    <div class="container-fluid">

        <div class="row">
            <?php include("sidebar.php") ?>
            <div class="col-sm-9 right-section">
                <div class="top-bar">
                    <h3>Dashboard</h3> <span><button data-bs-toggle="modal" data-bs-target="#sermons"
                            class="btn btn-secondary"><i class="fa fa-user" aria-hidden="true"></i> Add</button></span>
                </div>
                <hr>
                <div class="info-section m-2">
                    <div class="info-details">
                        <h3>Testimonies</h3>
                        <span class="count">All: 30</span>
                        <div class="btn-group">

                            <a href="testimonies.php" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i>
                                View All</a>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3>Sermons</h3>
                        <span class="count">All: 5</span>
                        <div class="btn-group">

                            <a href="sermons.php" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i>
                                View
                                All</a>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3>Gallery</h3>
                        <span class="count">All: 30</span>
                        <div class="btn-group">
                            <a href="gallery.php" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i>
                                View
                                All</a>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3>Events</h3>
                        <span class="count">All: 4</span>
                        <div class="btn-group">
                            <a href="events.php" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View
                                All</a>
                        </div>
                    </div>
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

    <?php include("footer.php") ?>
</body>

</html>
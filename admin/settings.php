<?php include("header.php")?>
<?php include("protect.php") ?>
<body>

    <div class="container-fluid">

        <div class="row">
        <?php include("sidebar.php")?>
            <div class="col-sm-9 mt-2 right-section">
                <div class="top-bar">
                    <h3>Settings</h3> <span>
                </div>
                <hr>
                
                
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
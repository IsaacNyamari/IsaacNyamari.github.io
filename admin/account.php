<?php include("header.php") ?>

<body>

    <div class="container-fluid">

        <div class="row">
            <?php include("sidebar.php") ?>
            <div class="col-sm-9 mt-2 right-section">
                <div class="top-bar">
                    <h3>My Account</h3> <span>
                </div>
                <hr>

                <div class="form-container border p-4 mb-5 rounded">
                    <form action="">
                        <div class="from-group">
                            <label for="names">Names</label>
                            <input type="text" name="names" value="Isaac Nyamari" id="names" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" value="Jablessions76@gmail.com" id="photo" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="Jablessions76@gmail.com" id="email" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option class="text-center" value="---">--Select--</option>
                                <option value="admin">Admin</option>
                                <option value="moderator">Moderator</option>
                            </select>
                        </div>
                        <div class="form-group mt-2 mb-2">
                            <button class="btn btn-success">
                                <i class="fa fa-save"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>



    </div>
    <?php include("footer.php") ?>

</body>

</html>
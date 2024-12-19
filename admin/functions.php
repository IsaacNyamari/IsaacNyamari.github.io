<?php
session_start();

trait GenerateId
{
    function generateId($len = 50)
    {
        $id = bin2hex(random_bytes($len / 2));
        return $id;
    }
}

class Dbh
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "assemblies";

    protected function connect()
    {
        $conn =  new mysqli($this->hostname, $this->username, $this->password, $this->database);
        return $conn;
    }
}

class Events extends Dbh
{
    use GenerateId;
    public function addEvent($title = null, $description = null, $date = null)
    {
        $id  = $this->generateId();
        $conn = $this->connect();
        if ($id !== null && $title !== null && $description !== null && $date !== null) {
            $sql = "INSERT INTO `events`(`id`, `title`, `description`, `date`) 
            VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $id, $title, $description, $date);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Event '$title' added successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function updateEvent($id = null, $title = null, $description = null, $date = null)
    {
        $conn = $this->connect();
        if ($id !== null && $title !== null && $description !== null && $date !== null) {
            $sql = "UPDATE `events` SET `title`=?, `description`=?, `date`=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $title, $description, $date, $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Event updated successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function deleteEvent($id = null)
    {
        $conn = $this->connect();
        if ($id !== null) {
            $sql = "DELETE FROM `events` WHERE `id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Deleted successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
}
class Member extends Dbh
{
    use GenerateId;
    public function addMember($names = null, $contact = null, $residence = null, $date_joined = null)
    {
        $conn = $this->connect();
        $id = $this->generateId();
        if ($id !== null && $names !== null && $contact !== null && $residence !== null && $date_joined !== null) {
            $sql = "INSERT INTO `members`(`member_id`, `names`, `contacts`, `residence`, `date_joined`)
            VALUES (?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $id, $names, $contact, $residence, $date_joined);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "'$names' added successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function updateMember($member_id = null, $names = null, $contact = null, $residence = null, $date_joined = null)
    {
        $conn = $this->connect();
        if ($member_id !== null && $names !== null && $contact !== null && $residence !== null && $date_joined !== null) {
            $sql = "UPDATE `members` SET `names`=?, `contacts`=?, `residence`=?, `date_joined`=?
            WHERE `member_id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $names, $contact, $residence, $date_joined, $member_id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Updated'$names' added successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function deleteMember($member_id = null)
    {
        $conn = $this->connect();
        if ($member_id !== null) {
            $sql = "DELETE FROM `members` WHERE `member_id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $member_id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Deleted successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
}
class Sermon extends Dbh
{
    use GenerateId;
    public function addSermon($title = null, $description = null, $speaker = null, $date = null)
    {
        $conn = $this->connect();
        $id = $this->generateId();
        if ($id !== null && $title !== null && $description !== null && $speaker !== null && $date !== null) {
            $sql = "INSERT INTO `sermons`(`id`, `title`, `description`, `speaker`, `date`)
            VALUES (?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $id, $title, $description, $speaker, $date);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Sermon '$title' added successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function updateSermon($id = null, $title = null, $description = null, $speaker = null, $date = null)
    {
        $conn = $this->connect();
        if ($id !== null && $title !== null && $description !== null && $speaker !== null && $date !== null) {
            $sql = "UPDATE `sermons` SET `title`=?, `description`=?, `speaker`=?, `date`=? WHERE `id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $title, $description, $speaker, $date, $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Updated '$title' successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function deleteSermon($id = null)
    {
        $conn = $this->connect();
        if ($id !== null) {
            $sql = "DELETE FROM `sermons` WHERE `id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Deleted successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
}
class Testimony extends Dbh
{
    use GenerateId;
    public function addTestimony($testifier = null, $testimony = null, $created = null)
    {
        $id = $this->generateId();
        $conn = $this->connect();
        if ($id !== null && $testifier !== null && $created !== null && $testimony !== null) {
            $sql = "INSERT INTO `testimonies`(`id`, `testifier`, `testimony`, `created`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $id, $testifier, $testimony, $created);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Testimony '$testimony' added successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function updateTestimony($id = null, $testifier = null, $testimony = null, $created = null, $status = null)
    {
        $conn = $this->connect();
        if ($id !== null && $testifier !== null && $created !== null && $testimony !== null) {
            $sql = "UPDATE `testimonies` SET `testifier`=?, `testimony`=?, `created`=? WHERE `id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $testifier, $testimony, $created, $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Testimony '$testimony' updated successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
    public function deleteTestimony($id = null)
    {
        $conn = $this->connect();
        if ($id !== null) {
            $sql = "DELETE FROM `testimonies` WHERE `id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $id);
            if (mysqli_stmt_execute($stmt)) {
                header("Content-type: Application/json");
                $status = array(
                    [
                        "code" => 200,
                        "status" => "success",
                        "description" => "Deleted successfully"
                    ]
                );
                echo json_encode($status, JSON_PRETTY_PRINT);
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
}
class AddPhoto extends Dbh
{
    use GenerateId;
    public function addPhoto($uploaded_by = null, $path = null, $created = null)
    {
        $conn = $this->connect();
    }
    public function deletePhoto($photo_id = null)
    {
        $conn = $this->connect();
    }
}
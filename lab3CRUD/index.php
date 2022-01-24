<!DOCTYPE html>
<html>

<body>

    <h1>PHP & MySQL</h1>



    <table class="table">
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>


    <form class="form-inline m-2" action="insert.php" method="POST">
        <label for="name">Insert data:</label>
        <input type="text" class="form-control m-2" id="data" name="data">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>


</body>

</html>
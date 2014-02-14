<html>
<head>
    <title><?php echo $page_title ?></title>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="public/css/bootstrap.min.css" media="all" />

</head>
<body>


<div class="container">
    <form method="post" action="create_expense">
        <div class="input-group ">
            <span class="input-group-addon">Description</span>
            <input type="text" class="form-control" name="desc" placeholder="expense details">
        </div>

        <br />

        <div class="input-group ">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" name="amt" placeholder="expense amount">
            <span class="input-group-addon">.00</span>
        </div>

        <br />

        <button type="submit" class="btn btn-default btn-lg">Submit</button>


    </form>
</div>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
        <p>abcd</p>
    </div>

    <!-- Table -->
    <table class="table">
        lenovo
    </table>
</div>

</body>
</html>
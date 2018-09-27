<html>
<head>
    <meta charset="utf-8">
    <title>Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style type="text/css">
    #content {
        width: 100%;
        margin: auto;
        padding: 50px 30px 50px 30px;
        border: 2px solid navy;
        background: slategray;
    }

    label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    /*input {*/
    /*float: left;*/
    /*width: 13em;*/
    /*margin-bottom: 0.5em;*/
    /*}*/

    h1 {
        color: white;
        margin-left: 40%;
    }

    #buttons input {
        width: 10.5em;
        float: left;
        margin-left: 25%;
    }

</style>
<body>


<div id="content">
    <form method="post" action="index.php?page=transfers&id=<?php echo $post['id'] ?>">
        <div>
            <h1>TRADE</h1>
        </div>
        <div id="data">
            <label>Account current:</label>
            <input type="text" class="form-control" name="user_name_current" value="<?php echo $post['user_name'] ?>"><br>
        </div>
        <div>
            <label>Account receiver:</label>
            <select class="form-control" name="sourceId">
                <?php foreach ($posts as $post) : ?>
                    <option value="<?php echo $post['id'] ?>">
                        <?php echo $post['user_name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label>Amount:</label>
            <input type="text" class="form-control" name="amount" value="0.00 VND"><br>
        </div>
        <div>
            <label>Content:</label>
            <input type="text" class="form-control" name="content" placeholder="your content"><br>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" class="btn btn-light" value="submit" >
        </div>
    </form>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</html>

<?php require "header.php"?>
<div class="container">
    <form action="" method="post" name="form">
        <div class="form-row form_contact">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Title">
            </div>
            <div class="form-group col-md-6">
                <input type="file" class="form-control" placeholder="Card Image">
            </div>

            <div class="form-group col-md-12">
                <textarea name="descp" rows="8" cols="80" class="form-control" placeholder="Descripion"></textarea>
            </div>
            <div class="form-group col-md-12">
                <textarea name="content" rows="8" cols="80" class="form-control" placeholder="Content"></textarea>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Url">
            </div>
            <br>
            <button type="submit" class="btn btn_contact col-md-12">Submit</button>
        </div>
    </form>
</div>
<?php require "footer.php"?>
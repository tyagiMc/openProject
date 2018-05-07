<?php
    include_once "include/header.php";
?>
   <div class="container">
   <div class="row">
        <div class="col-lg-4">
            <?php
            include_once "include/sideMenu.php"; 
            ?>
        </div>
        <div class="col-lg-8">
            <div id="alert">
            </div>
            <form id="addBook" method="post" >
                <div class="form-group">
                    <label>Book Title</label>
                    <input type="text" class="form-control" name="bookTitle" required>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="bookAuthor" required> 
                </div>
                <div class="form-group">
                <label>Publisher</label>
                    <input type="text" class="form-control" name="bookPublisher" required>
                </div>
                <div class="form-group">
                <label>Number Of Copies Available</label>
                    <input type="text" class="form-control" name="bookCopies" required>
                </div>
                <div class="pull-right">
                    <button class="btn btn-info" type="submit"><i class="fa fa-plus"></i> Add</button>
                </div>
            
            </form>
        </div>
    </div>
   </div>
<?php
    include_once "include/footer.php";
?>
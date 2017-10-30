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
        <div id="alert"></div>
           <form id="checkoutForm">
            <div class="form-group">
                <label>Enter Student Register Number</label>
                <input type="text" class="form-control" id="studentRegNo" name="studentRegNo">
                <div id="suggesstion-box"></div>
            </div>
            <div class="form-group">
                <label>Book Title</label> 
                <input type="text" class="form-control" id="studentBookName" name="studentBookName">
                <div id="suggesstion-box-book"></div>
            </div>
            <div class="form-group">
                <button class="btn btn-default">Proceed</button>
            </div>
           </form>
        </div>
    </div>
   </div>
<?php
    include_once "include/footer.php";
?>
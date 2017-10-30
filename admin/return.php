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
           <form id="returnForm">
            <div class="form-group">
                <label>Enter Student Register Number</label>
                <input type="text" class="form-control" id="studentRegNo" name="studentRegNo">
                <div id="suggesstion-box"></div>
            </div>
            <div class="form-group">
                <button class="btn btn-warning">Proceed</button>
            </div>
           </form>
           <ul class="list-item" id="booklist">
            
        </ul>
        </div>
        
    </div>
   </div>
<?php
    include_once "include/footer.php";
?>
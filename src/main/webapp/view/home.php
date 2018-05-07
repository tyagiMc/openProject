<?php
include_once "include/header.php"; 
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
        data
        </div>
        <div class="col-lg-4">
            <div class="panel-warning panel">
                <div class="panel-heading">
                    Login
                </div>
                    <form id="loginForm">
                    <div id="error" class="padding"></div>
                <div class="panel-heading">
                    <div class="form-group">
                        <label>UID/Registratio Number</label>
                        <input type="tel" class="form-control" name="loginId" id="loginId" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="loginPassword" id="loginPassword" required>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group">
                    <button class="btn btn-success" type="submit" id="loginBtn">Login</button>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once "include/footer.php"; 
?>
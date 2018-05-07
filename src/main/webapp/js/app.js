function selectStudent(id) {
    // alert(id);
    $('#studentRegNo').val(id);
    $('#suggesstion-box').hide();
}

function selectBook(book) {
    $('#studentBookName').val(book);
    $('#suggesstion-box-book').hide();
}

function returnBook(data) {
    //alert(data);
    $.ajax({
        type: 'POST',
        url: './admin/removeBook.php',
        data: "book=" + data,
        beforeSend: function() {

        },
        success: function(response) {
            if (response == 1) {
                alert("returned");
                setTimeout(function() {
                    window.location.replace('?admin=return');
                }, 500);
            }
        }

    });
}
$(document).ready(function() {
    function loginStaff(data, loginId) {
        $.ajax({
            type: 'POST',
            url: 'admin/LoginStaff.php',
            data: data,
            beforeSend: function() {
                $('#loginBtn').html('<i class="fa fa-spinner"></i> Loading..');
            },
            success: function(response) {
                $('#loginBtn').html('Login');
                if (response == "1") {
                    $('#error').html(`
                   <div class="alert alert-danger alert-dismissable">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Error</strong> Login Failed
                 </div>
                   `);
                } else if (response == "0") {
                    localStorage.setItem('loginId', loginId)
                    localStorage.setItem('loggedStatus', true);
                    setTimeout(function() {
                        window.location.replace('?admin=home');
                    }, 500);
                }
            }
        });
    }

    function loginStudent(data) {
        alert(data);
    }
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        var data = $('#loginForm').serialize();
        var loginId = $('#loginId').val();
        if (loginId.match(/^\d+$/)) {
            // alert(loginId.length);
            if (loginId.length == '5') {
                loginStaff(data, loginId);
            } else if (loginId.length == 8) {
                loginStudent(data);
            }

        }
    });
    $('#addBook').submit(function(e) {
        e.preventDefault();
        var data = $('#addBook').serialize();
        $.ajax({
            type: 'POST',
            url: './admin/Book.php',
            data: data,
            beforeSend: function() {

            },
            success: function(response) {
                if (response == '1') {
                    $('#alert').html(`
                    <div class="alert alert-success">
                    <strong>Success!</strong> Record has been submitted.
                  </div>
                    `);
                    $("input[type=text], textarea").val("");
                } else {
                    $('#alert').html(`
                    <div class="alert alert-danger">
                    <strong>Error!</strong> Error
                  </div>
                    `);
                }
            }
        });
    });
    $('#studentRegNo').keyup(function() {
        $("#suggesstion-box").hide();
        var studentRegNo = $('#studentRegNo').val();
        if (studentRegNo == "" || studentRegNo == null) {
            $("#suggesstion-box").hide();
            return false;
        } else {
            $.ajax({
                type: "GET",
                url: './admin/fetchStudent.php',
                data: "reg=" + studentRegNo,
                beforeSend: function() {

                },
                success: function(response) {
                    $("#suggesstion-box").show();
                    $("#suggesstion-box").html(`<ul class="list-group">
                        ` + response + `
                    </ul>`);
                    $("#search-box").css("background", "#FFF");
                }
            });
        }
    });
    $('#studentBookName').keyup(function() {
        var studentBookName = $('#studentBookName').val();
        if (studentBookName == "" || studentBookName == null) {
            $('#suggesstion-box-book').hide();
        } else {
            $.ajax({
                type: 'GET',
                url: './admin/fetchBook.php',
                data: "book=" + studentBookName,
                beforeSend: function() {

                },
                success: function(response) {
                    $('#suggesstion-box-book').show();
                    $("#suggesstion-box-book").html(`<ul class="list-group"></ul>
                    ` + response + `
                </ul>`);
                    $("#search-box-book").css("background", "#FFF");
                }
            })
        }

    });
    $('#checkoutForm').submit(function(event) {
        event.preventDefault();
        var data = $('#checkoutForm').serialize();
        //alert(data);
        $.ajax({
            type: 'POST',
            url: './admin/booking.php',
            data: data,
            beforeSend: function() {

            },
            success: function(response) {
                if (response == 1) {
                    $('#alert').html(`
                    <div class="alert alert-success">
                    <strong>Success!</strong> Book issued.
                  </div>
                    `);
                    $("input[type=text], textarea").val("");
                }
            }
        });
    });
    $('#returnForm').submit(function(event) {
        event.preventDefault();
        var data = $('#returnForm').serialize();
        $.ajax({
            type: 'POST',
            url: './admin/returnH.php',
            data: data,
            beforeSend: function() {

            },
            success: function(response) {
                if (response != -1) {
                    $('#booklist').html(response);
                }
            }
        });
    })
});
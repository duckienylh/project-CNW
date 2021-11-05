
<?php
include '../teacher/sidebar.php';
include "../config.php";
$id = $client_user['user_id'];
$user_name = $_GET['user_name'];

?>
<style>
    .comment-form-container {
        width: 100% !important;
        background: #F0F0F0;
        border: #e0dfdf 1px solid;
        padding: 20px;
        border-radius: 2px;
        /* padding-bottom: 5rem !important; */
    }

    .input-row {
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        border-radius: 2px;
        padding: 10px;
        border: #e0dfdf 1px solid;
    }

    div#output {
        width: 100% !important;
    }

    .btn-submit {
        padding: 10px 20px;
        background: #333;
        border: #1d1d1d 1px solid;
        color: #f0f0f0;
        font-size: 0.9em;
        width: 100px;
        border-radius: 2px;
        cursor: pointer;
    }

    ul {
        list-style-type: none;
    }

    .comment-row {
        border-bottom: #e0dfdf 1px solid;
        margin-bottom: 15px;
        padding: 15px;
    }

    .outer-comment {
        background: #F0F0F0;
        padding: 20px;
        border: #dedddd 1px solid;
    }

    span.commet-row-label {
        font-style: italic;
    }

    span.posted-by {
        color: #09F;
    }

    .comment-info {
        font-size: 0.8em;
    }

    .comment-text {
        margin: 10px 0px;
    }

    .btn-reply {
        font-size: 0.8em;
        text-decoration: underline;
        color: #888787;
        cursor: pointer;
    }

    #comment-message {
        margin-left: 20px;
        color: #189a18;
        display: none;
    }
</style>

<div class="comment-form-container my-5">
    <form id="frm-comment">
        <h1 class="">Message</h1>
        <div class="input-row">
            <input type="hidden" name="comment_id" id="commentId" placeholder="Name" /> <input class="input-field" type="text"  name="name" id="name" placeholder="Name" value="<?php echo $user_name; ?>" />
        </div>
        <div class="input-row">
            <textarea class="input-field" type="text" name="comment" id="comment" placeholder="Add a Comment">  </textarea>
        </div>
        <div>
            <input type="button" class="btn-submit" id="submitButton" value="Publish" />
            <div id="comment-message">Gửi tin nhắn thành công!</div>
        </div>
    </form>
</div>

<div id="output"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="../assets/js/process-message.js"></script>
<script>
    $(document).ready(function() {
            //? truyền địa chỉ email
            $('#submitButton').click(function() {
                location.reload();
            })
        })
</script>
<?php
include './footer.php';
?>
<h2><?= esc($title) ?></h2>


<!-- 

    The session() function is used to get the Session object, 
        and session()->getFlashdata('error') is used to display the error related 
        to CSRF protection to the user. 
    However, by default, if a CSRF validation check fails, 
        an exception will be thrown, so it does not work yet.  

-->

<?= session()->getFlashdata('error') ?>

<!-- 

    The validation_list_errors() function provided by the Form Helper 
        is used to report errors related to form validation.

-->
<?= validation_list_errors() ?>


<form action="/news/create" method="post">

<!-- 

    The csrf_field() function creates a hidden input with a CSRF token
        that helps protect against some common attacks.

-->
    <?= csrf_field() ?>


    <label for="title">Title</label>
<!-- 
    
    The set_value() function provided by the Form Helper is used 
        to show old input data when errors occur.

-->
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>
<?php 
include ("config.php");
$errors = array();      // array to hold validation errors
$data = array();      // array to pass back data

    if (empty($_POST['p_title']))
        $errors['p_title'] = 'Post title is required.';

    if (empty($_POST['p_author']))
        $errors['p_author'] = 'Author name is required.';

    if (empty($_POST['p_content']))
        $errors['p_content'] = 'Post content is required.';

    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

    $p_title= $_POST["p_title"];
    $p_author= $_POST["p_author"];
    $p_content= $_POST["p_content"];


    $stmt = $con->prepare("INSERT INTO posts(p_title, p_author, p_content, upload_date) VALUES (:p_title, :p_author, :p_content, NOW())");
    $stmt-> bindValue(':p_title', $p_title);
    $stmt-> bindValue(':p_author', $p_author);
    $stmt-> bindValue(':p_content', $p_content);
    $stmt->execute();
 
    $data['success'] = true;
    $data['message'] = 'Success!';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
?>
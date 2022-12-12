<?php  
	session_start();
	require_once('db.php');

	if (isset($_POST['submit'])) {
		$title = mysqli_real_escape_string($dbcon,$_POST['title']);
		$slug = mysqli_real_escape_string($dbcon,$_POST['slug']);
		$author = mysqli_real_escape_string($dbcon,$_POST['author']);
		$article = mysqli_real_escape_string($dbcon,$_POST['article']);

		if ($title=="" && $slug =="" && $author=="" && $article =="") {
			$_SESSION['required'] = true;
			header('location:create-post.php');
		}else{

			$image = '../uploads/' . $_FILES['img']['name'];
			$getimg = mysqli_real_escape_string($dbcon,$image);

			if (preg_match('!image!', $_FILES['img']['type'])) {
				if (copy($_FILES['img']['tmp_name'], $getimg)) {
					
					$insert = "INSERT INTO blog(title,detail,image,author,article) VALUES ('$title','$slug','$getimg','$author','$article')";
					if (mysqli_query($dbcon,$insert)) {
						$_SESSION['success'] = true;
						header('location:create-post.php');
					}else{
						$_SESSION['something'] = true;
						header('location:create-post.php');
					}

				}else{
					$_SESSION['failed'] = true;
					header('location:create-post.php');
				}
			}else{
				$_SESSION['notimg'] = true;
				header('location:create-post.php');
			}
		}

	}

?>
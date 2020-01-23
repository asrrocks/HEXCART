<?php
include ("db.php");	
										$msg = "";
										if(isset($_POST["SUBMIT"]))
										{
											$name = $_POST["name"];
											$review = $_POST["review"];

											$sql = "INSERT INTO product_reviews(name, review) VALUES ('$name', '$review')";
											if (mysqli_query($db, $sql)) {
												echo "<script>";
													echo "alert('Review Added succesfully!!!')";
												echo "</script>";
												header("Location: single.php");
												
												
											} else {
												echo "<script>";
													echo "alert('Sorry!!!')";
												echo "</script>";
												echo "Error: " . $sql . "<br>" . mysqli_error($db);
											}
											mysqli_close($db);
										
										}
										 ?>
﻿<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<style>
.error{
        font-size: 20px;
        color: red;
    }
.success{
	color: green;
	font-size: 20px;
}

</style>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {  
                        $name = $_POST['name'];
                        $name = mysqli_real_escape_string($db->link, $name);
                        if (empty($name)) {
                            echo "<span class='error'>Field must not be empty !</span>";
                        } else {
                            $query = "INSERT INTO tbl_category(name) VALUES('$name')";
                            $catinsert = $db->insert($query);
                            if ($catinsert) {
                                echo "<span class='success'>Category Inserted Successfully !</span>";
                            } else {
                                echo "<span class='error'>Category Not Inserted !</span>";
                            }
                        }
                    }
                ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                  </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>

   
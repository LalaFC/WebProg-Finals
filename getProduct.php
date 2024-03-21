<?php
            // database connection code
            $con = mysqli_connect('localhost', 'root', '', 'papsie_burger');

            // database insert SQL code
            $sql = "SELECT * FROM Product_List WHERE Product_Type = 'Burger'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                    '<div class="food-menu-item">' .
                        '<div class="food-img">' .
                            '<img src="' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
                        '</div>' .
                        '<div class="food-description">' .
                            '<h2 class="food-title">' . $row["Product_Name"] . '</h2>' .
                            '<p>' .
                                $row["Description"] .
                            '</p>' .
                            '<p class="food-price">Price: PHP ' . $row["Price"] . '</p>' .
                        '</div>' .
                    '</div>';
                }
            } else {
                echo "0 results";
            }
            $con->close();
?>
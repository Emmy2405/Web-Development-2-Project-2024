<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching for books</title>
    <link rel="stylesheet" href="../CSS/styling.css">
</head>
<body>
    <header>
        <?php include "header.php"?>
    </header>
    <h1>Welcome To Emmy's Library!</h1>

    <?php
    require_once 'database.php';

    //so the user has to log in in order to access the website
    if (!isset($_SESSION["username"])) 
    { 
        header('Location: signin-register.php');
        return;
    }

    //code for the pagination
    $rows_per_page = 5;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 0; 
    $offset = $page * $rows_per_page; 

    //Get search parameters from GET request to maintain search state
    $author = isset($_GET['author']) ? $_GET['author'] : '';
    $title = isset($_GET['title']) ? $_GET['title'] : '';
    $category = isset($_GET['category']) ? $_GET['category'] : '';

    //Default condition to fetch all records
    $condition = "1"; //Default to no filter, fetch all books

    //getting the search condition
    if (!empty($author)) 
    {
        $condition = "Author LIKE '%$author%'";
    } 
    elseif (!empty($title)) 
    {
        $condition = "BookTitle LIKE '%$title%'";
    } 
    elseif (!empty($category)) 
    {
        $condition = "CategoryID = '$category'";
    }

    //Query to get categories for the dropdown
    $sql = "SELECT * FROM categories";
    $categoriesresult = $conn->query($sql);

    if ($categoriesresult === false) 
    {
        echo "Error: " . $conn->error;
    }
    ?>

    <main>
    <h2>Searching for a book? </h2>
    <!-- Change the form method to GET to keep search state in the URL -->
    <form method="GET" class="search">
        <!-- author search -->
        <div id="reserve" >
            <label for="author"><br><strong>Search using Author:</strong><br></label>
            <input type="text" id="author" name="author" placeholder="e.g. Harper Lee" value="<?php echo htmlentities($author); ?>">
            <button type="submit" class="btn" name="authorsearch">Search</button>
        </div>
        <!-- title search -->
        <div id="reserve">
            <label for="title"><br><br><strong>Search using Title:</strong><br></label>
            <input type="text" id="title" name="title" placeholder="e.g. To Kill A MockingBird" value="<?php echo htmlentities($title); ?>">
            <button type="submit" class="btn" name="titlesearch">Search</button>
        </div>
        <!-- category search -->
        <div id="reserve">
            <label for="category"><br><br><strong>Search using Category Description:</strong><br></label>
            <select id="category" name="category" class="category">
                <option value="">(select category)</option>
                <?php
                //category dropdown
                if ($categoriesresult->num_rows > 0) 
                {
                    while ($row = $categoriesresult->fetch_assoc()) 
                    {
                        $selected = ($category == $row['CategoryID']) ? 'selected' : '';
                        echo "<option value='" . htmlentities($row['CategoryID']) . "' $selected>" . htmlentities($row['CategoryDescription']) . "</option>";
                    }
                }
                ?>
            </select>
            <button type="submit" class="btn" name="description">Search</button>
        </div>
    </form>
    </main>

    <?php
    //get the total number of records based on the current condition - Paginatio code
    $count_query = "SELECT COUNT(*) AS total FROM books WHERE $condition";
    $count_result = $conn->query($count_query);
    $count_row = $count_result->fetch_assoc();
    $total_records = $count_row['total'];

    //calculate total pages
    $total_pages = ceil($total_records / $rows_per_page);

    //query to get the filtered data for the current page
    $query = "SELECT * FROM books WHERE $condition LIMIT $offset, $rows_per_page";
    $result = $conn->query($query);

    //display books if there are any results
    if ($result->num_rows > 0) 
    {
        ?>
        <div class="books-container">
        <?php
        while ($row = $result->fetch_assoc()) 
        {
            $ISBN = $row['ISBN'];
            $username = $_SESSION['username'];

            // Check if the user has reserved the book
            $checkReservationSQL = "SELECT * FROM Reservations WHERE ISBN = '$ISBN' AND Username = '$username'";
            $reservationResult = $conn->query($checkReservationSQL);
            $isReserved = $row['Reservation'] === 'Y';
            ?>
        <div class="book-card">
        <div class="box">
        <h3><strong>Title:</strong> <?php echo htmlentities($row["BookTitle"]); ?></h3>
        <p><strong>Book ISBN:</strong> <?php echo htmlentities($row["ISBN"]); ?></p>
        <p><strong>Author:</strong> <?php echo htmlentities($row["Author"]); ?></p>
        <p><strong>Edition:</strong> <?php echo htmlentities($row["Edition"]); ?></p>
        <p><strong>Year:</strong> <?php echo htmlentities($row["Year"]); ?></p>
        <p><strong>Category ID:</strong> <?php echo htmlentities($row["CategoryID"]); ?></p>

        <?php
        if ($reservationResult->num_rows > 0) 
        {// user has already reserved this book
            echo "<button  disabled>Reserved</button>";
        }
         elseif ($isReserved) 
        { //the book is reserved by someone else
            echo "<button disabled>Not Available</button>";
        } 
        else 
        {// user can reserve this book 
            ?>
            <form method="POST" action="reserve.php" style="margin: 0;">
                <input type="hidden" name="isbn" value="<?php echo htmlentities($row['ISBN']); ?>">
                <button type="submit">Reserve?</button>
            </form>
        <?php
        }
        ?>
    </div>
</div> 

        <?php
        }
    }

    // Pagination code 
    echo "<div class='pagination'>";
    for ($i = 0; $i < $total_pages; $i++) 
    {
        $page_num = $i + 1;
        $is_current_page = ($i === $page) ? 'style="font-weight: bold;"' : '';
        echo "<a href='index.php?page=$i&author=" . urlencode($author) . "&title=" . urlencode($title) . "&category=" . urlencode($category) . "' $is_current_page>$page_num</a>";
    }
    echo "</div>";
    ?>

<script src="../Javascript/javascript.js"></script>
<footer>
    <p>©2024 Created by Eman Abdelatti</p>
</footer>
</body>
</html>

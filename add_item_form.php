<?php include 'view/header.php'; ?>
<main>
    <h1>Add Item</h1>
    <form action="index.php" method="post" id="add_item_form">
        <input type="hidden" name="action" value="add_item">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Title:</label>
        <input type="text" name="title" max="20" required><br>

        <label>Description:</label>
        <input type="text" name="description" max="50" required><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Item" class="button blue"><br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_items">View Item List</a>
    </p>

</main>
<?php include 'view/footer.php'; ?>

<?php
function get_items_by_category($category_id) {
    global $db;
	$query = 'SELECT * FROM todoitems
              WHERE todoitems.categoryID = :category_id
              ORDER BY itemNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}

function get_item($item_id) {
    global $db;
    $query = 'SELECT * FROM todoitems
              WHERE itemNum = :item_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':item_id', $item_id);
    $statement->execute();
    $item = $statement->fetch();
    $statement->closeCursor();
    return $item;
}

function delete_item($item_id) {
    global $db;
    $query = 'DELETE FROM todoitems
              WHERE itemNum = :item_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':item_id', $item_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_item($category_id, $title, $description) {
    global $db;
    $query = 'INSERT INTO todoitems
                 (categoryID, title, description)
              VALUES
                 (:category_id, :title, :description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();
}
?>

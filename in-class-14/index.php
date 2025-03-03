<?php
    require "Item.php";
    use myBusiness\Item;

    $item1 = new Item('Apple', 2);
    $item2 = new Item('Banana', 1);

    echo nl2br ("Item: {$item1->name}\nPrice: '$'{$item1->cost}");
    echo nl2br ("\nItem: {$item2->name}\nPrice: '$'{$item2->cost}");
?>
<?php
    session_start();
    function cartItem($gname, $gpublisher, $ggenre, $gprice, $gid){
        $ele = "
                <form action='/Game store sem v/cart.php?action=remove&id=$gid' method='post'>
                <div class='cart-item'>
                <p>Game: $gname</p>
                <p>Publisher: $gpublisher</p>
                <p>Genre: $ggenre</p>
                <p>Price: $gprice</p>
                <button type='submit' name='remove'>Remove</button>
                </div>
                </form>
                <br>";
        echo $ele;
    }
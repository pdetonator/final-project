<?php

    use UNLCE\Http\Model;

    class Cart extends Model
    {
        public function addItem($userId, $productId, $option = null)
        {
            $stmt = $this -> db -> prepare('INSERT INTO user_cart SET user_id =:userid, product_id =:productid, option =:option');
            $stmt -> execute(array(
                ':userid' => $userId,
                'productid' => $productId,
                'option' => $option
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }
        public function removeItem($userId, $productId)
        {
            $stmt = $this -> db -> prepare('DELETE FROM user_cart WHERE user_id =:userid AND product_id =:productid');
            $stmt -> execute(array(
                'userid' => $userId,
                'productid' => $productId
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }
        public function getUserProducts($userId)
        {
            $stmt = $this -> db -> prepare('SELECT *, COUNT(*) as "total" FROM user_cart INNER JOIN products ON products.id = user_cart.product_id WHERE user_id =:id GROUP BY product_id;');
            $stmt -> execute(array(
                'id' => $userId
            ));
            $products = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            return $products;
        }
        public function getTotalCount($userId)
        {
           $stmt = $this -> db -> prepare('SELECT user_id, count(*) as "total" FROM user_cart WHERE user_id =:userid GROUP BY user_id');
           $stmt -> execute(array(
               'userid' => $userId
           ));
           $product = $stmt -> fetch(PDO::FETCH_ASSOC);

           if ($stmt -> rowCount() > 0) return $product['total'];
           return 0;
        }
        public function removeAll($userId)
        {
            $stmt = $this -> db -> prepare('DELETE FROM user_cart WHERE user_id =:userid');
            $stmt -> execute(array(
                'userid' => $userId,
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }
    }

?>
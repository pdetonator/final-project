<?php

    use UNLCE\Http\Model;

    class Cart extends Model
    {
        public function addItem($userId, $productId, $option = null, $count = 1)
        {
            if ($this -> itemExist($userId, $productId, $option)) {
                $stmt = $this -> db -> prepare('UPDATE user_cart SET count = count + 1 WHERE user_id =:userid AND product_id =:productid AND option_id =:option');
                $stmt -> execute(array(
                    'userid' => $userId,
                    'productid' => $productId,
                    'option' => $option
                ));

                if ($stmt -> rowCount() > 0) return true;
                return false;
            }else {
                $stmt = $this -> db -> prepare('INSERT INTO user_cart SET user_id =:userid, product_id =:productid, option_id =:option');
                $stmt -> execute(array(
                    ':userid' => $userId,
                    'productid' => $productId,
                    'option' => $option
                ));

                if ($stmt -> rowCount() > 0) return true;
                return false;
            }

            return false;
        }
        public function itemExist($userId, $productId, $option = null)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM user_cart WHERE user_id =:userid AND product_id =:productid AND option_id =:option');
            $stmt -> execute(array(
                'userid' => $userId,
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
        public function getTotalCount($userId)
        {
           $total = 0;

           $stmt = $this -> db -> prepare('SELECT * FROM user_cart WHERE user_id =:userid');
           $stmt -> execute(array(
               'userid' => $userId
           ));
           $product = $stmt -> fetchAll(PDO::FETCH_ASSOC);

           foreach ($product as $product) {
               $total += $product['count'];
           }

           return $total;
        }
        public function getTotalPrice($userId)
        {
            $total = 0;

            $userCart = $this -> getUserCart($userId);

            foreach ($userCart as $cart) {
                $total += $cart['product_price'];
            }

            return $total;
        }
        public function getUserCart($userId)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM user_cart INNER JOIN products ON products.id = user_cart.product_id INNER JOIN product_options ON product_options.id = user_cart.option_id WHERE user_id =:userid');
            $stmt -> execute(array(
                'userid' => $userId
            ));
            $userCart = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            return $userCart;
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
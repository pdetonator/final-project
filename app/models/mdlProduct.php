<?php

    class mdlProduct extends \UNLCE\Http\Model
    {

        /*
         * lists the products on the homepage
         * @param int
         * return boolean
         */

        public function getIndex($limit = 20)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM products LIMIT :limit');
            $stmt -> bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt -> execute();
            $products = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            return $products;
        }

        /*
         * Checks for product.
         * @param string
         * return boolean
         */

        public function productExist($url)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM products WHERE product_url =:url');
            $stmt -> execute(array(
                'url' => $url
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }

        /*
         * Lists products by url
         * @param string
         * return array
         */

        public function getProduct($url)
        {
            if ($this -> productExist($url)) {
                $stmt = $this -> db -> prepare('SELECT * FROM products WHERE product_url =:url');
                $stmt -> execute(array(
                    'url' => $url
                ));
                $product = $stmt -> fetch(PDO::FETCH_ASSOC);

                return $product;
            }
        }

        /*
         * Returns images that match id
         * @param int
         * return array
         */

        public function getImages($id)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM product_images WHERE product_id =:id');
            $stmt -> execute(array(
                'id' => $id
            ));
            $images = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            return $images;
        }

        /*
         * Returns options that match id
         * @param int
         * return array
         */

        public function getOptions($id)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM product_options WHERE product_id =:id');
            $stmt -> execute(array(
                'id' => $id
            ));
            $options = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            return $options;
        }

        /*
         * Returns images that match id
         * @param int
         * return string
         */

        public function matchImages($id)
        {
            $stmt = $this -> db -> prepare('SELECT path FROM product_images WHERE product_id =:id');
            $stmt -> execute(array(
                'id' => $id
            ));
            $image = $stmt -> fetch(PDO::FETCH_ASSOC);

            return $image['path'];
        }

    }

?>
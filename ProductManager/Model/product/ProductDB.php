<?php


class ProductDB
{
    private $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getList()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['productName'], $item['productType']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO products (productName, productType, price, amount, description) VALUES (:productName, :productType, :price, :amount, :description)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':productName', $product->getProductName());
        $stmt->bindParam(':productType', $product->getProductType());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':amount', $product->getAmount());
        $stmt->execute();
    }

    public function editProduct($productID, $productName, $productType, $price, $amount, $description)
    {
        $sql = "UPDATE products SET productname = :productName, producttype = :productType, price = :price, amount = :amount, description = :description";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productType', $productType);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }

    public function getProductById($productID)
    {
        $sql = "SELECT * FROM products WHERE id = $productID";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetch();
        return $result;
    }

    public function deleteProduct($productID)
    {
        $sql = "DELETE FROM products WHERE id = $productID";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
    }
}
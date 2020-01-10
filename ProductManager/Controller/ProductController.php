<?php


class ProductController
{
    private $productDB;

    public function __construct()
    {
        $this->productDB = new ProductDB();
    }

    public function index()
    {
        $products = $this->productDB->getList();
        include_once "View/product/list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "View/product/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = new Product($_POST['productName'], $_POST['productType'], $_POST['price'], $_POST['amount'], $_POST['description']);
            $this->productDB->addProduct($product);
            header("location: index.php");
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $productID = $_GET['id'];
            $product = $this->productDB->getProductById($_GET['id']);
            include_once "View/product/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = new Product($_POST['productName'], $_POST['productType'], $_POST['price'], $_POST['amount'], $_POST['description']);
            $this->productDB->addProduct($product);
            header("location: index.php");
        }
    }

    public function delete()
    {
        $productID = $_GET['id'];
        $this->productDB->deleteProduct($productID);
        header("location: index.php");
    }
}
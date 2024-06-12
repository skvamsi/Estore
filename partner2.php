
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Page</title>
    <link rel="stylesheet" href="partner.css">
</head>
<body>
<?php
if(!empty($_POST["send"])){
$productname=$_POST["productname"];
$productdescription=$_POST["productdescription"];
$productimage=$_POST["productimage"];
$tomail="vijayakasu9@gmail.com";
$mailHeaders="name:" . $productname .
"\r\n description:". $productdescription .
"\r\n image:". $productimage . "\r\n";

if(mail($tomail,$productname,$mailHeaders)){
$message="yor information is received successfully";

}
}
?>
    <header>
        <div class="store-name">E-Store</div>
                <a href="index.html" class="home"><b>Home</b></a>
    </header>
    <main>
        <section class="partner-section">
            <h1>Partner Section</h1>
            <p>Upload your product images and start reselling.</p>
            <form id="product-form">
                <label for="product-name">Product Name:</label>
                <input type="text" id="product-name" name="productname" required>

                <label for="product-description">Product Description:</label>
                <textarea id="product-description" name="productdescription" required></textarea>

                <label for="product-image">Product Image:</label>
                <input type="file" id="product-image" name="productimage" required>

                <button type="submit"  name="send">Add Product</button>
                <?php if(!empty($message)){?>
                <div class="success">
                <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </form>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>

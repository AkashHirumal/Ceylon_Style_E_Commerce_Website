    <!-- header -->
            <?php
                include_once 'header.php';
            ?>

    <!-- header -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="../css/oneitem.css" />
</head>

<body>
    <!-- item -->
    
    <section>
        
        <div class="container flax"> 
            <div class="left">
                <div class="main_image">
                    <img src="../images/item/img1A.jpg" alt="" class="slide">
                </div>
                <div class="option flex">
                    <img src="../images/item/img1A.jpg" onclick="img('../images/item/img1A.jpg')">
                    <img src="../images/item/img1B.jpg" onclick="img('../images/item/img1B.jpg')">
                    <img src="../images/item/img1c.jpg" onclick="img('../images/item/img1C.jpg')">
                </div>
            </div>

            <div class="right">
                <h3>Biconic Yellow Long Sleeve Silk Crop Top</h3>
                <h4><small>LKR </small> 4,490.00</h4>
                <p><b>Material Details</b><br>
                    96% POLYESTER 4% ELASTANE<br><br>
                    
                <b>Look After Me</b><br>
                    Machine wash cold, color may transfer<br>
                    Wash separately<br>
                    Do not bleach<br>
                    Low iron<br>
                    Tumble dry or flat dry in shade<br></p>
                <form>
                    <div class="size-select">
                        <h5>Size</h5>
                        <label for="small">
                            <input type="radio" name="size" id="small">
                            <span>S</span>
                        </label>
                        <label for="medium">
                            <input type="radio" name="size" id="medium">
                            <span>M</span>
                        </label>
                        <label for="large">
                            <input type="radio" name="size" id="large">
                            <span>L</span>
                        </label>
                        <label for="x-large">
                            <input type="radio" name="size" id="x-large">
                            <span>XL</span>
                        </label>
                        <label for="xx-large">
                            <input type="radio" name="size" id="xx-large">
                            <span>XXL</span>
                        </label>
                    </div>

                    <div class="quantity-select">
                        <h5>Quantity</h5>
                            <input type="number" value="1" min="1">
                    </div>   
                        
                        <center><button>ADD TO CART</button></center>

                </form>
                
            </div>
        </div>
    </section>

    <script>
        function img(anything){
            document.querySelector('.slide').src = anything;
        }

        function change(change){
            const line = document.querySelector('.home');
            line.style.background = change;
        }

    </script>

    <p></p>

    <!-- item -->

     
</body>

</html>

     <!-- Footer --> 
            <?php
                include_once 'footer.php';
            ?>
     <!-- Footer -->
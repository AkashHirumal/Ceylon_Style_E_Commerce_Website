<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="../css/Adminoneitemstyle.css" />
  </head>

  <body>
    <h2 class="head1">Admin Add Item</h2>
    <!-- item -->
    <section>
      <form>
        <div class="container flax">
          <div class="left">
            <div class="option flex">
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto1" class="myfile" placeholder="Enter Price.../><br />
              </div>
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto2" class="myfile" /><br />
              </div>
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto3" class="myfile" /><br />
              </div>
            </div>
          </div>

          <div class="right">
            <!--  <h3>Biconic Yellow Long Sleeve Silk Crop Top</h3> -->
            <input
              type="text"
              id="title"
              placeholder="Enter title ..."
            /><br /><br />
            <h4>
              <small>LKR </small>
              <input type="text" id="price" placeholder="Enter Price..." />
              <!--4,490.00-->
            </h4>

            <p>
              <b>Material Details</b><br />
              <textarea
                id="Material"
                placeholder="Material Details..."
                rows="3"
                cols="30"
              ></textarea>
              <!-- 96% POLYESTER 4% ELASTANE --><br /><br />

              <b>Look After Me</b><br />
              <textarea
                id="Details"
                placeholder="More Details..."
                rows="6"
                cols="30"
              ></textarea>
              <!-- Machine wash cold, color may transfer<br />
              Wash separately<br />
              Do not bleach<br />
              Low iron<br />
              Tumble dry or flat dry in shade<br /> -->
            </p>

            <center><button id="add_item">ADD TO ITEM</button></center>
          </div>
        </div>
      </form>
    </section>

    <p></p>

    <!-- item -->
  </body>
</html>

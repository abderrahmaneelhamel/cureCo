<!DOCTYPE html>
<html lang="en">

<head>
    <title>CureCo</title>
    <link rel="shortcut icon" href="app/Views/images/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/Views/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="app/Views/css/style.css">
    <link rel="stylesheet" href="app/Views/css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="app/Views/bootstrap-5.2.2-dist/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div><a href="#"><img src="app/Views/images/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a></div>
        <div>
            <ul>
                <li><a href="#" style="color: rgb(36 128 33) ;text-decoration: none;">GESTIONNE PAGE</a></li>
            </ul>

        </div>
            </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="log2" style="color: rgb(36 128 33) ;">Edit Product</h3>
        </div>
        <?php
         $row = mysqli_fetch_assoc($resultat);
        ?>
        <div class="container d-flex justify-content-center">
            <form method="post" style="width:50vw; min-width:300px ;" enctype="multipart/form-data">
                <div class="row">
                    <div class="row">
                        <label style="color:rgb(36 128 33) ;" class="log">Product Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['label'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(36 128 33) ;">quantite</label>
                        <input type="text" class="form-control" name="qte" value="<?php echo $row['quantity'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(36 128 33) ;">Product Price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(36 128 33) ;">Product Image</label>
                        <img style="width: 90px;" src="app/Views/<?php echo $row['image'] ?>" >
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(36 128 33) ;">Category</label>
                        <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required="">
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['category'] ?> (Selected)</option>
                            <?php
                            foreach ($ret->fetch_all(MYSQLI_ASSOC) as $row) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"> <?php echo $row['category']; ?></option>
                            <?php } ?>

                        </select>

                    </div>
                </div>
                
            </div>
            <div>
                <div class="coli">
                <input  type="submit" class="btn btn-outline-success mb-4" name="submit" value="Update">
                <a href="products" class="btn btn-outline-dark mb-4">Cancel</a>
            </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
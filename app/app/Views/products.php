<!DOCTYPE html>
<html lang="en">

<head>
    <title>CureCo</title>
    <link rel="shortcut icon" href="app/Views/images/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/Views/css/bootstrap/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="app/Views/css/style2.css" rel="stylesheet" />
    <script src="app/Views/js/custom.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav style="background-color:black; display:flex; justify-content:space-between; width:100%;" class="res navbar navbar-expand-lg bg-dark">
<div class="container-fluid">
    <a style="color: white;" class="navbar-brand" href="home">CureCo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: white;" class="nav-link active" aria-current="page" href="dachBoard">Home</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success" style="margin-right:30px; width:120px;" href="disconnect" class="disconnect">disconnect</a>
        </li>
      </ul>
      <form style="width: 65%;" class="d-flex" role="search" method="POST">
        <input class="form-control me-3" name="search" type="search" placeholder="Search by the name of the product" aria-label="Search">
        <button style=" border-radius: 7px; border: 1px solid #fff;" class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div>
    <a onclick="openn()" class="btn btn-outline-success m-2 mb-3">ADD PRODUCT</a>
</div>
<div style="width: 100% !important; overflow-x: scroll;">
<div id="adding" style="position: fixed; z-index: 990;top: 0px; background: transparent;backdrop-filter: blur(10px);width: 100%;height: 100%;display: none;align-items: center;justify-content: center;">
    <div style="border-radius: 20px; background-color: white;width: 70%;height: 70%;display: flex;align-items: center;justify-content: center;">
        <a href="products"><img class="close" onclick="clossse()" src="../app/Views/images/close.png"></a>
                     <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;margin:10px;">
                        <form method="post" onsubmit="return submitProduct()" id="ProductForm" style="width:60vw; min-width:300px ;" enctype="multipart/form-data">
                            <div class="multiply">
                            <h3 style="color:rgb(36 128 33);">ADD A NEW PRODUCT</h3>
                              <div class="row">
                                <div class="row">
                                    <label style="color:rgb(36 128 33);" class="log">Product Name</label>
                                    <input type="text" id="name" class="form-control" name="name[]" placeholder="name">
                                    <label id="nameMsg" for="name" style="color: red;"></label>
                                </div>
                                <div class="row">
                                    <label class="log" style="color:rgb(36 128 33);">quantity</label>
                                    <input type="text" id="qte" class="form-control" name="qte[]" placeholder="quantity">
                                    <label id="qteMsg" for="qte" style="color: red;"></label>
                                </div>
                                <div class="row">
                                    <label class="log" style="color:rgb(36 128 33);">Product Price</label>
                                    <input type="text" id="price" class="form-control" name="price[]" placeholder="Price">
                                    <label id="priceMsg" for="price" style="color: red;"></label>
                                </div>
                                <div class="row">
                                    <label class="log" style="color:rgb(36 128 33);">Image</label>
                                    <input type="file" class="form-control" name="image[]" placeholder="image" required>
                                    <label id="imageMsg" for="image" style="color: red;"></label>
                                </div>
                                
                                <div class="row">
                                    <label class="log" style="color:rgb(36 128 33);">Category</label>
                                    <select class="form-control" name="category[]" id="category" onChange="getSubCat(this.value);">
                                        <option value="">Select Category </option>
                                        <?php
                                        foreach ($ret->fetch_all(MYSQLI_ASSOC) as $row1) {
                                        ?>
                                            <option value="<?php echo $row1['id']; ?>"> <?php echo $row1['category']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <label id="categoryMsg" for="category" style="color: red;"></label>
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-outline-success mt-1 multi" onclick="multiply()">+</button>
                        </div>
                        <div class="srt">
                            <button type="submit" name="submit" class="btn btn-outline-success mb-4" >Save</button>
                            <a href="products" class="btn btn-outline-dark mb-4">Cancel</a>
                        </div>
                      </form>
                    </div>
    </div>
  </div>
</div>
<div style="width: 100% !important; overflow-x: scroll;">
<table class="table table-light table-striped table-hover text-center">
  <thead class="table-light">
    <tr>
      <th scope="col">Action</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">IMAGE</th>
      <th scope="col">PRICE</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">CATEGORY</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($resultat)){

?>
<tr><td>
        <a href="editpage?id=<?php echo $row['id'] ?>" class="link-success"><i class="fa-solid fa-pen-to-square fs-6 me-3"></i></a>
      
        <a href="delete?id=<?php echo $row['id'] ?>" class="link-success"><i class="fa-solid fa-trash fs-6 me-3"></i></a>
      </td>
      
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['label'] ?></td>
      <td><img style="width: 70px;" src="app/Views/<?php echo $row['image'] ?>"></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['quantity'] ?></td>
      <td><?php echo $row['category'] ?></td>
      
    </tr>
<?php
   }
?>
    
  </tbody>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
  function clossse(){
            var d = document.querySelector("#adding");
            d.style.display = "none";
  }
  function openn(){
            var d = document.querySelector("#adding");
            d.style.display = "flex";
  }
  function multiply(){
            var txxt = `
                        <h3 style="color:rgb(36 128 33);">ADD A NEW PRODUCT</h3>
                        <div class="row">
                          <div class="row">
                              <label style="color:rgb(36 128 33);" class="log">Product Name</label>
                              <input type="text" id="name" class="form-control" name="name[]" placeholder="name"required>
                              <label id="nameMsg" for="name" style="color: red;"></label>
                          </div>
                          <div class="row">
                              <label class="log" style="color:rgb(36 128 33);">quantity</label>
                              <input type="text" id="qte" class="form-control" name="qte[]" placeholder="quantity"required>
                              <label id="qteMsg" for="qte" style="color: red;"></label>
                          </div>
                          <div class="row">
                              <label class="log" style="color:rgb(36 128 33);">Product Price</label>
                              <input type="text" id="price" class="form-control" name="price[]" placeholder="Price"required>
                              <label id="priceMsg" for="price" style="color: red;"></label>
                          </div>
                          <div class="row">
                              <label class="log" style="color:rgb(36 128 33);">Image</label>
                              <input type="file" class="form-control" name="image[]" placeholder="image" required>
                          </div>
                          <div class="row">
                              <label class="log" style="color:rgb(36 128 33);">Category</label>
                              <select class="form-control" name="category[]" id="category" onChange="getSubCat(this.value);" required>
                                  `;
                                  var cat = `<option value="">Select Category </option>
                                  `;
                                  var txxt2 =        
                                                  `</select>
                                                  <label id="categoryMsg" for="category" style="color: red;"></label>
                                              </div>
                                            </div>
                                            `; 
    const options = {
        method: 'GET',
    };
    
    fetch('http://cure.co/app/Models/test.php', options)
        .then(response => response.json())
        .then(data =>{
           const category = data;
           category.map((item) => {
              cat += `<option value="${item.id}">${item.category}</option>
              `;
           })
           localStorage.setItem("data",txxt+cat+txxt2)

        }).then(             
            document.querySelector(".multiply").innerHTML += localStorage.getItem("data")
            
        )
        .catch(err => console.error(err));

  }
</script>
</body>

</html>
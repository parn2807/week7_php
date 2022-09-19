<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>
    <?php
        $product = [
            [
                "id"=>1,
                "name"=>"คอนโดแมว - BONGO",
                "price"=>1299,
                "img"=>"https://img.my-best.in.th/press_component/item_part_images/b1ac0621eb1e0e9cb11e401aafd5aa62.png?ixlib=rails-4.2.0&q=70&lossless=0&w=640&h=640&fit=clip"
            ],
            [
                "id"=>2,
                "name"=>"Catit แคทอิท น้ำพุดอกไม้ LED สำหรับแมวดื่มน้ำ 3 L",
                "price"=>890,
                "img"=>"https://res-4.cloudinary.com/central-pet-n-me/image/upload/c_lpad,dpr_2.0,f_auto,h_600,q_auto,w_600/v1/media/catalog/product/2/2/2203030030401-1.jpg?_i=AB"
            ],
            [
                "id"=>3,
                "name"=>"Wulee วูลี กระเป๋าเป้แบบพับพกพาได้ สำหรับแมว",
                "price"=>1339,
                "img"=>"https://res-5.cloudinary.com/central-pet-n-me/image/upload/c_lpad,dpr_2.0,f_auto,h_600,q_auto,w_600/v1/media/catalog/product/a/2/a220800095145-1.jpg?_i=AB"
            ],
            [
                "id"=>4,
                "name"=>"Purina ONE Healthy Kitten Formula productnation",
                "price"=>435,
                "img"=>"https://petbangla.com/wp-content/uploads/2020/02/purina_one_healthy_kitten_formula.jpg"
            ],
            [
                "id"=>5,
                "name"=>"Royal Canin โรยัล คานิน HAIRBALL CARE อาหารแมวโต ชนิดเม็ด ขนาด 400g",
                "price"=>219,
                "img"=>"https://nordenpet.com.ar/wp-content/uploads/2019/09/Royal-Hairball-Care.jpg"
            ],
            [
                "id"=>6,
                "name"=>"SmartHeart - SmartHeart Gold Lamb & Brown Rice",
                "price"=>161,
                "img"=>"https://th.bing.com/th/id/R.e436f0b08ac2017a97a4794f5ef480eb?rik=nHWU52HVhpLjGQ&pid=ImgRaw&r=0"
            ],
            [
                "id"=>7,
                "name"=>"Kit Cat Soya Clump ทรายแมวเต้าหู้ กลิ่น พีช ธรรมชาติ 100%",
                "price"=>265,
                "img"=>"https://www.tailybuddy.com/products/4663/%e0%b9%80%e0%b8%95%e0%b9%89%e0%b8%b2%e0%b8%ab%e0%b8%b9%e0%b9%89_%e0%b8%81%e0%b8%a5%e0%b8%b4%e0%b9%88%e0%b8%99_%e0%b8%9e%e0%b8%b5%e0%b8%8a1.jpg"
            ],
            [
                "id"=>8,
                "name"=>"PurLab เพอแล็บ ไม้ล่อแมว ตุ๊กตาไล่ฝน สำหรับแมว",
                "price"=>580,
                "img"=>"https://res-5.cloudinary.com/central-pet-n-me/image/upload/c_lpad,dpr_2.0,f_auto,h_900,q_auto,w_900/v1/media/catalog/product/a/2/a210900059387-1.jpg?_i=AB"
            ],
            [
                "id"=>9,
                "name"=>"Kanimal แคนนิมอล Cat Tree คอนโดแมว 2 ชั้น",
                "price"=>2490,
                "img"=>"https://res-5.cloudinary.com/central-pet-n-me/image/upload/c_lpad,dpr_2.0,f_auto,h_900,q_auto,w_900/v1/media/catalog/product/2/2/2208070080001-1_1.jpg?_i=AB"
            ],
            [
                "id"=>10,
                "name"=>"Catidea แคทไอเดีย ห้องน้ำแมว รุ่น Cat Ears",
                "price"=>1375,
                "img"=>"https://res-2.cloudinary.com/central-pet-n-me/image/upload/c_lpad,dpr_2.0,f_auto,h_900,q_auto,w_900/v1/media/catalog/product/2/2/2212070150627-1.jpg?_i=AB"
            ],
        ]
    ?>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">img</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($product as $book) {
                ?>
                    <?php
                        $r = rand(0,256);
                        $g = rand(0,256); 
                        $b = rand(0,256);
                        $style = "color:rgb($r,$g,$b)"
                    ?>
                    <tr>
                        <th scope="row" style="<?= $style ?>"><?= $book['id']; ?></th>
                        <td style="<?= $style ?>"><?= $book['name']; ?></td>
                        <td style="<?= $style ?>"><?= $book['price']; ?></td>
                        <td style="<?= $style ?>" width="250px"><img width="100%" src="<?= $book['img']; ?>" class="rounded"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
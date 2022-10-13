<!DOCTYPE html>
<html>
<head>
    <title>ElectricalAppliance</title>
</head>
<body>
    <h1>Electrical Appliance</h1>
    <?php
        $product = '[
            {
                "id":"1",
                "name":"Oreo",
                "price":10, 
                "img":"https://static.bigc.co.th/media/catalog/product/cache/2/image/17f82f742ffe127f42dca9de82fb58b1/8/9/8992760223015_6.jpg"
            },
            {
                "id":"2",
                "name":"Cream O",
                "price":10, 
                "img":"https://cf.shopee.co.th/file/3507f01b0b352d2c72fe4ea171d7b86f"
            },
            {
                "id":"3",
                "name":"Collon",
                "price":15, 
                "img":"https://backend.tops.co.th/media/catalog/product/8/8/8851019030517_28-04-2021.jpg"
            },
            {
                "id":"4",
                "name":"Pocky",
                "price":10, 
                "img":"https://www.glico.com/assets/images/small/PO20BF%20DV14.png"
            },
            {
                "id":"5",
                "name":"m&m",
                "price":5, 
                "img":"https://media-kiwis.monline.com/media/catalog/product/cache/4eae07c2f68a268511cfb4de77370966/9/3/93682961_1_5tjx9ydyb6dwtatk.jpg"
            },
            {
                "id":"6",
                "name":"EURO",
                "price":5, 
                "img":"https://cf.shopee.co.th/file/4b1832f96ddfd90367536ad7382f9238"
            },
            {
                "id":"7",
                "name":"Lays",
                "price":20, 
                "img":"https://static.bigc.co.th/media/catalog/product/cache/2/image/17f82f742ffe127f42dca9de82fb58b1/8/8/8850718809011_5.jpg"
            },
            {
                "id":"8",
                "name":"Bun Bun",
                "price":20, 
                "img":"https://th-test-11.slatic.net/p/08ffdee2cac4376b82eaeba7b2657881.jpg"
            },
            {
                "id":"9",
                "name":"Bento",
                "price":5, 
                "img":"https://static.bigc.co.th/media/catalog/product/cache/2/image/17f82f742ffe127f42dca9de82fb58b1/8/8/8850157404204.jpg"
            },
            {
                "id":"10",
                "name":"Karamujo",
                "price":30, 
                "img":"https://backend.tops.co.th/media/catalog/product/8/8/8851004451204.jpg"
            }
            ]';

            function createTable($obj)
            {
                $ElectricalAppliance = json_decode($obj, true);
                $table = "<table style = 'padding'>
                        <tr><th style = 'border: 2px double blue '>id</th> 
                            <th style = 'border: 2px double blue '>name</th>
                            <th style = 'border: 2px double blue '>price</th>
                            <th style = 'border: 2px double blue '>img</th>
                        </tr>"; 
                for ($i=0; $i < 10 ; $i++) { 
                    foreach ($ElectricalAppliance[$i] as $ele => $value ) {
                        $r=rand(0,256);
                        $g=rand(0,256);
                        $b=rand(0,256);

                        if($r != 255 && $g != 255 && $b != 255){
                            if($ele == 'id'){
                                $table .="<tr style='border: 2px double rgb($r,$g,$b);color:rgb($r,$g,$b)'><th style='border: 2px double rgb($r,$g,$b);color:rgb($r,$g,$b)'>$value</th>";
                            }
                            else if($ele == 'name'){
                                $table .="<th style='border: 2px double rgb($r,$g,$b);color:rgb($r,$g,$b)'>$value</th>";
                            }
                            else if($ele == 'price'){
                                $table .="<th style='border: 2px double rgb($r,$g,$b);'color:rgb($r,$g,$b)'>$value</th>";
                            }else{
                                $table .="<th style='border: 2px double rgb($r,$g,$b);color:rgb($r,$g,$b)'><img width='750' height='650' src='$value'></th></tr>";
                            }
                        }
                    }
                }
            $table .= "</table>";
            return $table;
        }
        echo createTable($product);
    ?>

</body>
</html>
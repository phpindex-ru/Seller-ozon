<?php
header("Content-Type:application/json");
include_once("connection.php");

function get_attributes($product_id4) {
    $sql2 = "SELECT * FROM attributes WHERE product_id = :product_id4";
    $db = Db::getInstance();
    $query3 = $db->prepare($sql2);
    $query3->bindParam("product_id4", $product_id4);
    $query3->execute();
    $attributes = array();
    
    while($rows = $query3->fetch(PDO::FETCH_ASSOC)) {
        $attributes[] = array('id'=> $rows['id'], 'value'=> $rows['value']);
    }
    return $attributes;
    }

function get_image($product_id1) {
    $sql1 = "SELECT * FROM image WHERE product_id = :product_id";
    $db = Db::getInstance();
    $query1 = $db->prepare($sql1);
    $query1->bindParam("product_id", $product_id1);
    $query1->execute();
    $testing = array();
    
    while($rows = $query1->fetch(PDO::FETCH_ASSOC)) {
        //$testing1[] = array('file_name'=> $rows['file_name'], 'default'=> $rows['default']);
        $testing1[] = array('file_name'=> $rows['file_name'], 'default'=> false);
    }
    return $testing1;
    }

    function get_item($product_id, $imgs, $attributes) {
    $sql_items = "SELECT barcode, description, category_id, name, offer_id, price, old_price, premium_price, vat, vendor, vendor_code, height, depth, width, dimension_unit, weight, weight_unit FROM items WHERE product_id = :product_id2";
    $db = Db::getInstance();
    $query_item = $db->prepare($sql_items);
    $query_item->bindParam("product_id2", $product_id);
    $query_item->execute();
    $rows = $query_item->fetch(PDO::FETCH_ASSOC);
    $result = array();
    $result['items'] = [
        '0'  => [
         'barcode'=> $rows['barcode'], 
         'description'=> $rows['description'], 
         'category_id'=> $rows['category_id'], 
         'name'=> $rows['name'], 
         'offer_id'=> $rows['offer_id'], 
         'price'=> $rows['price'], 
         'old_price'=> $rows['old_price'], 
         'premium_price'=> $rows['premium_price'], 
         'vat'=> $rows['vat'], 
         'vendor'=> $rows['vendor'], 
         'vendor_code'=> $rows['vendor_code'], 
         'height'=> $rows['height'], 
         'depth'=> $rows['depth'], 
         'width'=> $rows['width'], 
         'dimension_unit'=> $rows['dimension_unit'], 
         'weight'=> $rows['weight'], 
         'weight_unit'=> $rows['weight_unit'], 
         'images' =>  $imgs,
        // 'file_name'=> $rows['file_name'], 
        // 'default'=> $rows['default']
        'attributes' =>  $attributes,
        ]
    ];

return $result;
    }

function get_array($product_id, $imgs, $attributes) {
$sql = "SELECT a.product_id, a.name, a.description, b.file_name, b.default FROM product a INNER JOIN image b ON a.product_id = b.product_id WHERE a.product_id = :product_id";
$db = Db::getInstance();
$query = $db->prepare($sql);
$query->bindParam("product_id", $product_id);
$query->execute();
$rows = $query->fetch(PDO::FETCH_ASSOC);
$testing = array();
    $testing['items'] = [
        '0'  => ['name'=> $rows['name'], 'description'=> $rows['description'], 
         'images' =>  $imgs,
        // 'file_name'=> $rows['file_name'], 
        // 'default'=> $rows['default']
        'attributes' =>  $attributes,
        ]
    ];

return $testing;
}




$attributes = get_attributes(3);
$img = get_image(3);
$data = get_item(3, $img, $attributes);



unset($data['items'][0]['attributes'][3]['value']);


//array_push($data['items'][0]['attributes'][3], $a['collection']);
$data['items'][0]['attributes'][3] += ['collection' => ['0' => "1", '1' => "2", '2' => "13"]];
//print_r($data);
array_push($data['items'][0]['attributes'], ['id' => '4018']);
$data['items'][0]['attributes']['4'] += 
["complex_collection" => 
    [['collection' => [['id' => "4068", 'value' => "Additional video"], ['id' => "4074", 'value' => "5_-NKRVn7IQ"]]],  
    ['collection' => [['id' => "4068", 'value' => "Another one video"], ['id' => "4074", 'value' => "5_-NKRVn7IQ"]]
]]];

// ['collection' => [['id' => "4068", 'value' => "Additional video"], ['id' => "4074", 'value' => "5_-NKRVn7IQ"]],  
// ['collection' => [['id' => "4068", 'value' => "Additional video"], ['id' => "4074", 'value' => "5_-NKRVn7IQ"]]
// ]]]

//array_push($data['items'][0]['attributes']['4'], ["complex_collection" => ['collection' => ['0' => "1", '1' => "2", '2' => "13"]]]);
//$data['items'][0]['attributes'][4] += ['id' => '4018'];
//$data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
$data = json_encode($data, JSON_UNESCAPED_UNICODE |JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

print_r($data);

$data1 = '{
    "items": [{
      "barcode": "8801643676784",
      "description": "Red Samsung Galaxy S9 with 512 Red Samsung Galaxy Red Samsung Galaxy Galaxy S9 with 512",
      "category_id": 17030819,
      "name": "Samsung Galaxy 9 with 512 Red Samsung Galaxy Red Samsung Galaxy Galaxy S9 with 512",
      "offer_id": "REDSG55-512",
      "price": "79990",
      "old_price": "89990",
      "premium_price": "75555",
      "vat": "0",
      "vendor": "Samsung",
      "vendor_code": "SM-G960UZPAXAA",
      "height": 77,
      "depth": 11,
      "width": 120,
      "dimension_unit": "mm",
      "weight": 120,
      "weight_unit": "g",
      "images": [
         {
           "file_name": "https://ozon-st.cdn.ngenix.net/multimedia/c1200/1022555115.jpg",
           "default": true
         },
         {
           "file_name": "https://ozon-st.cdn.ngenix.net/multimedia/c1200/1022555110.jpg",
           "default": false
         },
         {
           "file_name": "https://ozon-st.cdn.ngenix.net/multimedia/c1200/1022555111.jpg",
           "default": false
         }
       ],
      "attributes": [
        {
          "id": 8229,
          "value": "4747"
        },
        {
          "id": 9048,
          "value": "Samsung Galaxy S9"
        },
        {
          "id": 4742,
          "value": "512 ГБ"
        },
        {
          "id": 4413,
          "collection": ["1", "2", "13"]
        },
        {
          "id": 4018,
          "complex_collection": [
            {
              "collection": [
                {
                  "id": 4068,
                  "value": "Additional video"
                },
                {
                  "id": 4074,
                  "value": "5_-NKRVn7IQ"
                }
              ]
            },
            {
              "collection": [
                {
                  "id": 4068,
                  "value": "Another one video"
                },
                {
                  "id": 4074,
                  "value": "5_-NKRVn7IQ"
                }
              ]
            }
          ]
        }
    ]
   }]
  }';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api-seller.ozon.ru/v1/product/import');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(  
"Client-Id: 67090",
"Api-Key: d8281c8e-13b9-416c-8c42-2d231f245b66",
"Content-Type: application/json"
));	
curl_setopt($curl, CURLOPT_POSTFIELDS, $data1);  
$out = curl_exec($curl);
curl_close($curl);







$task_id = '{
  "task_id": 3766028
}';

$curl_task = curl_init();
curl_setopt($curl_task, CURLOPT_URL, 'https://api-seller.ozon.ru/v1/product/import');
curl_setopt($curl_task, CURLOPT_POST, true);
curl_setopt($curl_task, CURLOPT_HTTPHEADER, array(  
"Client-Id: 67090",
"Api-Key: d8281c8e-13b9-416c-8c42-2d231f245b66",
"Content-Type: application/json"
));	
curl_setopt($curl_task, CURLOPT_POSTFIELDS, $task_id);  
$out = curl_exec($curl_task);
curl_close($curl_task);


?>



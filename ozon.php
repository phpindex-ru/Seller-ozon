<?php

// Login: michaelphp@yandex.ru
// Password: cfghjndrkutbH546!

//https://api-seller.ozon.ru/apiref/attributes_constructor.html

// Client Id: 67090
// API key: d8281c8e-13b9-416c-8c42-2d231f245b66

$data = '{
    "items": [{
      "barcode": "880164356678",
      "description": "Red Samsung Galaxy S9 512GB",
      "category_id": 17030819,
      "name": "Samsung Galaxy S9",
      "offer_id": "RED45678-5133",
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
          "id": 8225,
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
   }],

    "items": [{
      "barcode": "8801643566890",
      "description": "Red Samsung Galaxy S9 512GB",
      "category_id": 17030819,
      "name": "Samsung Galaxy S9",
      "offer_id": "RE89867-5133",
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
          "id": 8225,
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

$array = json_decode($data, true);
echo '<pre>';
print_r($array);
echo '</pre>';



// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, 'https://api-seller.ozon.ru/v1/product/import');
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_HTTPHEADER, array(  
// "Client-Id: 67090",
// "Api-Key: d8281c8e-13b9-416c-8c42-2d231f245b66",
// "Content-Type: application/json"
// ));	
// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);  
// $out = curl_exec($curl);
// curl_close($curl);


?>
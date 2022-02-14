<!doctype html>
<html>
    <head>
        <script src="https://cdn.tailwindcss.com/"></script>
    </head>
    <body>
        <section>
            <header>
                <h1 class="text-3xl pl-5 mt-3 text-center">Api Documentation</h1>
            </header>
            </section>
            <div class="text-left ml-5">
            <p>
                All Endpoints Routes: 
            <br>
                <strong>Index</strong>
                <strong>Method: GET <br>
                    Route: /api/v1/products</strong> 
                 <br>
                 Description: Get all the products
                 <br><br>
                </p>
                
                <strong>Show</strong> <br>
                <strong>Method: GET <br>
                    Route: /api/v1/products/1</strong> 
                 <br>
                 Description: Show a product
                 <br><br>
                </p>
                
                <strong>Create</strong> <br>
                <strong>Method: POST <br>
                    Route: /api/v1/products</strong> 
                 <br>
                 Description: Create a new product
                 <br><br>
                </p>
                
                
                <strong>Update</strong> <br>
                <strong>Method: PUT<br>
                    Route: /api/v1/products/1</strong> 
                 <br>
                 Description: Edit a product
                 <br><br>
                </p>
                
                <strong>Delete</strong> <br>
                <strong>Method: DELETE<br>
                    Route: /api/v1/products/1</strong> 
                 <br>
                 Description: Delete a product
                 <br><br>
                </p>
                
                <strong>Search</strong> <br>
                <strong>Method: GET<br>
                    Route: /api/v1/products/search/{name}</strong> 
                 <br>
                 Description: Search for a product by name
                 <br><br>
                </p>
                
                
                <br>
                <strong>Method: GET <br>
                    Route: /api/v1/products</strong> 
                 <br>
                 Description: Get all the products
                 <br>
                 Example Response: 
              </p>
             
<code>
<pre class="text-xs">
{
  "current_page": 1,
  "data": [
    {
      "id": 1,
      "name": "Harum ad ut voluptate voluptatem odio repellendus.",
      "description": "Ea ipsa recusandae explicabo est eos accusantium deserunt. Saepe non quia voluptas. Est eum quam voluptates nulla quos et.",
      "image": "https:\/\/via.placeholder.com\/640x480.png\/006600?text=deleniti",
      "brand": "Assumenda eum et mollitia est.",
      "price": "1479.00",
      "price_sale": "340.00",
      "category": "Eos voluptatem quas quae.",
      "stock": 55,
      "created_at": "2022-02-12T06:26:01.000000Z",
      "updated_at": "2022-02-12T06:26:01.000000Z"
    }
  ],
  "first_page_url": "http:\/\/127.0.0.1:8001\/api\/v1\/products?page=1",
  "from": 1,
  "next_page_url": "http:\/\/127.0.0.1:8001\/api\/v1\/products?page=2",
  "path": "http:\/\/127.0.0.1:8001\/api\/v1\/products",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10
}
</pre>
</code>

          
            
<p>Search Example Response: <br></p>
<pre class="text-xs">
<code>
{
    "current_page": 1,
    "data": [
{
    "id": 59,
    "name": "MacBook Pro 13.3 Retina [MYD82] M1 Chip 256 GB - Space Gray",
    "description": "",
    "image": "apple.com\/v\/macbook-pro\/ac\/images\/overview\/hero_13__d1tfa5zby7e6_large_2x.jpg",
    "brand": "Apple",
    "price": "2000.00",
    "price_sale": "1950.00",
    "category": "Macbook Pro",
    "stock": 5,
    "created_at": "2022-02-13T22:09:04.000000Z",
    "updated_at": "2022-02-13T22:09:04.000000Z"
}
],
    "first_page_url": "http:\/\/127.0.0.1:8001\/api\/v1\/products\/search\/mac?page=1",
    "from": 1,
    "next_page_url": null,
    "path": "http:\/\/127.0.0.1:8001\/api\/v1\/products\/search\/mac",
    "per_page": 10,
    "prev_page_url": null,
    "to": 6
}
</code>
</pre>

            </div>
        
    </body>
</html>
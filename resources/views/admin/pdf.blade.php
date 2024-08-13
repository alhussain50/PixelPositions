<html>
    <head>
        <title>Order PDF</title>
    </head>
    <body>
        <h1>Order Details</h1>
        Customer ID:<h3>{{$order->user_id}}</h3>
        Customer Name:<h3>{{$order->name}}</h3>
        Customer Mail:<h3>{{$order->email}}</h3>
        Customer Phone:<h3>{{$order->phone}}</h3>
        Customer Address:<h3>{{$order->address}}</h3>
        Product ID:<h3>{{$order->product_id}}</h3>
        Product Name:<h3>{{$order->product_title}}</h3>
        Product Quantity<h3>{{$order->quantity}}</h3>
        Price<h3>{{$order->price}}</h3>
        Payment Status<h3>{{$order->payment_status}}</h3>
        Delivery Status<h3>{{$order->delivery_status}}</h3>
        <br><br>
        <img height="150px" width="150px" src="product/{{$order->image}}">
    </body>
</html>
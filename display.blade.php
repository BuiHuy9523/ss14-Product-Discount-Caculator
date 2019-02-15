
<table>
    <h1>Product Discount Calculator</h1>
    <tr>
        <td>Product Description:</td>
        <td>{{$product}}</td>
    </tr>
    <tr>
        <td>Price:</td>
        <td>{{'$' . $list}}</td>
    </tr>
    <tr>
        <td>Discount Percent:</td>
        <td>{{$discount . '%'}}</td>
    </tr>
    <tr>
        <td>Discount Amount:</td>
        <td>{{'$' . $discount_amount}}</td>
    </tr>
    <tr>
        <td>Discount Price:</td>
        <td>{{'-'.'$' . $price}}</td>
    </tr>
</table>
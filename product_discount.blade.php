

<form method="post">
    {{csrf_field()}}
    <table>
        <h2>Product Discount Calculator</h2>
        <tr>
            <td>Product Description:</td>
            <td>
                <input type="text" name="product">
            </td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td>
                <input type="text" name="list">
            </td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td>
                <input type="text" name="discount">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Caculate Discount">
            </td>
        </tr>
    </table>
</form>

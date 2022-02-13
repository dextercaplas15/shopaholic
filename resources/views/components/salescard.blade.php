<h2 class="card-title bg-success">Sales</h2>
<div class="wrap__card-details">
    <table style="width:100%">
        <tr>
            <td  class="bold">Number of Orders</td>
            <td>{{ number_format($ords) }}</td>
        </tr>
        <tr>
            <td class="bold">Total Items Ordered</td>
            <td>{{ number_format($items) }}</td>
        </tr>
        <tr>
            <td class="bold">Completed Orders</td>
            <td>{{ number_format($completed) }}</td>
        </tr>
        <tr>
            <td class="bold">Pending</td>
            <td>{{ number_format($undelivered) }}</td>
        </tr>
    </table>
</div>
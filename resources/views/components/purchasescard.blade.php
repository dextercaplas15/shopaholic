<h2 class="card-title bg-primary text-white">Purchases</h2>
<div class="wrap__card-details">
    <table style="width:100%">
        <tr>
            <td  class="bold">Total Inventory Cost</td>
            <td>{{ number_format($inventory) }}</td>
        </tr>
        <tr>
            <td class="bold">Purchases Count</td>
            <td>{{ number_format($purchases) }}</td>
        </tr>
        <tr>
            <td class="bold">Expenditures</td>
            <td>{{ number_format($expenditures) }}</td>
        </tr>
        <tr>
            <td class="bold">Total Items In Stock</td>
            <td>{{ number_format($quantity) }}</td>
        </tr>
    </table>
</div>
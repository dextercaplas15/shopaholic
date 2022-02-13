<h2 class="card-title bg-warning">Inventory Analysis</h2>
<div class="wrap__card-details">
    <table style="width:100%">
        <tr>
            <td  class="bold">Pending Orders Rate</td>
            <td>{{ number_format($ratio1) }}%</td>
        </tr>
        <tr>
            <td class="bold">Completed Orders Rate</td>
            <td>{{ number_format($ratio2) }}%</td>
        </tr>
        <tr>
            <td class="bold">Cancelled Orders Rate</td>
            <td>{{ number_format($ratio4) }}%</td>
        </tr>
        <tr>
            <td class="bold">Orders to Inventory</td>
            <td>{{ number_format($ratio3) }}%</td>
        </tr>
    </table>
</div>
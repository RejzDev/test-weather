<div class="block">
    <table>
<tr>
    <th>Місто</th><td>
        {$rsWeather->name}</td>
</tr>
    <tr>
    <th>Температура</th>
        <td>{$rsWeather->main->temp|string_format:"%d"} °C</td>
</tr>

    </table>
</div>

<div class="block">
    <table>
<tr>
    <th>Місто</th><td>
        {$rsWeather->city->name}</td>
</tr>
    <tr>
    <th>Температура</th>
        <td>{$rsWeather->list[0]->main->temp|string_format:"%d"} °C</td>
</tr>
        <tr>
            <th>Опис</th>
            <td>{$rsWeather->list[0]->weather[0]->description}</td>
        </tr>
        <tr>
            <th>Швидкість вітру</th>
            <td>{$rsWeather->list[0]->wind->speed} м/с</td>
        </tr>
        <tr>
            <th>Дата та час</th>
            <td>{$rsWeather->list[0]->dt_txt}</td>
        </tr>


    </table>
</div>

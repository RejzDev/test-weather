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




    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">{$rsWeather->list[0]->main->temp|string_format:"%d"} °C</a></li>
        <li><a data-toggle="tab" href="#menu1">{$rsWeather->list[8]->main->temp|string_format:"%d"} °C</a></li>
        <li><a data-toggle="tab" href="#menu2">{$rsWeather->list[16]->main->temp|string_format:"%d"} °C</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>{$rsWeather->list[0]->main->temp|string_format:"%d"} °C</h3>
            <p>
                <tr>
                    <th>Місто</th><td>
                        {$rsWeather->city->name}</td>
                    <br>
                </tr>
                <tr>
                    <th>Температура</th>
                    <td>{$rsWeather->list[0]->main->temp|string_format:"%d"} °C</td><br>
                </tr>
                <tr>
                    <th>Опис</th>
                    <td>{$rsWeather->list[0]->weather[0]->description}</td><br>
                </tr>
                <tr>
                    <th>Швидкість вітру</th>
                    <td>{$rsWeather->list[0]->wind->speed} м/с</td><br>
                </tr>
                <tr>
                    <th>Дата та час</th>
                    <td>{$rsWeather->list[0]->dt_txt}</td><br>
                </tr></p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>{$rsWeather->list[1]->main->temp|string_format:"%d"} °C</h3>
            <p> <tr>
                    <th>Місто</th><td>
                        {$rsWeather->city->name}</td>
                    <br>
                </tr>
                <tr>
                    <th>Температура</th>
                    <td>{$rsWeather->list[8]->main->temp|string_format:"%d"} °C</td><br>
                </tr>
                <tr>
                    <th>Опис</th>
                    <td>{$rsWeather->list[8]->weather[0]->description}</td><br>
                </tr>
                <tr>
                    <th>Швидкість вітру</th>
                    <td>{$rsWeather->list[8]->wind->speed} м/с</td><br>
                </tr>
                <tr>
                    <th>Дата та час</th>
                    <td>{$rsWeather->list[6]->dt_txt}</td><br>
                </tr></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
        </div>
    </div>
</div>



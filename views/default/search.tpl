<div class="block">


    <div class="row ">
        {for $i =0 to $datesCnt}
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">

                    <h3 class="card-title">{$rsWeather->list[$i]->main->temp|string_format:"%d"} °C</h3>
                    <p class="card-text">
                        <tr>
                            <th>Місто</th><td>
                                {$rsWeather->city->name}</td>
                            <br>
                        </tr>
                        <tr>
                            <th>Температура</th>
                            <td>{$rsWeather->list[$i]->main->temp|string_format:"%d"} °C</td><br>
                        </tr>
                        <tr>
                            <th>Опис</th>
                            <td>{$rsWeather->list[$i]->weather[0]->description}</td>
                            <td><img src='http://openweathermap.org/img/w/{$rsWeather->list[$i]->weather[0]->icon}.png' alt='Icon depicting current weather.'></td><br>
                        </tr>
                        <tr>
                            <th>Швидкість вітру</th>
                            <td>{$rsWeather->list[$i]->wind->speed} м/с</td><br>
                        </tr>
                        <tr>
                            <th>Дата та час</th>
                            <td>{$rsWeather->list[$i]->dt_txt}</td><br>
                        </tr></p>

                </div>
            </div>
        </div>
        {/for}
</div>

</div>




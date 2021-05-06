
<div class="container">
    <form action="/search/" method="GET">
        <div class="mb-3">

            <input type="search" class="form-control" name="nameCity" id="nameCity" placeholder="Введіть назву міста">

        </div>

        <input type="submit" class="btn btn-primary " value="Найти">
    </form>
</div>

<div class="block">
        <h3>{$rsWeather->city->name}</h3>
    <ul class="nav nav-tabs">

        <li class="active"><a data-toggle="tab" href="#home"><p>{$dayOfWeek[0]['dayOfWeek']}</p>{$rsWeather->list[0]->dt_txt|date_format:"%d"} <p>{$dayOfWeek[0]['months']}</p> </a></li>
        <li><a data-toggle="tab" href="#menu2"><p>{$dayOfWeek[9]['dayOfWeek']}</p>{$rsWeather->list[9]->dt_txt|date_format:"%d"} <p>{$dayOfWeek[9]['months']}</p> </a></li>
        <li><a data-toggle="tab" href="#menu3"><p>{$dayOfWeek[17]['dayOfWeek']}</p>{$rsWeather->list[18]->dt_txt|date_format:"%d"} <p>{$dayOfWeek[18]['months']}</p> </a></li>
        <li><a data-toggle="tab" href="#menu4"><p>{$dayOfWeek[25]['dayOfWeek']}</p>{$rsWeather->list[26]->dt_txt|date_format:"%d"} <p>{$dayOfWeek[26]['months']}</p> </a></li>
        <li><a data-toggle="tab" href="#menu5"><p>{$dayOfWeek[33]['dayOfWeek']}</p>{$rsWeather->list[34]->dt_txt|date_format:"%d"} <p>{$dayOfWeek[34]['months']}</p> </a></li>
    </ul>


    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
    {for $i=0 to 40}
    {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}


                    <th scope="col">{$rsWeather->list[$i]->dt_txt|date_format:"%H:%M"}</th>
    {/if}
    {/for}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    {for $i=0 to 40}
                    {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                    <td><img src='http://openweathermap.org/img/w/{$rsWeather->list[$i]->weather[0]->icon}.png' alt='Icon depicting current weather.'></td>
                    {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    {for $i=0 to 40}
                        {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->temp|string_format:"%d"}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->wind->speed}</td>
                        {/if}
                    {/for}

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->grnd_level*0.75}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->humidity}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[0]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->pop}</td>
                        {/if}
                    {/for}
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu2" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}


                            <th scope="col">{$rsWeather->list[$i]->dt_txt|date_format:"%H:%M"}</th>
                        {/if}
                    {/for}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td><img src='http://openweathermap.org/img/w/{$rsWeather->list[$i]->weather[0]->icon}.png' alt='Icon depicting current weather.'></td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->temp|string_format:"%d"}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->wind->speed}</td>
                        {/if}
                    {/for}

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->grnd_level*0.75}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->humidity}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[8]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->pop}</td>
                        {/if}
                    {/for}
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu3" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}

                            <th scope="col">{$rsWeather->list[$i]->dt_txt|date_format:"%H:%M"}</th>
                        {/if}
                    {/for}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td><img src='http://openweathermap.org/img/w/{$rsWeather->list[$i]->weather[0]->icon}.png' alt='Icon depicting current weather.'></td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->temp|string_format:"%d"}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->wind->speed}</td>
                        {/if}
                    {/for}

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->grnd_level*0.75}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->humidity}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[17]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->pop}</td>
                        {/if}
                    {/for}
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu4" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}


                            <th scope="col">{$rsWeather->list[$i]->dt_txt|date_format:"%H:%M"}</th>
                        {/if}
                    {/for}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td><img src='http://openweathermap.org/img/w/{$rsWeather->list[$i]->weather[0]->icon}.png' alt='Icon depicting current weather.'></td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->temp|string_format:"%d"}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->wind->speed}</td>
                        {/if}
                    {/for}

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->grnd_level*0.75}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->humidity}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[25]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->pop}</td>
                        {/if}
                    {/for}
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu5" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}


                            <th scope="col">{$rsWeather->list[$i]->dt_txt|date_format:"%H:%M"}</th>
                        {/if}
                    {/for}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td><img src='http://openweathermap.org/img/w/{$rsWeather->list[$i]->weather[0]->icon}.png' alt='Icon depicting current weather.'></td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->temp|string_format:"%d"}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->wind->speed}</td>
                        {/if}
                    {/for}

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->grnd_level*0.75}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->main->humidity}</td>
                        {/if}
                    {/for}
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    {for $i=0 to 40}
                        {if $dayOfWeek[33]['date']|date_format:"%d" == $rsWeather->list[$i]->dt_txt|date_format:"%d"}
                            <td>{$rsWeather->list[$i]->pop}</td>
                        {/if}
                    {/for}
                </tr>
                </tbody>
            </table>
            </p>
        </div>


    </div>

</div>




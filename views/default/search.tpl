<div class="weather">
    <h2 class="weather__title">Погода в городе <?php echo $data->name; ?></h2>
    <div class="weather__time">
        <p class="weather__time"><?php echo date("l g:i a", $currentTime); ?></p>
        <p class="weather__date"><?php echo date("jS F, Y",$currentTime); ?></p>
        <p class="weather__status"><?php echo ucwords($data->weather[0]->description); ?></p>
    </div>
    <div class="weather__forecast">
        <span class="weather__min"><?php echo $data->main->temp_min; ?>°C</span>
        <span class="weather__max"><?php echo $data->main->temp_max; ?>°C</span>
    </div>
    <p class="weather__humidity">Влажность: <?php echo $data->main->humidity; ?> %</p>
    <p class="weather__wind">Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
</div>
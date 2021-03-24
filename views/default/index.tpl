    {* Шаблон главнай страници *}

    {foreach $rsProducts as $item}
        <div style="float: left; padding: 0px 30px 40px 0px;">
            <a href="/product/{$item['id']}/">
                <img src="/images/products/{$item['image']}" width="100"/>
            </a><br />
            <a href="/product/{$item['id']}/">{$item['name']}</a>
        </div>
        {if $item@iteration mod 3== 0}
            <div style="clear: both;"></div>
        {/if}
    {/foreach}


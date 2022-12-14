{include file='header.tpl'}

<div class="container">
<main class="grid">
      {foreach from=$bedrooms item=image}
        <a href="/bedroom.php?key={$image.key}"> <img src="{$image.img}" alt="Sample photo"></a>
      {/foreach}      
</main>
</div>


{include file='footer.tpl'}